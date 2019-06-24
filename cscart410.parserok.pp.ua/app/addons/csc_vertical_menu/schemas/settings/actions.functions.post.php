<?php

use Tygh\Http;
use Tygh\Registry;

function fn_settings_actions_addons_csc_vertical_menu(&$new_value, $old_value) {

	fn_csc_check_license($new_value, $old_value, ($_REQUEST['id'])?$_REQUEST['id']:$_REQUEST['addon']);
	
	return true;
}

if (function_exists('fn_csc_check_license') != true) {
	function fn_csc_check_license($new_value, $old_value, $name) {
	
        $csc_req = array(
            'domain' => $_SERVER['HTTP_HOST'],
            'addon' => $name,
            'license' => Registry::get('addons.'. $name . '.licensekey')
        );
			
		$request = json_encode($csc_req);

		$check_host = "https://store.cs-coding.ru/index.php?dispatch=licenses.check&request=" . $request;
		
		$data = Http::get($check_host);
					
		if ($_REQUEST['dispatch'] == 'addons.update_status' && $data != 'approved') {
		  db_query("UPDATE ?:addons SET status = ?s WHERE addon = ?s", 'D', $name);
		  fn_set_notification('W', __('warning'), __('csc_your_license_is_not_valid'));		  
		  exit;
		}
		
		return true;
	}
}