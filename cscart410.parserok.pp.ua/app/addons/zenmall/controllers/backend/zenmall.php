<?php
use Tygh\Registry;
// use Tygh\Settings;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	include_once(Registry::get('config.dir.addons') . 'zenmall/lib/zenmall_export_data.php');
	include_once(Registry::get('config.dir.addons') . 'zenmall/lib/zenmall_export_xml.php');

	$data = new ZenMallExportData();
	$xml = new ZenMallExportXML();

	$path = $_SERVER['DOCUMENT_ROOT'] . '/zenmall.xml';
	$export_url = "http://" . $_SERVER['HTTP_HOST'] . '/zenmall.xml';

    if(count($data->categories)>0){
		$xml->shopInfo = $data->shopInfo;
		$xml->currencies = $data->currencies;
		$xml->categories = $data->categories;
		$xml->offers = $data->offers;
		$xml->outputFile = $path;
		$xml->run();

		Registry::get('ajax')->assign('non_ajax_notifications', true);
		Registry::get('ajax')->assign('error', false);
		Registry::get('ajax')->assign('export_url', $export_url);
    }else{
    	Registry::get('ajax')->assign('non_ajax_notifications', true);
		Registry::get('ajax')->assign('error', true);
		Registry::get('ajax')->assign('error_message', 'ZENMALL_EXPORT_ERROR_CATEGORIES_NOT_FOUND');
    }
}

$view = Registry::get('view');
$view_data['lang'] = CART_LANGUAGE;
Registry::get('view')->assign('view_data', $view_data);
