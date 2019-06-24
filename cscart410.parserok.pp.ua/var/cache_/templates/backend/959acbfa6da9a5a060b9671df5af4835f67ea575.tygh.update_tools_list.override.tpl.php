<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 16:00:46
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/hooks/products/update_tools_list.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4688942465d04ebfedb5be6-22358022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '959acbfa6da9a5a060b9671df5af4835f67ea575' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/hooks/products/update_tools_list.override.tpl',
      1 => 1560353907,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4688942465d04ebfedb5be6-22358022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04ebfedbb7d4_91671681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04ebfedbb7d4_91671681')) {function content_5d04ebfedbb7d4_91671681($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']==smarty_modifier_enum("Addons\\VendorDebtPayout\\ProductTypes::DEBT_PAYOUT")) {?>
    <!-- empty -->
<?php }?>
<?php }} ?>
