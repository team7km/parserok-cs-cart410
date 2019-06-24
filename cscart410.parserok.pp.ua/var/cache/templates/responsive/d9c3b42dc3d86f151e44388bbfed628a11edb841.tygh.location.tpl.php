<?php /* Smarty version Smarty-3.1.21, created on 2019-06-18 13:24:37
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/views/checkout/components/customer/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21136337455d08bbe5c3a720-49145951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9c3b42dc3d86f151e44388bbfed628a11edb841' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/views/checkout/components/customer/location.tpl',
      1 => 1560354879,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21136337455d08bbe5c3a720-49145951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_profiles_on_checkout' => 0,
    'block_title' => 0,
    'city_autocomplete' => 0,
    'show_city' => 0,
    'show_state' => 0,
    'user_data' => 0,
    'states' => 0,
    'show_country' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d08bbe5d81165_66387820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d08bbe5d81165_66387820')) {function content_5d08bbe5d81165_66387820($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.deliver_to','select_country','country','lite_checkout.deliver_to','select_country','country'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <div class="litecheckout__container">
        <div class="litecheckout__group" id="litecheckout_step_location">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.deliver_to") : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
                </div>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:location_city")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:location_city"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['city_autocomplete']->value&&(($tmp = @$_smarty_tpl->tpl_vars['show_city']->value)===null||$tmp==='' ? true : $tmp)&&(($tmp = @$_smarty_tpl->tpl_vars['show_state']->value)===null||$tmp==='' ? true : $tmp)) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shippings/city_autocomplete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('city'=>$_smarty_tpl->tpl_vars['user_data']->value['s_city'],'state_descr'=>$_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'],'state'=>$_smarty_tpl->tpl_vars['user_data']->value['s_state'],'zipcode'=>$_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'],'country'=>$_smarty_tpl->tpl_vars['user_data']->value['s_country'],'states'=>$_smarty_tpl->tpl_vars['states']->value,'city_autocomplete'=>$_smarty_tpl->tpl_vars['city_autocomplete']->value), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shippings/city_plain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('city'=>$_smarty_tpl->tpl_vars['user_data']->value['s_city'],'state_descr'=>$_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'],'state'=>$_smarty_tpl->tpl_vars['user_data']->value['s_state'],'country'=>$_smarty_tpl->tpl_vars['user_data']->value['s_country'],'states'=>$_smarty_tpl->tpl_vars['states']->value), 0);?>

                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:location_city"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:location_country")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:location_country"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_country']->value)===null||$tmp==='' ? true : $tmp)) {?>
                    <div class="litecheckout__field litecheckout__field--auto">
                        <select data-ca-lite-checkout-field="user_data.s_country"
                                class="cm-country cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
                                data-ca-lite-checkout-element="country"
                                required
                                id="litecheckout_country"
                        >
                            <option disabled><?php echo $_smarty_tpl->__("select_country");?>
</option>
                            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country']==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>

                        <label class="litecheckout__label cm-required" for="litecheckout_country"><?php echo $_smarty_tpl->__("country");?>
: </label>
                    </div>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:location_country"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>

            <div id="litecheckout_autocomplete_dropdown" class="litecheckout__autocomplete-dropdown"></div>
        <!--litecheckout_step_location--></div>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/location.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/location.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <div class="litecheckout__container">
        <div class="litecheckout__group" id="litecheckout_step_location">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.deliver_to") : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
                </div>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:location_city")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:location_city"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['city_autocomplete']->value&&(($tmp = @$_smarty_tpl->tpl_vars['show_city']->value)===null||$tmp==='' ? true : $tmp)&&(($tmp = @$_smarty_tpl->tpl_vars['show_state']->value)===null||$tmp==='' ? true : $tmp)) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shippings/city_autocomplete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('city'=>$_smarty_tpl->tpl_vars['user_data']->value['s_city'],'state_descr'=>$_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'],'state'=>$_smarty_tpl->tpl_vars['user_data']->value['s_state'],'zipcode'=>$_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'],'country'=>$_smarty_tpl->tpl_vars['user_data']->value['s_country'],'states'=>$_smarty_tpl->tpl_vars['states']->value,'city_autocomplete'=>$_smarty_tpl->tpl_vars['city_autocomplete']->value), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shippings/city_plain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('city'=>$_smarty_tpl->tpl_vars['user_data']->value['s_city'],'state_descr'=>$_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'],'state'=>$_smarty_tpl->tpl_vars['user_data']->value['s_state'],'country'=>$_smarty_tpl->tpl_vars['user_data']->value['s_country'],'states'=>$_smarty_tpl->tpl_vars['states']->value), 0);?>

                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:location_city"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:location_country")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:location_country"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_country']->value)===null||$tmp==='' ? true : $tmp)) {?>
                    <div class="litecheckout__field litecheckout__field--auto">
                        <select data-ca-lite-checkout-field="user_data.s_country"
                                class="cm-country cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
                                data-ca-lite-checkout-element="country"
                                required
                                id="litecheckout_country"
                        >
                            <option disabled><?php echo $_smarty_tpl->__("select_country");?>
</option>
                            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country']==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>

                        <label class="litecheckout__label cm-required" for="litecheckout_country"><?php echo $_smarty_tpl->__("country");?>
: </label>
                    </div>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:location_country"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>

            <div id="litecheckout_autocomplete_dropdown" class="litecheckout__autocomplete-dropdown"></div>
        <!--litecheckout_step_location--></div>
    </div>
<?php }?>
<?php }?><?php }} ?>
