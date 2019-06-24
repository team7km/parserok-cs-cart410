<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
	'get_category_data',
    'update_category_post'
);
