<?php /* Smarty version Smarty-3.1.21, created on 2019-06-22 17:08:27
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/store_locator/addons/geo_maps/hooks/store_locator/select_coordinates.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4719796455d0e365bed8991-75223209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8581a1b485cb8ae47f352ad602036926c445f5f' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/store_locator/addons/geo_maps/hooks/store_locator/select_coordinates.post.tpl',
      1 => 1560353924,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4719796455d0e365bed8991-75223209',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0e365bedf7a0_00378463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0e365bedf7a0_00378463')) {function content_5d0e365bedf7a0_00378463($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select"),'but_target_id'=>"map_picker",'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-opener",'but_id'=>"store_locator_picker_opener"), 0);?>
<?php }} ?>
