<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/


namespace Tygh\Addons\ProductVariations\Product;

use Tygh\Addons\ProductVariations\Product\Group\GroupFeatureCollection;
use Tygh\Addons\ProductVariations\Tools\QueryFactory;
use Tygh\Addons\ProductVariations\Product\Group\Repository as GroupRepository;
use Tygh\Enum\ProductFeatures;

/**
 * This class implements the methods for selecting products from the database
 *
 * @package Tygh\Addons\ProductVariations\Product
 */
class Repository
{
    /** @var string  */
    const TABLE_PRODUCTS = 'products';

    /** @var string  */
    const TABLE_PRODUCT_DESCRIPTIONS = 'product_descriptions';

    /** @var string  */
    const TABLE_PRODUCT_ULT_DESCRIPTIONS = 'ult_product_descriptions';

    /** @var string  */
    const TABLE_PRODUCT_FEATURE_VARIANTS = 'product_feature_variants';

    /** @var string  */
    const TABLE_PRODUCT_FEATURE_VARIANT_DESCRIPTIONS = 'product_feature_variant_descriptions';

    /** @var string  */
    const TABLE_PRODUCT_FEATURES = 'product_features';

    /** @var string  */
    const TABLE_PRODUCT_FEATURE_DESCRIPTIONS = 'product_features_descriptions';

    /** @var string  */
    const TABLE_PRODUCT_FEATURE_VALUES = 'product_features_values';

    /** @var string  */
    const TABLE_PRODUCT_GLOBAL_OPTION_LINKS = 'product_global_option_links';

    /** @var string */
    const TABLE_PRODUCTS_CATEGORIES = 'products_categories';

    /** @var string  */
    const TABLE_PRODUCT_FILTERS = 'product_filters';

    /** @var string  */
    const TABLE_PRODUCT_POPULARITY = 'product_popularity';

    /** @var int */
    const LOAD_VARIATIONS_CHUNK_SIZE = 2000;

    /** @var \Tygh\Addons\ProductVariations\Product\Group\Repository  */
    protected $group_repository;

    /** @var \Tygh\Addons\ProductVariations\Tools\QueryFactory */
    protected $query_factory;

    /** @var array */
    protected $lang_codes = [];

    /** @var string */
    protected $lang_code;

    /** @var string */
    protected $current_area;

    /**
     * Repository constructor.
     *
     * @param \Tygh\Addons\ProductVariations\Product\Group\Repository $group_repository
     * @param \Tygh\Addons\ProductVariations\Tools\QueryFactory       $query_factory
     * @param string                                                  $current_area
     * @param string                                                  $lang_code
     * @param array                                                   $lang_codes
     */
    public function __construct(
        GroupRepository $group_repository, QueryFactory $query_factory, $current_area, $lang_code,
        array $lang_codes = []
    ) {
        $this->group_repository = $group_repository;
        $this->query_factory = $query_factory;
        $this->current_area = $current_area;
        $this->lang_code = $lang_code;
        $this->lang_codes = $lang_codes;
    }

    /**
     * Finds products by product identifiers
     *
     * @param array       $product_ids
     * @param array       $extends
     * @param string|null $area
     *
     * @return array Indexed by product_id
     */
    public function findProducts(array $product_ids, array $extends = ['product_name'], $area = 'A')
    {
        $result = [];

        if (empty($product_ids)) {
            return $result;
        }

        list($products) = fn_get_products([
            'area'                   => $area,
            'extend'                 => $extends,
            'pid'                    => $product_ids,
            'group_child_variations' => false,
            'skip_rating'            => true,
            'sort_by'                => 'null'
        ]);

        foreach ($product_ids as $product_id) {
            if (!isset($products[$product_id])) {
                continue;
            }
            $result[$product_id] = $products[$product_id];
        }

        return $result;
    }

    /**
     * Finds product by product identifier
     *
     * @param int   $product_id
     * @param array $extends
     *
     * @return array
     */
    public function findProduct($product_id, array $extends = ['product_name'])
    {
        $result = $this->findProducts([$product_id], $extends);

        return reset($result);
    }

    /**
     * Finds features by feature identifiers, indexed by feature_id
     *
     * @param array $feature_ids
     *
     * @return array
     */
    public function findFeatures(array $feature_ids)
    {
        $query = $this->createQuery(
            self::TABLE_PRODUCT_FEATURES,
            ['feature_id' => $feature_ids],
            ['pf.feature_id', 'pf.feature_style', 'pfd.description', 'pf.position', 'pf.purpose', 'pf.display_on_catalog'],
            'pf'
        );

        $query
            ->addField(sprintf("(CASE WHEN pf.purpose = '%s' THEN 0 ELSE 1 END) AS purpose_position", FeaturePurposes::CREATE_CATALOG_ITEM))
            ->addInnerJoin(
                'pfd',
                self::TABLE_PRODUCT_FEATURE_DESCRIPTIONS,
                ['feature_id' => 'feature_id'],
                ['lang_code' => $this->lang_code]
            )
            ->setOrderBy(['purpose_position ASC', 'pf.position ASC', 'pf.feature_id ASC']);

        return $query->select('feature_id');
    }

    /**
     * Finds features by group feature list, indexed by feature_id
     *
     * @param \Tygh\Addons\ProductVariations\Product\Group\GroupFeatureCollection $group_features
     *
     * @return array
     */
    public function findFeaturesByFeatureCollection(GroupFeatureCollection $group_features)
    {
        $features = $this->findFeatures($group_features->getFeatureIds());

        foreach ($features as $feature_id => &$feature) {
            $feature['purpose'] = $group_features[$feature_id]->getFeaturePurpose();
        }
        unset($feature);

        return $this->sortFeaturesByPurposeAndPosition($features);
    }

    /**
     * Find usable to create variations group features
     *
     * @param int $product_id
     *
     * @return array
     */
    public function findAvailableFeatures($product_id)
    {
        list($features_list) = fn_get_product_features([
            'product_id'    => $product_id,
            'existent_only' => true,
            'exclude_group' => true,
            'purpose'       => FeaturePurposes::getAll(),
            'feature_types' => [
                ProductFeatures::TEXT_SELECTBOX,
                ProductFeatures::NUMBER_SELECTBOX
            ]
        ]);

        return $features_list;
    }

    /**
     * Loads variants for features
     *
     * @param array $features
     *
     * @return array
     */
    public function loadFeaturesVariants(array $features)
    {
        $feature_ids = array_column($features, 'feature_id');

        $query = $this->createQuery(
            self::TABLE_PRODUCT_FEATURE_VARIANTS,
            ['feature_id' => $feature_ids],
            ['fv.feature_id', 'fv.variant_id', 'fv.position', 'fvd.variant'],
            'fv'
        );

        $query
            ->addInnerJoin(
                'fvd',
                self::TABLE_PRODUCT_FEATURE_VARIANT_DESCRIPTIONS,
                ['variant_id' => 'variant_id'],
                ['lang_code' => $this->lang_code]
            )
            ->setOrderBy(['fv.position ASC', 'fv.variant_id ASC']);

        $features_variants = $query->select(['feature_id', 'variant_id']);

        foreach ($features as &$feature) {
            $feature['variants'] = $features_variants[$feature['feature_id']];
        }
        unset($feature);

        return $features;
    }

    /**
     * Loads variations features for products
     *
     * @param array $products
     * @param bool  $load_features
     *
     * @return array
     */
    public function loadProductsGroupInfo(array $products, $load_features = true)
    {
        $product_ids = array_column($products, 'product_id');

        $product_to_group_info = $this->group_repository->findGroupInfoByProductIds($product_ids);

        foreach ($products as &$product) {
            if (!isset($product_to_group_info[$product['product_id']])) {
                continue;
            }

            $group_info = $product_to_group_info[$product['product_id']];

            $product['variation_feature_ids'] = $group_info['feature_ids'];
            $product['variation_feature_collection'] = $group_info['feature_collection'];
            $product['variation_group_id'] = (int) $group_info['id'];
            $product['variation_group_code'] = $group_info['code'];
            $product['variation_parent_product_id'] = (int) $group_info['parent_product_id'];
            $product['variation_sub_group_id'] = sprintf('%s_%s',
                $group_info['id'],
                empty($group_info['parent_product_id']) ? $product['product_id'] : $group_info['parent_product_id']
            );
        }
        unset($product);

        if ($load_features) {
            return $this->loadProductsFeatures($products);
        }

        return $products;
    }

    /**
     * Loads variations features for product
     *
     * @param array $product
     *
     * @return array
     */
    public function loadProductGroupInfo(array $product)
    {
        $result = $this->loadProductsGroupInfo([$product]);

        return reset($result);
    }

    /**
     * Loads variations features for products
     *
     * @param array                                                               $products
     * @param \Tygh\Addons\ProductVariations\Product\Group\GroupFeatureCollection $group_features
     *
     * @return array
     */
    public function loadProductsFeatures(array $products, GroupFeatureCollection $group_features = null)
    {
        if (empty($products)) {
            return $products;
        }

        $lang_code = $this->lang_code;
        $sorted_features = $feature_collections = [];
        $feature_ids = $product_ids = [];

        if ($group_features) {
            $feature_collections[0] = $group_features;
            $feature_ids = $group_features->getFeatureIds();

            foreach ($products as &$product) {
                $product['variation_features'] = [];
                $product['variation_feature_ids'] = $group_features->getFeatureIds();
                $product['variation_feature_collection'] = $group_features->toArray();

                if (!isset($product['variation_group_id'])) {
                    $product['variation_group_id'] = 0;
                }

                $product_ids[] = $product['product_id'];
            }
            unset($product);
        } else {
            foreach ($products as &$product) {
                $product['variation_features'] = [];

                if (!isset($product['variation_feature_collection'], $product['variation_group_id'])) {
                    continue;
                }

                if (!isset($feature_collections[$product['variation_group_id']])) {
                    $feature_collection = GroupFeatureCollection::createFromFeatureList($product['variation_feature_collection']);
                    $feature_collections[$product['variation_group_id']] = $feature_collection;

                    $feature_ids = array_merge($feature_ids, $feature_collection->getFeatureIds());
                }

                $product_ids[] = $product['product_id'];
            }
            unset($product);

            $feature_ids = array_unique($feature_ids);
        }

        if (empty($feature_ids)) {
            return $products;
        }

        $features = $this->findFeatures($feature_ids);

        if (empty($features)) {
            return $products;
        }

        /**
         * @var int $features_group_id
         * @var GroupFeatureCollection $feature_collection
         */
        foreach ($feature_collections as $features_group_id => $feature_collection) {
            $sorted_features[$features_group_id] = [];

            foreach ($feature_collection as $group_feature) {
                if (!isset($features[$group_feature->getFeatureId()])) {
                    continue;
                }

                $feature = $features[$group_feature->getFeatureId()];
                $feature['purpose'] = $group_feature->getFeaturePurpose();

                $sorted_features[$features_group_id][$feature['feature_id']] = $feature;
            }

            $sorted_features[$features_group_id] = $this->sortFeaturesByPurposeAndPosition($sorted_features[$features_group_id]);
        }

        $query = $this->createQuery(
            self::TABLE_PRODUCT_FEATURE_VALUES,
            ['feature_id' => $feature_ids, 'product_id' => $product_ids, 'lang_code' => $lang_code],
            ['pfv.feature_id', 'pfv.product_id', 'pfv.variant_id', 'fv.position', 'fvd.variant'],
            'pfv'
        );

        $query
            ->addInnerJoin('fv', self::TABLE_PRODUCT_FEATURE_VARIANTS, ['feature_id' => 'feature_id', 'variant_id' => 'variant_id'])
            ->addInnerJoin('fvd', self::TABLE_PRODUCT_FEATURE_VARIANT_DESCRIPTIONS, ['variant_id' => 'variant_id'], ['lang_code' => $lang_code]);

        $product_variants = $query->select(['product_id', 'feature_id']);

        foreach ($products as &$product) {
            if (!isset($product_variants[$product['product_id']], $product['variation_group_id'])) {
                continue;
            }

            $features_group_id = $group_features ? 0 : $product['variation_group_id'];

            $product['variation_features'] = [];

            foreach ($sorted_features[$features_group_id] as $feature_id => $feature) {
                if (!isset($product_variants[$product['product_id']][$feature_id])) {
                    continue;
                }

                $variant = $product_variants[$product['product_id']][$feature_id];

                $feature['variant'] = $variant['variant'];
                $feature['variant_id'] = $variant['variant_id'];
                $feature['variant_position'] = $variant['position'];

                $product['variation_features'][$feature_id] = $feature;
            }
        }
        unset($product);

        return $products;
    }

    /**
     * Loads variations features for product
     *
     * @param array                                                               $product
     * @param \Tygh\Addons\ProductVariations\Product\Group\GroupFeatureCollection $features
     *
     * @return array
     */
    public function loadProductFeatures(array $product, GroupFeatureCollection $features = null)
    {
        $result = $this->loadProductsFeatures([$product], $features);

        return reset($result);
    }

    /**
     * Loads features combinations variants for products
     *
     * @param array $products
     *
     * @return array
     */
    public function loadProductsFeaturesVariants(array $products)
    {
        $group_features_variant_ids = $group_products = $group_parent_products = $group_ids = [];
        $is_preview = false;

        foreach ($products as $product) {
            if (empty($product['variation_group_id'])) {
                continue;
            }
            $group_ids[$product['variation_group_id']] = $product['variation_group_id'];

            if (isset($product['detailed_params']['is_preview'])) {
                $is_preview = $product['detailed_params']['is_preview'];
            }
        }

        if (empty($group_ids)) {
            return $products;
        }

        $variation_product_ids = $this->group_repository->findGroupProductIdsByGroupIds($group_ids);

        if (empty($variation_product_ids)) {
            return $products;
        }

        $variation_products = [];
        $chunks = array_chunk($variation_product_ids, self::LOAD_VARIATIONS_CHUNK_SIZE, true);

        foreach ($chunks as $ids) {
            $chunk_products = $this->findProducts($ids, ['product_name'], $is_preview ? 'A' : $this->current_area);
            $chunk_products = $this->loadProductsGroupInfo($chunk_products);
            $chunk_products = $this->loadProductsMainImage($chunk_products);
            $chunk_products = $this->generateProductsCombinationId($chunk_products);

            $variation_products += $chunk_products;
        }

        $group_product_ids = [];

        foreach ($variation_products as $product) {
            $group_id = $product['variation_group_id'];
            $variant_ids = [];

            if (empty($product['variation_features'])) {
                continue;
            }

            $variant_positions = [];

            foreach ($product['variation_features'] as $feature_id => $feature) {
                $variant_positions[$feature_id] = $feature['variant_position'];
                $variant_id = $feature['variant_id'];

                if (!isset($group_features_variant_ids[$group_id][$feature_id][$variant_id])) {
                    $group_features_variant_ids[$group_id][$feature_id][$variant_id] = array_intersect_key(
                        $feature,
                        array_flip(['variant', 'variant_id', 'variant_position'])
                    );
                }
            }

            foreach ($product['variation_features'] as $feature_id => $feature) {
                $variant_id = $feature['variant_id'];

                $variation_position = FeaturePurposes::isCreateCatalogItem($feature['purpose']) ? (int) !empty($product['variation_parent_product_id']) : 1;
                $variation_position .= implode('', array_diff_key($variant_positions, $variant_ids));

                $variant_ids[$feature_id] = $variant_id;
                $combination_id = $this->generateCombinationId($variant_ids);

                if (!isset($group_product_ids[$group_id][$combination_id])
                    || $variation_position < $group_product_ids[$group_id][$combination_id]['variation_position']
                ) {
                    $group_product_ids[$group_id][$combination_id] = [
                        'product_id'        => $product['product_id'],
                        'variation_position' => $variation_position
                    ];
                }
            }
        }

        foreach ($products as &$product) {
            if (empty($product['variation_group_id']) || empty($product['variation_features'])) {
                continue;
            }

            $group_id = $product['variation_group_id'];
            $variant_ids = [];

            $product['variation_features_variants'] = [];

            foreach ($product['variation_features'] as $feature_id => $feature) {
                $feature['variants'] = [];

                if (!isset($group_features_variant_ids[$group_id][$feature_id])) {
                    continue;
                }

                foreach ($group_features_variant_ids[$group_id][$feature_id] as $variation_variant_id => $variation_variant) {

                    $variant_ids[$feature_id] = $variation_variant_id;
                    $combination_id = $this->generateCombinationId($variant_ids);

                    $product_id = isset($group_product_ids[$group_id][$combination_id])
                        ? $group_product_ids[$group_id][$combination_id]['product_id']
                        : null;

                    if (!$product_id) {
                        continue;
                    }

                    $variation_variant['product'] = array_intersect_key($variation_products[$product_id], array_flip([
                        'product_id',
                        'product',
                        'variation_parent_product_id',
                        'parent_variation_combination_id',
                        'list_price',
                        'price',
                        'main_pair'
                    ]));

                    $feature['variants'][$variation_variant_id] = $variation_variant;
                }

                $variant_ids[$feature_id] = $feature['variant_id'];

                uasort($feature['variants'], function ($a, $b) {
                    if ($a['variant_position'] > $b['variant_position']) {
                        return 1;
                    } elseif ($a['variant_position'] < $b['variant_position']) {
                        return -1;
                    } elseif ($a['variant_id'] > $b['variant_id']) {
                        return 1;
                    } elseif ($a['variant_id'] < $b['variant_id']) {
                        return -1;
                    }

                    return 0;
                });

                $product['variation_features_variants'][$feature_id] = $feature;
            }
        }

        return $products;
    }

    /**
     * Loads features combinations variants for product
     *
     * @param array $product
     *
     * @return array
     */
    public function loadProductFeaturesVariants(array $product)
    {
        $result = $this->loadProductsFeaturesVariants([$product]);

        return reset($result);
    }

    /**
     * Loads products main images
     *
     * @param array $products
     *
     * @return array
     */
    public function loadProductsMainImage(array $products)
    {
        $product_ids = array_column($products, 'product_id');

        $products_images = fn_get_image_pairs($product_ids, 'product', 'M', true, true, $this->lang_code);

        foreach ($products as &$product) {
            $product_id = $product['product_id'];

            if (empty($product['main_pair']) && !empty($products_images[$product_id])) {
                $product['main_pair'] = reset($products_images[$product_id]);
            }
        }
        unset($product);

        return $products;
    }

    /**
     * Loads the variation name for products
     *
     * @param array $products
     *
     * @return array
     */
    public function loadProductsVariationName(array $products)
    {
        foreach ($products as &$product) {
            if (empty($product['variation_features'])) {
                continue;
            }

            $variant_names = [];

            foreach ($product['variation_features'] as $feature) {
                if (FeaturePurposes::isCreateVariationOfCatalogItem($feature['purpose'])) {
                    $variant_names[] = $feature['variant'];
                }
            }

            if ($variant_names) {
                $product['variation_name'] = sprintf('%s (%s)', $product['product'], implode(', ', $variant_names));
            } else {
                $product['variation_name'] = $product['product'];
            }
        }
        unset($product);

        return $products;
    }

    /**
     * Loads the variation name for product
     *
     * @param array $product
     *
     * @return array
     */
    public function loadProductVariationName(array $product)
    {
        $result = $this->loadProductsVariationName([$product]);

        return reset($result);
    }

    /**
     * Generates combination identifier for products
     *
     * @param array $products
     *
     * @return array
     */
    public function generateProductsCombinationId(array $products)
    {
        foreach ($products as &$product) {
            if (empty($product['variation_feature_ids'])) {
                continue;
            }

            $product['variation_combination_id'] = null;
            $product['parent_variation_combination_id'] = null;
            $parent_variant_ids = $variant_ids = [];

            foreach ($product['variation_feature_ids'] as $feature_id) {
                if (!isset($product['variation_features'][$feature_id])) {
                    continue 2;
                }

                $feature = $product['variation_features'][$feature_id];
                $variant_ids[$feature['feature_id']] = $feature['variant_id'];

                if (FeaturePurposes::isCreateCatalogItem($feature['purpose'])) {
                    $parent_variant_ids[$feature['feature_id']] = $feature['variant_id'];
                }
            }

            $product['variation_combination_id'] = $this->generateCombinationId($variant_ids);
            $product['parent_variation_combination_id'] = $this->generateCombinationId($parent_variant_ids);
        }
        unset($product);

        return $products;
    }

    /**
     * Generates combination identifier for product
     *
     * @param array $product
     *
     * @return array
     */
    public function generateProductCombinationId(array $product)
    {
        $result = $this->generateProductsCombinationId([$product]);

        return reset($result);
    }

    /**
     * Creates product
     *
     * @param array $product_data
     *
     * @return int
     */
    public function createProduct(array $product_data)
    {
        $product_id = $this->createQuery(self::TABLE_PRODUCTS)
            ->insert($product_data);

        if (isset($product_data['price'])) {
            $this->updateProductPrice($product_id, $product_data['price']);
        }

        $descriptions = [];

        foreach ($this->lang_codes as $lang_code) {
            $descriptions[] = [
                'product_id'        => $product_id,
                'lang_code'         => $lang_code,
                'product'           => $product_data['product'],
                'shortname'         => isset($product_data['shortname']) ? $product_data['shortname'] : '',
                'short_description' => isset($product_data['short_description']) ? $product_data['short_description'] : '',
                'full_description'  => isset($product_data['full_description']) ? $product_data['full_description'] : '',
                'meta_keywords'     => isset($product_data['meta_keywords']) ? $product_data['meta_keywords'] : '',
                'meta_description'  => isset($product_data['meta_description']) ? $product_data['meta_description'] : '',
                'search_words'      => isset($product_data['search_words']) ? $product_data['search_words'] : '',
                'page_title'        => isset($product_data['page_title']) ? $product_data['page_title'] : '',
                'promo_text'        => isset($product_data['promo_text']) ? $product_data['promo_text'] : '',
            ];
        }

        $this->createQuery(self::TABLE_PRODUCT_DESCRIPTIONS)->multipleInsert($descriptions);

        return $product_id;
    }

    /**
     * Updates product price
     *
     * @param int   $product_id
     * @param float $price
     * @param array $prices
     */
    public function updateProductPrice($product_id, $price, array $prices = [])
    {
        fn_update_product_prices($product_id, [
            'price'  => $price,
            'prices' => $prices,
        ]);
    }

    /**
     * Updates product features values
     *
     * @param int   $product_id
     * @param array $values
     */
    public function updateProductFeaturesValues($product_id, array $values)
    {
        if (!$product_id || !$values) {
            return;
        }

        $this->createQuery(self::TABLE_PRODUCT_FEATURE_VALUES, ['product_id' => $product_id, 'feature_id' => array_keys($values)])->delete();

        $insert_list = [];

        foreach ($values as $feature_id => $variant_id) {
            foreach ($this->lang_codes as $lang_code) {
                $insert_list[] = [
                    'product_id' => $product_id,
                    'feature_id' => $feature_id,
                    'lang_code'  => $lang_code,
                    'variant_id' => $variant_id
                ];
            }
        }

        $this->createQuery(self::TABLE_PRODUCT_FEATURE_VALUES)->multipleInsert($insert_list);
    }

    /**
     * Generates combination identifier by variant identifiers
     *
     * @param array $variant_ids
     *
     * @return string
     */
    public function generateCombinationId(array $variant_ids)
    {
        sort($variant_ids);

        return implode('_', $variant_ids);
    }

    /**
     * @return string
     */
    public function getLangCode()
    {
        return $this->lang_code;
    }

    /**
     * @param string $lang_code
     */
    public function setLangCode($lang_code)
    {
        $this->lang_code = $lang_code;
    }


    /**
     * Finds parent products that have their quantity at 0
     *
     * @param array $product_ids
     *
     * @return array
     */
    public function findParentProductIdsWithZeroQuantity(array $product_ids)
    {
        $query = $this->createQuery(self::TABLE_PRODUCTS, [
            'product_id' => $product_ids
        ]);
        $query->addConditions([
            'parent_product_id' => 0,
            'amount'            => 0,
        ]);
        $query->addField('product_id');

        return $query->column();
    }

    /**
     * Finds the most popular active product
     *
     * @param array $product_ids
     *
     * @return int
     */
    public function findActiveAndMorePopularProductId(array $product_ids)
    {
        $query = $this->createQuery([self::TABLE_PRODUCTS => 'product'], [
            'product_id' => $product_ids,
            'status'     => 'A',
        ]);

        $query
            ->addCondition('product.amount > 0')
            ->addField('product.product_id')
            ->addLeftJoin('popularity', self::TABLE_PRODUCT_POPULARITY, ['product_id' => 'product_id'])
            ->setOrderBy(['popularity.total DESC', 'product.product_id ASC'])
            ->setLimit(1);

        return (int) $query->scalar();
    }

    /**
     * Creates query instance
     *
     * @param string|array $table_id
     * @param array        $conditions
     * @param array        $fields
     * @param string       $table_alias
     *
     * @return \Tygh\Addons\ProductVariations\Tools\Query
     */
    protected function createQuery($table_id, array $conditions = [], array $fields = [], $table_alias = null)
    {
        return $this->query_factory->createQuery($table_id, $conditions, $fields, $table_alias);
    }

    /**
     * Sorts features by purpose and position
     *
     * @param array $features
     *
     * @return array
     */
    protected function sortFeaturesByPurposeAndPosition(array $features)
    {
        uasort($features, function ($feature_a, $feature_b) {
            if ($feature_a['purpose'] === $feature_b['purpose']) {
                if ($feature_a['position'] < $feature_b['position']) {
                    return -1;
                } elseif ($feature_a['position'] > $feature_b['position']) {
                    return 1;
                } else {
                    return $feature_a['feature_id'] < $feature_b['feature_id'] ? -1 : 1;
                }
            } elseif (FeaturePurposes::isCreateCatalogItem($feature_a['purpose'])) {
                return -1;
            } else {
                return 1;
            }
        });

        return $features;
    }
}
