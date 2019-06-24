<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 21:23:30
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_types.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2909636615d0294a2bddeb8-07312534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cac5e9b9c617b6dd40d7493a3798ae694810304' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_types.post.tpl',
      1 => 1560353908,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2909636615d0294a2bddeb8-07312534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profile_type' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0294a2c08139_80256600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0294a2c08139_80256600')) {function content_5d0294a2c08139_80256600($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['profile_type']->value==smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>
    <option value="<?php echo htmlspecialchars(@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("vendor_plan");?>
</option>
<?php }?>
<?php }} ?>
