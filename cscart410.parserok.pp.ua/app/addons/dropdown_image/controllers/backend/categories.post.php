<?php
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return;
}

if ($mode == 'update') {

    $category_data = Registry::get('view')->getTemplateVars('category_data');

    $et_dd_image = fn_get_dropdown_image($category_data['dropdown_image_id']);

    if (!empty($et_dd_image)) {
        if (fn_allowed_for('MULTIVENDOR') || fn_allowed_for('ULTIMATE') && Registry::get('runtime.company_id')) {
            Registry::get('view')->assign('et_dd_image', $et_dd_image);
        }
    }

}
