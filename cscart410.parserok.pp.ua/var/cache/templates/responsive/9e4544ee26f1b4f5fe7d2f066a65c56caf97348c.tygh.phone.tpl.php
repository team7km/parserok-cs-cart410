<?php /* Smarty version Smarty-3.1.21, created on 2019-06-22 16:30:48
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/views/orders/components/payments/phone.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8646661255d0e2d8829efa4-98632837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e4544ee26f1b4f5fe7d2f066a65c56caf97348c' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/views/orders/components/payments/phone.tpl',
      1 => 1560354879,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8646661255d0e2d8829efa4-98632837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'settings' => 0,
    'phone' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0e2d8833d9f5_01238733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0e2d8833d9f5_01238733')) {function content_5d0e2d8833d9f5_01238733($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('phone','phone'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="litecheckout__group">
    <div class="litecheckout__field">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']) {?>
            <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone'], null, 0);?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&!$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
                <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'], null, 0);?>
            <?php } elseif (!$_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
                <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone'], null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position']=="billing_first") {?>
                    <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone'], null, 0);?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable('', null, 0);?>
            <?php }?>
        <?php }?>
        <input id="customer_phone" size="35" type="tel" name="payment_info[customer_phone]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-autocomplete-off litecheckout__input cm-mask-phone" placeholder=" "/>
        <label for="customer_phone" class="ty-control-group__title litecheckout__label cm-mask-phone-label"><?php echo $_smarty_tpl->__("phone");?>
</label>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/phone.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/phone.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="litecheckout__group">
    <div class="litecheckout__field">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']) {?>
            <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone'], null, 0);?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&!$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
                <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'], null, 0);?>
            <?php } elseif (!$_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
                <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone'], null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position']=="billing_first") {?>
                    <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone'], null, 0);?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable('', null, 0);?>
            <?php }?>
        <?php }?>
        <input id="customer_phone" size="35" type="tel" name="payment_info[customer_phone]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-autocomplete-off litecheckout__input cm-mask-phone" placeholder=" "/>
        <label for="customer_phone" class="ty-control-group__title litecheckout__label cm-mask-phone-label"><?php echo $_smarty_tpl->__("phone");?>
</label>
    </div>
</div>
<?php }?><?php }} ?>
