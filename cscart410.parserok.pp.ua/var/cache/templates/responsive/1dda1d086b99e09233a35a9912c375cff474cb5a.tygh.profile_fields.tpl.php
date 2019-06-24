<?php /* Smarty version Smarty-3.1.21, created on 2019-06-18 13:24:39
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/views/checkout/components/profile_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:938056195d08bbe7211b22-94630269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dda1d086b99e09233a35a9912c375cff474cb5a' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/views/checkout/components/profile_fields.tpl',
      1 => 1560354879,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '938056195d08bbe7211b22-94630269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'section' => 0,
    'profile_fields' => 0,
    'exclude' => 0,
    'field' => 0,
    'include' => 0,
    'name_field_names' => 0,
    'field_id' => 0,
    'name_fields' => 0,
    'first_and_last_name_exists' => 0,
    'prefix' => 0,
    'name_field_id' => 0,
    'fullname_field' => 0,
    'user_data' => 0,
    'fields' => 0,
    'field_type_class_postfix' => 0,
    'label_meta' => 0,
    'fullname_field_value' => 0,
    'wrapper_class' => 0,
    'field_name' => 0,
    'field_name_helper' => 0,
    'field_value' => 0,
    'date_meta' => 0,
    'extra' => 0,
    'value' => 0,
    'name' => 0,
    'input_meta' => 0,
    'type' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d08bbe7514359_31948459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d08bbe7514359_31948459')) {function content_5d08bbe7514359_31948459($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_count')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_modifier_sort_by')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.sort_by.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('address_residential','address_commercial','address_residential','address_commercial'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]) {?>
    <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['name_fields'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['name_field_names'] = new Smarty_variable(array("firstname","lastname","s_firstname","s_lastname","b_firstname","b_lastname"), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['exclude']->value&&in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['exclude']->value)||$_smarty_tpl->tpl_vars['include']->value&&!in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['include']->value)) {?>
            <?php continue 1;?>
        <?php }?>

        <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['name_field_names']->value)) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('name_fields', null, 0);
$_smarty_tpl->tpl_vars['name_fields']->value[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;?>
        <?php } else { ?>
            <?php $_smarty_tpl->createLocalArrayVariable('fields', null, 0);
$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;?>
        <?php }?>
    <?php } ?>

    <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value==smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")) {?>
        <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable("s_", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['section']->value==smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS")) {?>
        <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable("b_", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['first_and_last_name_exists'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['name_fields']->value)==2, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['first_and_last_name_exists']->value) {?>
        <?php $_smarty_tpl->tpl_vars['fullname_field'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['name_fields']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['name_field_id'] = new Smarty_variable(key($_smarty_tpl->tpl_vars['name_fields']->value), null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value["field_name"] = ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname";?>
        <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value["description"] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname");?>
        <?php $_smarty_tpl->createLocalArrayVariable('fields', null, 0);
$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['name_field_id']->value] = $_smarty_tpl->tpl_vars['fullname_field']->value;?>
        <?php $_smarty_tpl->tpl_vars['fullname_field_value'] = new Smarty_variable(trim(((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."firstname"])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."lastname"])), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields']->value+$_smarty_tpl->tpl_vars['name_fields']->value, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable(smarty_modifier_sort_by($_smarty_tpl->tpl_vars['fields']->value,"#position"), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
        <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("text", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['input_meta'] = new Smarty_variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable('', null, 0);?>

        <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable("litecheckout__field--", null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("tel", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(" cm-mask-phone-label", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['input_meta'] = new Smarty_variable(" cm-mask-phone", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("text", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(" cm-email", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."checkbox", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."date", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::INPUT")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PASSWORD")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."password", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."selectbox", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."textarea", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio", null, 0);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['field_type_class_postfix']->value==="litecheckout__field--") {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."custom", null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['checkout_required']=="Y"||$_smarty_tpl->tpl_vars['field']->value['checkout_required']=="1") {?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['label_meta']->value)." cm-required", null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['is_default']==smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->tpl_vars['field_name'] = new Smarty_variable("user_data[".((string)$_smarty_tpl->tpl_vars['field']->value['field_name'])."]", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value[$_smarty_tpl->tpl_vars['field']->value['field_name']], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_name_helper'] = new Smarty_variable("user_data.".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['field_name'] = new Smarty_variable("user_data[fields][".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value["fields"][$_smarty_tpl->tpl_vars['field']->value['field_id']], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_name_helper'] = new Smarty_variable("user_data.fields.".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']), null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']==((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname") {?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['fullname_field_value']->value, null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['wrapper_class'], null, 0);?>
        <?php if (!$_smarty_tpl->tpl_vars['wrapper_class']->value) {?>
            <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("litecheckout__field--small", null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
                <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("litecheckout__field--full", null, 0);?>
            <?php }?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['field_id'] = new Smarty_variable("litecheckout_".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']), null, 0);?>
        
        <div class="litecheckout__field <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_type_class_postfix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
                <textarea class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                          id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                          autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                          placeholder=" "
                          data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                          data-ca-lite-checkout-auto-save="true"
                          aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                          title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                       id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       type="checkbox"
                       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                       value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-lite-checkout-auto-save="true"
                       autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                       aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['field_value']->value==smarty_modifier_enum("YesNo::YES")) {?>checked<?php }?>
                />
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
                <?php $_smarty_tpl->tpl_vars['extra'] = new Smarty_variable("data-ca-lite-checkout-field=".((string)$_smarty_tpl->tpl_vars['field_name_helper']->value)." data-ca-lite-checkout-auto-save=true data-ca-lite-checkout-auto-save-on-change=true", null, 0);?>
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['field']->value['class']) {?><?php echo " ";?><?php echo (string)$_smarty_tpl->tpl_vars['field']->value['class'];?><?php }
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['date_meta'] = new Smarty_variable("litecheckout__input".$_tmp1, null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['field_id']->value),'date_name'=>$_smarty_tpl->tpl_vars['field_name']->value,'date_val'=>$_smarty_tpl->tpl_vars['field_value']->value,'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value,'extra'=>$_smarty_tpl->tpl_vars['extra']->value), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->index++;
 $_smarty_tpl->tpl_vars['name']->first = $_smarty_tpl->tpl_vars['name']->index === 0;
?>
                    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                           type="radio"
                           id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                           name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-lite-checkout-auto-save-on-change="true"
                           <?php if ((!$_smarty_tpl->tpl_vars['field_value']->value&&$_smarty_tpl->tpl_vars['name']->first)||$_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['value']->value) {?>checked<?php }?>
                        />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>

                    </label>
                <?php } ?>
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
                <select class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                        autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-lite-checkout-auto-save-on-change="true"
                        aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                >
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['required']==smarty_modifier_enum("YesNo::NO")) {?>
                        <option value="">--</option>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->index++;
 $_smarty_tpl->tpl_vars['name']->first = $_smarty_tpl->tpl_vars['name']->index === 0;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
                <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential">
                    <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                       type="radio"
                       id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential"
                       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                       value="residential"
                       data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-lite-checkout-auto-save-on-change="true"
                       <?php if (!$_smarty_tpl->tpl_vars['field_value']->value||$_smarty_tpl->tpl_vars['field_value']->value=="residential") {?>checked<?php }?>
                    />
                    <?php echo $_smarty_tpl->__("address_residential");?>

                </label>
                <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial">
                    <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                        type="radio"
                        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial"
                        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                        value="commercial"
                        data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-lite-checkout-auto-save-on-change="true"
                        <?php if ($_smarty_tpl->tpl_vars['field_value']->value=="commercial") {?>checked<?php }?>
                    />
                    <?php echo $_smarty_tpl->__("address_commercial");?>

                </label>
            <?php } else { ?>
                <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                       placeholder=" "
                       id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"
                       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-lite-checkout-auto-save="true"
                       autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                       aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                />
            <?php }?>
            <label class="litecheckout__label <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');?>
" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
        </div>
    <?php } ?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]) {?>
    <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['name_fields'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['name_field_names'] = new Smarty_variable(array("firstname","lastname","s_firstname","s_lastname","b_firstname","b_lastname"), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['exclude']->value&&in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['exclude']->value)||$_smarty_tpl->tpl_vars['include']->value&&!in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['include']->value)) {?>
            <?php continue 1;?>
        <?php }?>

        <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['name_field_names']->value)) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('name_fields', null, 0);
$_smarty_tpl->tpl_vars['name_fields']->value[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;?>
        <?php } else { ?>
            <?php $_smarty_tpl->createLocalArrayVariable('fields', null, 0);
$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;?>
        <?php }?>
    <?php } ?>

    <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value==smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")) {?>
        <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable("s_", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['section']->value==smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS")) {?>
        <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable("b_", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['first_and_last_name_exists'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['name_fields']->value)==2, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['first_and_last_name_exists']->value) {?>
        <?php $_smarty_tpl->tpl_vars['fullname_field'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['name_fields']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['name_field_id'] = new Smarty_variable(key($_smarty_tpl->tpl_vars['name_fields']->value), null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value["field_name"] = ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname";?>
        <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value["description"] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname");?>
        <?php $_smarty_tpl->createLocalArrayVariable('fields', null, 0);
$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['name_field_id']->value] = $_smarty_tpl->tpl_vars['fullname_field']->value;?>
        <?php $_smarty_tpl->tpl_vars['fullname_field_value'] = new Smarty_variable(trim(((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."firstname"])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."lastname"])), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields']->value+$_smarty_tpl->tpl_vars['name_fields']->value, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable(smarty_modifier_sort_by($_smarty_tpl->tpl_vars['fields']->value,"#position"), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
        <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("text", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['input_meta'] = new Smarty_variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable('', null, 0);?>

        <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable("litecheckout__field--", null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("tel", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(" cm-mask-phone-label", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['input_meta'] = new Smarty_variable(" cm-mask-phone", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("text", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(" cm-email", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."checkbox", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."date", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::INPUT")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PASSWORD")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."password", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."selectbox", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."textarea", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio", null, 0);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['field_type_class_postfix']->value==="litecheckout__field--") {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."custom", null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['checkout_required']=="Y"||$_smarty_tpl->tpl_vars['field']->value['checkout_required']=="1") {?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['label_meta']->value)." cm-required", null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['is_default']==smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->tpl_vars['field_name'] = new Smarty_variable("user_data[".((string)$_smarty_tpl->tpl_vars['field']->value['field_name'])."]", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value[$_smarty_tpl->tpl_vars['field']->value['field_name']], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_name_helper'] = new Smarty_variable("user_data.".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['field_name'] = new Smarty_variable("user_data[fields][".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value["fields"][$_smarty_tpl->tpl_vars['field']->value['field_id']], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_name_helper'] = new Smarty_variable("user_data.fields.".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']), null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']==((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname") {?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['fullname_field_value']->value, null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['wrapper_class'], null, 0);?>
        <?php if (!$_smarty_tpl->tpl_vars['wrapper_class']->value) {?>
            <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("litecheckout__field--small", null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
                <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("litecheckout__field--full", null, 0);?>
            <?php }?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['field_id'] = new Smarty_variable("litecheckout_".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']), null, 0);?>
        
        <div class="litecheckout__field <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_type_class_postfix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
                <textarea class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                          id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                          autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                          placeholder=" "
                          data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                          data-ca-lite-checkout-auto-save="true"
                          aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                          title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                       id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       type="checkbox"
                       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                       value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-lite-checkout-auto-save="true"
                       autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                       aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['field_value']->value==smarty_modifier_enum("YesNo::YES")) {?>checked<?php }?>
                />
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
                <?php $_smarty_tpl->tpl_vars['extra'] = new Smarty_variable("data-ca-lite-checkout-field=".((string)$_smarty_tpl->tpl_vars['field_name_helper']->value)." data-ca-lite-checkout-auto-save=true data-ca-lite-checkout-auto-save-on-change=true", null, 0);?>
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['field']->value['class']) {?><?php echo " ";?><?php echo (string)$_smarty_tpl->tpl_vars['field']->value['class'];?><?php }
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['date_meta'] = new Smarty_variable("litecheckout__input".$_tmp2, null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['field_id']->value),'date_name'=>$_smarty_tpl->tpl_vars['field_name']->value,'date_val'=>$_smarty_tpl->tpl_vars['field_value']->value,'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value,'extra'=>$_smarty_tpl->tpl_vars['extra']->value), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->index++;
 $_smarty_tpl->tpl_vars['name']->first = $_smarty_tpl->tpl_vars['name']->index === 0;
?>
                    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                           type="radio"
                           id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                           name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-lite-checkout-auto-save-on-change="true"
                           <?php if ((!$_smarty_tpl->tpl_vars['field_value']->value&&$_smarty_tpl->tpl_vars['name']->first)||$_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['value']->value) {?>checked<?php }?>
                        />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>

                    </label>
                <?php } ?>
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
                <select class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                        autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-lite-checkout-auto-save-on-change="true"
                        aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                >
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['required']==smarty_modifier_enum("YesNo::NO")) {?>
                        <option value="">--</option>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->index++;
 $_smarty_tpl->tpl_vars['name']->first = $_smarty_tpl->tpl_vars['name']->index === 0;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
                <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential">
                    <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                       type="radio"
                       id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential"
                       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                       value="residential"
                       data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-lite-checkout-auto-save-on-change="true"
                       <?php if (!$_smarty_tpl->tpl_vars['field_value']->value||$_smarty_tpl->tpl_vars['field_value']->value=="residential") {?>checked<?php }?>
                    />
                    <?php echo $_smarty_tpl->__("address_residential");?>

                </label>
                <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial">
                    <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                        type="radio"
                        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial"
                        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                        value="commercial"
                        data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-lite-checkout-auto-save-on-change="true"
                        <?php if ($_smarty_tpl->tpl_vars['field_value']->value=="commercial") {?>checked<?php }?>
                    />
                    <?php echo $_smarty_tpl->__("address_commercial");?>

                </label>
            <?php } else { ?>
                <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                       placeholder=" "
                       id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"
                       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-lite-checkout-auto-save="true"
                       autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                       aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                />
            <?php }?>
            <label class="litecheckout__label <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');?>
" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
        </div>
    <?php } ?>
<?php }
}?><?php }} ?>
