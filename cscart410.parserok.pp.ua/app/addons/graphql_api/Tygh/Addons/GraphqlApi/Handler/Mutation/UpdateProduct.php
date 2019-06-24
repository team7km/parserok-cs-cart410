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

namespace Tygh\Addons\GraphqlApi\Handler\Mutation;

use Tygh\Addons\GraphqlApi\Context;
use Tygh\Addons\GraphqlApi\Handler\IHandler;
use Tygh\Enum\ProductFeatures;

class UpdateProduct implements IHandler
{
    /**
     * @var mixed
     */
    protected $source;

    /**
     * @var array
     */
    protected $args;

    /**
     * @var \Tygh\Addons\GraphqlApi\Context
     */
    protected $context;

    public function __construct($source, array $args, Context $context)
    {
        $this->source = $source;
        $this->args = $args;
        $this->context = $context;
    }

    public function run()
    {
        $product_id = $this->args['id'];
        $company_id = $this->context->getCompanyId();

        /** @var \Tygh\Addons\GraphqlApi\Validator\OwnershipValidator $ownership_validator */
        $ownership_validator = $this->context->getApp()['graphql_api.validator.ownership'];
        if (!$ownership_validator->validateProduct($product_id, $company_id)) {
            return false;
        }

        $this->prepareFeatures($this->args['product']);
        $this->prepareImages($this->args['product'], $product_id);
        $this->prepareShippingParameters($this->args['product']);

        $result = (bool) fn_update_product($this->args['product'], $product_id, $this->context->getLanguageCode());

        return $result;
    }

    public function prepareImages($params, $product_id = 0)
    {
        if (isset($params['main_pair'])) {

            $_REQUEST['file_product_main_image_icon'] = [];
            $_REQUEST['type_product_main_image_icon'] = [];
            $_REQUEST['file_product_main_image_detailed'] = [];
            $_REQUEST['type_product_main_image_detailed'] = [];
            $_REQUEST['product_main_image_data'] = [];

            if ($product_id != 0) {
                $products_images = fn_get_image_pairs($product_id, 'product', 'M', true, true, DEFAULT_LANGUAGE);
                if (!empty($products_images)) {
                    fn_delete_image_pair($products_images['pair_id']);
                }
            }

            if (!empty($params['main_pair']['detailed']['image_path'])) {
                $_REQUEST['file_product_main_image_detailed'][] = $params['main_pair']['detailed']['image_path'];
                $_REQUEST['type_product_main_image_detailed'][] = (strpos($params['main_pair']['detailed']['image_path'], '://') === false) ? 'server' : 'url';
            }

            if (!empty($params['main_pair']['icon']['image_path'])) {
                $_REQUEST['file_product_main_image_icon'][] = $params['main_pair']['icon']['image_path'];
                $_REQUEST['type_product_main_image_icon'][] = (strpos($params['main_pair']['icon']['image_path'], '://') === false) ? 'server' : 'url';
            }

            $_REQUEST['product_main_image_data'][] = [
                'pair_id' => 0,
                'type' => 'M',
                'object_id' => 0,
                'image_alt' => !empty($params['main_pair']['icon']['alt']) ? $params['main_pair']['icon']['alt'] : '',
                'detailed_alt' => !empty($params['main_pair']['detailed']['alt']) ? $params['main_pair']['detailed']['alt'] : '',
            ];
        }

        if (isset($params['image_pairs'])) {

            $_REQUEST['file_product_add_additional_image_icon'] = [];
            $_REQUEST['type_product_add_additional_image_icon'] = [];
            $_REQUEST['file_product_add_additional_image_detailed'] = [];
            $_REQUEST['type_product_add_additional_image_detailed'] = [];
            $_REQUEST['product_add_additional_image_data'] = [];

            if ($product_id != 0) {
                $additional_images = fn_get_image_pairs($product_id, 'product', 'A', true, true, DEFAULT_LANGUAGE);
                foreach ($additional_images as $pair) {
                    fn_delete_image_pair($pair['pair_id']);
                }
            }

            foreach ($params['image_pairs'] as $pair_id => $pair) {

                if (!empty($pair['icon']['image_path'])) {
                    $_REQUEST['file_product_add_additional_image_icon'][] = $pair['icon']['image_path'];
                    $_REQUEST['type_product_add_additional_image_icon'][] = (strpos($pair['icon']['image_path'], '://') === false) ? 'server' : 'url';
                }

                if (!empty($pair['detailed']['image_path'])) {
                    $_REQUEST['file_product_add_additional_image_detailed'][] = $pair['detailed']['image_path'];
                    $_REQUEST['type_product_add_additional_image_detailed'][] = (strpos($pair['detailed']['image_path'], '://') === false) ? 'server' : 'url';
                }

                $_REQUEST['product_add_additional_image_data'][] = [
                    'position' => !empty($pair['position']) ? $pair['position'] : 0,
                    'pair_id' => 0,
                    'type' => 'A',
                    'object_id' => 0,
                    'image_alt' => !empty($pair['icon']['alt']) ? $pair['icon']['alt'] : '',
                    'detailed_alt' => !empty($pair['detailed']['alt']) ? $pair['detailed']['alt'] : '',
                ];
            }
        }
    }

    public function getPrivilege()
    {
        return 'manage_catalog';
    }

    public function getCustomerPrivilege()
    {
        return false;
    }

    protected function prepareShippingParameters($product)
    {
        if (empty($product['shipping_params'])) {
            return;
        }

        foreach ($product['shipping_params'] as $key => $value) {
            $this->args['product'][$key] = $value;
        }

        unset($this->args['shipping_params']);
    }

    protected function prepareFeatures($product)
    {
        if (empty($product['product_features'])) {
            return;
        }

        $rebuilt_features = [];

        /** @var \Tygh\Database\Connection $db */
        $db = $this->context->getApp()['db'];

        foreach ($product['product_features'] as $i => $feature_data) {
            $feature_id = $feature_data['feature_id'];
            $feature_type = $db->getField('SELECT feature_type FROM ?:product_features WHERE feature_id = ?i', $feature_id);

            $value = $feature_data['value'];
            if ($feature_data['variants']) {
                $value = [];
                foreach ($feature_data['variants'] as $variant_data) {
                    if ($variant_data['variant_id'] === null) {
                        $this->args['product']['add_new_variant'][$feature_id]['variant'] = $variant_data['variant'];
                        continue;
                    }

                    if ($variant_data['selected']) {
                        $value[] = $variant_data['variant_id'];
                    }
                }
            }

            $rebuilt_features[$feature_id] = $value;
            if ($feature_type !== ProductFeatures::MULTIPLE_CHECKBOX) {
                $rebuilt_features[$feature_id] = reset($value);
            }
        }

        $this->args['product']['product_features'] = $rebuilt_features;
    }
}
