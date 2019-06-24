<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 19:39:12
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/hooks/products/categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16629474165d051f306330a7-75940362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56f001555d56efe26fdbb0f08e7a8069f88eabcc' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/hooks/products/categories_section.override.tpl',
      1 => 1560353907,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16629474165d051f306330a7-75940362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d051f30637917_47885709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d051f30637917_47885709')) {function content_5d051f30637917_47885709($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']==smarty_modifier_enum("Addons\\VendorDebtPayout\\ProductTypes::DEBT_PAYOUT")) {?>
    <!-- empty -->
<?php }?>
<?php }} ?>
