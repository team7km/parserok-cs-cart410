<?php /* Smarty version Smarty-3.1.21, created on 2019-06-22 19:51:57
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/views/checkout/checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8346351095d0e5cad230335-18374209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '632b1c29eb95d1dc825d6d239b6901fb4c18d4b2' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/views/checkout/checkout.tpl',
      1 => 1560354879,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8346351095d0e5cad230335-18374209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'profile_field_sections' => 0,
    'contact_info_section_position' => 0,
    'shipping_section_position' => 0,
    'auth' => 0,
    'settings' => 0,
    'show_customer_fields_first' => 0,
    'payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0e5cad2ffed2_80154248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0e5cad2ffed2_80154248')) {function content_5d0e5cad2ffed2_80154248($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','sign_in'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>
 
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/lite_checkout.js"),$_smarty_tpl);?>
 
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_selector.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_search.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['contact_info_section_position'] = new Smarty_variable($_smarty_tpl->tpl_vars['profile_field_sections']->value[smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")]["position"], null, 0);?>
<?php $_smarty_tpl->tpl_vars['shipping_section_position'] = new Smarty_variable($_smarty_tpl->tpl_vars['profile_field_sections']->value[smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")]["position"], null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_customer_fields_first'] = new Smarty_variable($_smarty_tpl->tpl_vars['contact_info_section_position']->value<$_smarty_tpl->tpl_vars['shipping_section_position']->value, null, 0);?>


<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?>
        <div id="litecheckout_login_block" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
            <div class="ty-login-popup">
                <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup",'id'=>"litecheckout_login_block_inner"), 0);?>

            </div>
        </div>
    <?php }?>
<?php }?>

<div class="litecheckout litecheckout__form" id="litecheckout_form">
    <h1 class="litecheckout__page-title"><?php echo $_smarty_tpl->__('checkout');?>
</h1>
    <div data-ca-lite-checkout-element="form">
        <form name="litechekout_payments_form"
              id="litechekout_payments_form"
              action="<?php echo htmlspecialchars(fn_url("checkout.place_order"), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              data-ca-lite-checkout-element="checkout-form"
              data-ca-lite-checkout-ready-for-checkout="false"
              class="litecheckout__group litecheckout__payment-methods"
        >

            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_title'=>$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_information'=>$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_address'=>false,'show_notes'=>false), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/shipping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_title'=>!$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_information'=>!$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_address'=>true,'show_notes'=>true), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div id="litecheckout_final_section" class="litecheckout__group litecheckout__submit-order">
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/final_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_payment_step'=>true,'suffix'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0);?>

            </div>
        <!--litechekout_payments_form--></form>
    </div>
<!--litecheckout_form--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/checkout.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>
 
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/lite_checkout.js"),$_smarty_tpl);?>
 
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_selector.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_search.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['contact_info_section_position'] = new Smarty_variable($_smarty_tpl->tpl_vars['profile_field_sections']->value[smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")]["position"], null, 0);?>
<?php $_smarty_tpl->tpl_vars['shipping_section_position'] = new Smarty_variable($_smarty_tpl->tpl_vars['profile_field_sections']->value[smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")]["position"], null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_customer_fields_first'] = new Smarty_variable($_smarty_tpl->tpl_vars['contact_info_section_position']->value<$_smarty_tpl->tpl_vars['shipping_section_position']->value, null, 0);?>


<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?>
        <div id="litecheckout_login_block" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
            <div class="ty-login-popup">
                <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup",'id'=>"litecheckout_login_block_inner"), 0);?>

            </div>
        </div>
    <?php }?>
<?php }?>

<div class="litecheckout litecheckout__form" id="litecheckout_form">
    <h1 class="litecheckout__page-title"><?php echo $_smarty_tpl->__('checkout');?>
</h1>
    <div data-ca-lite-checkout-element="form">
        <form name="litechekout_payments_form"
              id="litechekout_payments_form"
              action="<?php echo htmlspecialchars(fn_url("checkout.place_order"), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              data-ca-lite-checkout-element="checkout-form"
              data-ca-lite-checkout-ready-for-checkout="false"
              class="litecheckout__group litecheckout__payment-methods"
        >

            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_title'=>$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_information'=>$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_address'=>false,'show_notes'=>false), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/shipping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_title'=>!$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_information'=>!$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_address'=>true,'show_notes'=>true), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div id="litecheckout_final_section" class="litecheckout__group litecheckout__submit-order">
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/final_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_payment_step'=>true,'suffix'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0);?>

            </div>
        <!--litechekout_payments_form--></form>
    </div>
<!--litecheckout_form--></div>
<?php }?><?php }} ?>
