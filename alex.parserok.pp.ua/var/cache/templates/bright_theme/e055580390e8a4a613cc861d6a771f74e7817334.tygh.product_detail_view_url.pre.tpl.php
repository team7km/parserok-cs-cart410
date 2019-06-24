<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 13:18:02
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/themes/responsive/templates/addons/wishlist/hooks/products/product_detail_view_url.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20335659105d0f51da229c06-28109627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e055580390e8a4a613cc861d6a771f74e7817334' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/themes/responsive/templates/addons/wishlist/hooks/products/product_detail_view_url.pre.tpl',
      1 => 1561285045,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20335659105d0f51da229c06-28109627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'product_detail_view_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f51da2505d4_67747251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f51da2505d4_67747251')) {function content_5d0f51da2505d4_67747251($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/alex.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {?>
    <?php $_smarty_tpl->tpl_vars['product_detail_view_url'] = new Smarty_variable(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_detail_view_url']->value,"combination=".((string)$_smarty_tpl->tpl_vars['product']->value['combination']))), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['product_detail_view_url'] = clone $_smarty_tpl->tpl_vars['product_detail_view_url'];?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_detail_view_url.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_detail_view_url.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {?>
    <?php $_smarty_tpl->tpl_vars['product_detail_view_url'] = new Smarty_variable(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_detail_view_url']->value,"combination=".((string)$_smarty_tpl->tpl_vars['product']->value['combination']))), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['product_detail_view_url'] = clone $_smarty_tpl->tpl_vars['product_detail_view_url'];?>
<?php }
}?><?php }} ?>
