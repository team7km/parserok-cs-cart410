<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 19:40:53
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10113265265d051f95338af5-44473447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3238255aed1de39120aebb6575cdb6651464afc3' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl',
      1 => 1560354888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10113265265d051f95338af5-44473447',
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
  'unifunc' => 'content_5d051f953ef745_39372366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d051f953ef745_39372366')) {function content_5d051f953ef745_39372366($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.messages','vendor_communication.messages'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars(fn_url("vendor_communication.threads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("vendor_communication.messages");?>
</a></li>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars(fn_url("vendor_communication.threads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("vendor_communication.messages");?>
</a></li>
<?php }
}?><?php }} ?>
