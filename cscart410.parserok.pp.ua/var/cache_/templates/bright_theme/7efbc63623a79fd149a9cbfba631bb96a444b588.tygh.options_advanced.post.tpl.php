<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 16:47:13
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/reward_points/hooks/products/options_advanced.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14646233725d04f6e1399925-29663627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7efbc63623a79fd149a9cbfba631bb96a444b588' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/reward_points/hooks/products/options_advanced.post.tpl',
      1 => 1560354897,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14646233725d04f6e1399925-29663627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'dont_show_points' => 0,
    'show_price_values' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04f6e15735a0_56897060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04f6e15735a0_56897060')) {function content_5d04f6e15735a0_56897060($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><input type="hidden" name="appearance[dont_show_points]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dont_show_points']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['show_price_values']->value&&!$_smarty_tpl->tpl_vars['dont_show_points']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/products/options_advanced.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/products/options_advanced.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><input type="hidden" name="appearance[dont_show_points]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dont_show_points']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['show_price_values']->value&&!$_smarty_tpl->tpl_vars['dont_show_points']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }
}?><?php }} ?>
