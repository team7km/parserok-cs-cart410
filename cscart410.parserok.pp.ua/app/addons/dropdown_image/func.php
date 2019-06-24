<?php
use Tygh\Registry;
use Tygh\BlockManager\Block;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_get_dropdown_image_by_categ($category_id,$company_id){

    if (fn_allowed_for('ULTIMATE') && Registry::get('runtime.company_id')) {
        $dropdown_image_id = db_get_field(
            "SELECT dropdown_image_id FROM ?:dropdown_images " .
            "WHERE categ_id = ?i AND company_id = ?i",
            $category_id, $company_id);
    }else{
        $dropdown_image_id = db_get_field(
            "SELECT dropdown_image_id FROM ?:dropdown_images " .
            "WHERE categ_id = ?i",
            $category_id);
    }

    $dropdown_image = fn_get_dropdown_image($dropdown_image_id);

    return $dropdown_image;
}

function fn_get_dropdown_image($dropdown_image_id)
{
    $fields = array (
        'dropdown_image_id',
        'dd_status',
        'image_width',
        'image_height',
        'url',
        'custom_menu_settings',
        'push_menu_items',
        'offset_right',
        'offset_bottom',
        'menu_width',
        'menu_min_height'
    );

    $dropdown_image = db_get_row(
        "SELECT ?p FROM ?:dropdown_images " .
        "WHERE dropdown_image_id = ?i ",
        implode(", ", $fields), $dropdown_image_id);

    return $dropdown_image;
}

function fn_dropdown_image_get_category_data(&$category_id, &$field_list, &$join, &$lang_code)
{
    $field_list .= ', ?:dropdown_images.dropdown_image_id as dropdown_image_id';
    $join .= db_quote(
        " LEFT JOIN ?:dropdown_images ON ?:dropdown_images.categ_id = ?i",
        $category_id
    );

    return true;
}

function fn_update_dropdown_image($data, $dropdown_image_id)
{

    if (!empty($dropdown_image_id)) {
        db_query("UPDATE ?:dropdown_images SET ?u WHERE dropdown_image_id = ?i", $data, $dropdown_image_id);
    } else {
        $dropdown_image_id = $data['dropdown_image_id'] = db_query("REPLACE INTO ?:dropdown_images ?e", $data);
    }

    return true;
}


function fn_dropdown_image_update_category_post(&$category_data, &$category_id){
    $fields=array(
        'dd_status'                =>  'et_dd_active',
    );
    if (isset($category_data['company_id'])){
        $fields['company_id'] = 'company_id';
    }
    if (isset($category_data['et_dd_active']) && $category_data['et_dd_active']=='Y') {
        $fields['image_width']              = 'et_dd_image_width';
        $fields['image_height']             = 'et_dd_image_height';
        $fields['url']                      = 'et_dd_url';
        $fields['custom_menu_settings']     = 'et_dd_custom_menu_settings';
        $fields['push_menu_items']          = 'et_dd_push_menu_items';
    }

    if (isset($category_data['et_dd_custom_menu_settings']) && $category_data['et_dd_custom_menu_settings']=='Y'){
        $fields['offset_right']     =   'et_dd_offset_right';
        $fields['offset_bottom']    =   'et_dd_offset_bottom';
        $fields['menu_width']       =   'et_dd_menu_width';
        $fields['menu_min_height']  =   'et_dd_min_menu_height';
    }

    $dropdown_image_id=isset($category_data['et_dd_id']) ? $category_data['et_dd_id'] : '';


    if (isset($category_data['et_dd_active'])) {

        foreach ($fields as $key => $value) {
            $data[$key]=$category_data[$value];
        }
        $data['categ_id']=$category_id;

        fn_update_dropdown_image($data,$dropdown_image_id);
    }

    return true;
}
