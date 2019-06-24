<?php /* Smarty version Smarty-3.1.21, created on 2019-06-18 13:24:41
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10986265135d08bbe96a19a5-81327823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc2e38bf79656971e26b810e08540cab78eaa490' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl',
      1 => 1560684663,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10986265135d08bbe96a19a5-81327823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'position' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d08bbe9835d25_71048113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d08bbe9835d25_71048113')) {function content_5d08bbe9835d25_71048113($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('promo_code','promo_code_or_certificate','apply','apply','promo_code','promo_code_or_certificate','apply','apply'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-gift-certificate-coupon ty-discount-coupon__control-group ty-input-append">
    <label for="coupon_field<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-required"><?php echo $_smarty_tpl->__("promo_code");?>
</label>
    <input type="text" class="ty-input-text cm-hint" id="coupon_field<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" name="coupon_code" size="40" value="<?php echo $_smarty_tpl->__("promo_code_or_certificate");?>
" />
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"checkout.apply_coupon",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0);?>

</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-gift-certificate-coupon ty-discount-coupon__control-group ty-input-append">
    <label for="coupon_field<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-required"><?php echo $_smarty_tpl->__("promo_code");?>
</label>
    <input type="text" class="ty-input-text cm-hint" id="coupon_field<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" name="coupon_code" size="40" value="<?php echo $_smarty_tpl->__("promo_code_or_certificate");?>
" />
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"checkout.apply_coupon",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0);?>

</div><?php }?><?php }} ?>
