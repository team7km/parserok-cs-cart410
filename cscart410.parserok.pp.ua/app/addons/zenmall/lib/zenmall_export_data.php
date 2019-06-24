<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }
use Tygh\Registry;
class ZenMallExportData{

	public $shopInfo = array();
	public $currencies = array();
	public $categories = array();
	public $offers = array();
	protected $lang_code = DESCR_SL;

	public function __construct(){
		$this->getShopInfo();
		$this->getCurrencies();
		$this->getCategories();
	}

	private function getShopInfo(){
		$this->shopInfo = array(
            'name' => Registry::get('settings.Company.company_name'),
            'company' => Registry::get('settings.Company.company_name'),
            'url' => Registry::get('config.http_location'),
            'platform' => PRODUCT_NAME,
            'version' => PRODUCT_VERSION,
            'email' => Registry::get('settings.Company.company_orders_department'),
        );
	}

	private function getCurrencies(){
		$currencies = Registry::get('currencies');
		foreach ($currencies as $currency) {
			if($currency['status'] == 'A'){
				$this->currencies[] = array('id'=>$currency['currency_code'],'rate'=>$currency['coefficient']);
				if($currency['coefficient'] == '1.0000'){
					$this->primary_currency = $currency;
				}
			}
		}
	}

	private function getCategories(){
		$categories = fn_get_categories_tree();
		if(count($categories) > 0){
			foreach ($categories as $company) {
				if(isset($company['subcategories']) && count($company['subcategories']) > 0){
					$this->getCategoriesRecursive($company['subcategories']);
				}
			}
		}
	}

	private function getCategoriesRecursive($categories){
		if(count($categories) > 0){
			foreach ($categories as $category) {
				if($category['status'] == 'A'){
					$this->categories[] = array(
						'id'=>$category['category_id'],
						'name'=>$category['category'],
						'parent_id'=>$category['parent_id'],
					);
					$this->getOffers($category['category_id']);
					$this->getCategoriesRecursive($category['subcategories']);
				}
			}
		}
	}
	
	private function getOffers($category_id){
		$offered = array();

        $fields = array(
            'p.*',
            'd.lang_code',
            'pc.category_id',
            'cd.category',
            'pp.price',
            'd.product',
            'd.full_description',
        );

        $fields[] = "(
                SELECT GROUP_CONCAT(IF(pc2.link_type = 'M', CONCAT(pc2.category_id, 'M'), pc2.category_id))
                FROM ?:products_categories as pc2
                WHERE product_id = p.product_id
            ) as category_ids";

        $joins = array(
            db_quote(
                "LEFT JOIN ?:product_descriptions as d ON d.product_id = p.product_id AND d.lang_code = ?s",
                $this->lang_code
            ),
            db_quote(
                "LEFT JOIN ?:product_prices as pp"
                . " ON pp.product_id = p.product_id AND pp.lower_limit = 1 AND pp.usergroup_id = 0"
            ),
            db_quote(
                "LEFT JOIN ?:products_categories as pc ON pc.product_id = p.product_id AND pc.link_type = ?s",
                'M'
            ),
            db_quote(
                "LEFT JOIN ?:category_descriptions as cd ON cd.category_id = pc.category_id AND cd.lang_code = ?s",
                $this->lang_code
            )
        );
		

        $ids = db_get_fields("SELECT p.product_id FROM ?:products as p
        	LEFT JOIN ?:products_categories as pc ON pc.product_id = p.product_id 
        	WHERE p.status = ?s AND pc.category_id = ?n", 'A', $category_id);

    	if(count($ids) == 0){
			return;
    	}

        $products = db_get_array(
            'SELECT ' . implode(', ', $fields)
            . ' FROM ?:products as p'
            . ' ' . implode(' ', $joins)
            . ' WHERE p.product_id IN(?n)'
            , $ids
        );

        $main_images = fn_get_image_pairs($ids, 'product', 'M', false, true, $this->lang_code);
        $add_images = fn_get_image_pairs($ids, 'product', 'A', false, true, $this->lang_code);

        $params = array(
            'get_options' => false,
            'get_taxed_prices' => false,
            'detailed_params' => false,
        );
        fn_gather_additional_products_data($products, $params);

        foreach ($products as $k => &$product) {
            $offer = array('id'=>null, 'available'=>true, 'bid'=>'', 'cbid'=>'', 'data'=>array(), 'params'=>array());

            $price = !floatval($product['price']) ? fn_parse_price($product['price']) : intval($product['price']);
            if (empty($price) || $product['amount'] <= 0) {
                unset($products[$k]);
                continue;
            }

            $offer['id'] = $product['product_id'];
            $offer['data']['url'] = fn_url('products.view?product_id=' . $product['product_id']);
	        $offer['data']['categoryId'] = $product['category_id'];
	        $offer['data']['name'] = $product['product'];
	        $offer['data']['description'] = strip_tags($product['full_description']);
	        $offer['data']['currencyId'] = $this->primary_currency['currency_code'];

	        //Picture
        	$images = array_merge($main_images[$offer['id']], $add_images[$offer['id']]);
            if(count($images) > 0){
            	$offer['data']['picture'] = $this->getImageUrl($images[0]);
            }
            //Price
	        $price_fields = array('price', 'list_price', 'base_price');
	        foreach ($price_fields as $field) {
	            $product[$field] = fn_format_price($product[$field], $this->primary_currency['currency_code'], $this->primary_currency['decimals'], false);
                $product[$field] = fn_format_rate_value($product[$field], 'F', $this->primary_currency['decimals'], '.', '', $this->primary_currency['coefficient']);
	            if (empty($product[$field])) {
	                $product[$field] = floatval($product[$field]) ? $product[$field] : fn_parse_price($product[$field]);
	            }
	        }
        	$offer['data']['price'] = !empty($product['price']) ? $product['price'] : "0.00";
	        if (!empty($product['base_price']) && $product['price'] < $product['base_price'] * 0.95) {
	            $offer['data']['oldprice'] = $product['base_price'];
	        } elseif (!empty($product['list_price']) && $product['price'] < $product['list_price'] * 0.95) {
	            $offer['data']['oldprice'] = $product['list_price'];
	        }

	        $product['product_features'] = $this->getProductFeatures($product);
	        if (!empty($product['product_features'])) {
	            foreach ($product['product_features'] as $feature) {
	                $offer['params'][] = array('name' => $feature['description'], 'text' => $feature['value']);
	            }
	        }
            $this->offers[] = $offer;
        }
	}

	private function getProductFeatures($product){
        $features = array();
        $lang_code = $this->lang_code;
        if (!isset($features[$lang_code])) {
            list($features[$lang_code]) = fn_get_product_features(array('plain' => true), 0, $lang_code);
        }
        $product = array(
            'product_id' => $product['product_id'],
            'main_category' => $product['category_id']
        );
        $product_features = fn_get_product_features_list($product, 'A', $lang_code);

        $result = array();
        if (!empty($product_features)) {
            foreach ($product_features as $f) {
                $display_on_catalog = $features[$lang_code][$f['feature_id']]['display_on_catalog'];
                $display_on_product = $features[$lang_code][$f['feature_id']]['display_on_product'];

                if ($display_on_catalog == "Y" || $display_on_product == "Y") {
                    if ($f['feature_type'] == "C") {
                        $result[] = array(
                            'description' => $f['description'],
                            'value' => ($f['value'] == "Y") ? __("yes") : __("no")
                        );
                    } elseif ($f['feature_type'] == "S" && !empty($f['variant'])) {
                        $result[] = array(
                            'description' => $f['description'],
                            'value' => $f['variant']
                        );
                    } elseif ($f['feature_type'] == "T" && !empty($f['value'])) {
                        $result[] = array(
                            'description' => $f['description'],
                            'value' => $f['value']
                        );
                    } elseif ($f['feature_type'] == "M") {
                        if (!empty($f['variants'])) {
                            $_value = '';
                            $counter = count($f['variants']);
                            foreach ($f['variants'] as $_variant) {
                                if ($counter > 1) {
                                    $_value .= $_variant['variant'] . ', ';
                                } else {
                                    $_value = $_variant['variant'];
                                }
                            }
                            $_value = ($counter > 1) ? substr($_value, 0, -2) : $_value;
                            $result[] = array(
                                'description' => $f['description'],
                                'value' => $_value
                            );
                        }
                    } elseif ($f['feature_type'] == "N") {
                        $result[] = array(
                            'description' => $f['description'],
                            'value' => $f['variant']
                        );
                    } elseif ($f['feature_type'] == "O") {
                        $result[] = array(
                            'description' => $f['description'],
                            'value' => $f['value_int']
                        );
                    } elseif ($f['feature_type'] == "E") {
                        $result[] = array(
                            'description' => $f['description'],
                            'value' => $f['variant']
                        );
                    }
                }
            }
        }
        return !empty($result) ? $result : null;
    }

    private function getImageUrl($image_pair){
        $url = '';
        if(isset($image_pair['detailed'])){
        	$url = $image_pair['detailed']['image_path'];
        }else{
            $image_data = fn_image_to_display($image_pair);
            if (!empty($image_data) && strpos($image_data['image_path'], '.php')) {
                $image_data['image_path'] = fn_generate_thumbnail(
                    $image_data['detailed_image_path'],
                    $image_data['width'],
                    $image_data['height']
                );
            }
            if (!empty($image_data['image_path'])) {
                $url = $image_data['image_path'];
            }
        }
        $url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        $url = fn_query_remove($url, 't');
        return str_replace('–', urlencode('–'), $url);
    }
}
