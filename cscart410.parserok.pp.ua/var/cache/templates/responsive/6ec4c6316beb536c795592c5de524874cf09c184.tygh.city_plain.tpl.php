<?php /* Smarty version Smarty-3.1.21, created on 2019-06-18 13:24:37
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/views/checkout/components/shippings/city_plain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13394531065d08bbe5ec7f45-91478112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec4c6316beb536c795592c5de524874cf09c184' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/views/checkout/components/shippings/city_plain.tpl',
      1 => 1560354879,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13394531065d08bbe5ec7f45-91478112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_city' => 0,
    'city' => 0,
    'show_state' => 0,
    'state' => 0,
    'country' => 0,
    'states' => 0,
    'country_state' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d08bbe602d488_08275550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d08bbe602d488_08275550')) {function content_5d08bbe602d488_08275550($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('city','select_state','state','city','select_state','state'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['show_city']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <div class="litecheckout__field litecheckout__field--fill">
        <input type="text"
               data-ca-lite-checkout-field="user_data.s_city"
               id="litecheckout_city"
               data-ca-lite-checkout-element="city"
               data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
               placeholder=" "
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="litecheckout__input"
        />
        <label class="litecheckout__label cm-required" for="litecheckout_city"><?php echo $_smarty_tpl->__("city");?>
 </label>
    </div>
<?php }?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_city']->value)===null||$tmp==='' ? true : $tmp)||(($tmp = @$_smarty_tpl->tpl_vars['show_state']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_state']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <div class="litecheckout__field litecheckout__field--xsmall">
        <select data-ca-lite-checkout-field="user_data.s_state"
                class="cm-state cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
                data-ca-lite-checkout-element="state"
                data-ca-lite-checkout-is-state-code-container="true"
                data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
                id="litecheckout_state"
        >
            <option disabled><?php echo $_smarty_tpl->__("select_state");?>
</option>
            <?php  $_smarty_tpl->tpl_vars['country_state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country_state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country_state']->key => $_smarty_tpl->tpl_vars['country_state']->value) {
$_smarty_tpl->tpl_vars['country_state']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['country_state']->value['code']===$_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>

        <input type="text"
               data-ca-lite-checkout-field="user_data.s_state"
               id="litecheckout_state_d"
               data-ca-lite-checkout-element="state"
               data-ca-lite-checkout-is-state-code-container="false"
               data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
               placeholder=" "
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="cm-state cm-location-shipping litecheckout__input hidden"
               disabled
        />

        <label class="litecheckout__label cm-required" for="litecheckout_state"><?php echo $_smarty_tpl->__("state");?>
 </label>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/shippings/city_plain.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/shippings/city_plain.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ((($tmp = @$_smarty_tpl->tpl_vars['show_city']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <div class="litecheckout__field litecheckout__field--fill">
        <input type="text"
               data-ca-lite-checkout-field="user_data.s_city"
               id="litecheckout_city"
               data-ca-lite-checkout-element="city"
               data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
               placeholder=" "
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="litecheckout__input"
        />
        <label class="litecheckout__label cm-required" for="litecheckout_city"><?php echo $_smarty_tpl->__("city");?>
 </label>
    </div>
<?php }?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_city']->value)===null||$tmp==='' ? true : $tmp)||(($tmp = @$_smarty_tpl->tpl_vars['show_state']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_state']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <div class="litecheckout__field litecheckout__field--xsmall">
        <select data-ca-lite-checkout-field="user_data.s_state"
                class="cm-state cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
                data-ca-lite-checkout-element="state"
                data-ca-lite-checkout-is-state-code-container="true"
                data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
                id="litecheckout_state"
        >
            <option disabled><?php echo $_smarty_tpl->__("select_state");?>
</option>
            <?php  $_smarty_tpl->tpl_vars['country_state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country_state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country_state']->key => $_smarty_tpl->tpl_vars['country_state']->value) {
$_smarty_tpl->tpl_vars['country_state']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['country_state']->value['code']===$_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>

        <input type="text"
               data-ca-lite-checkout-field="user_data.s_state"
               id="litecheckout_state_d"
               data-ca-lite-checkout-element="state"
               data-ca-lite-checkout-is-state-code-container="false"
               data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
               placeholder=" "
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="cm-state cm-location-shipping litecheckout__input hidden"
               disabled
        />

        <label class="litecheckout__label cm-required" for="litecheckout_state"><?php echo $_smarty_tpl->__("state");?>
 </label>
    </div>
<?php }?>
<?php }?><?php }} ?>
