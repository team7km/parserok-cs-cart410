<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 13:18:10
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/themes/responsive/templates/addons/geo_maps/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17400323415d0f51e218ea71-59713973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d686395326810538b6d9e3bf7299f7b9d9606f0' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/themes/responsive/templates/addons/geo_maps/hooks/index/scripts.post.tpl',
      1 => 1561285028,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17400323415d0f51e218ea71-59713973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f51e21a93b8_71071248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f51e21a93b8_71071248')) {function content_5d0f51e21a93b8_71071248($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/user01/data/www/alex.parserok.pp.ua/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/alex.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("backend:addons/geo_maps/components/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/locator.js"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("backend:addons/geo_maps/components/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/locator.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
