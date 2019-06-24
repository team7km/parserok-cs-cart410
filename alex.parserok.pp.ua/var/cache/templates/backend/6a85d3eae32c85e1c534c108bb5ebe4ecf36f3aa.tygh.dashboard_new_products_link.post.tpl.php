<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 13:17:51
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/hooks/index/dashboard_new_products_link.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18826313395d0f51cf975172-52192488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a85d3eae32c85e1c534c108bb5ebe4ecf36f3aa' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/hooks/index/dashboard_new_products_link.post.tpl',
      1 => 1561284069,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18826313395d0f51cf975172-52192488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f51cf97a420_17732484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f51cf97a420_17732484')) {function content_5d0f51cf97a420_17732484($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['url']->value)."&approval_status=Y", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['url'] = clone $_smarty_tpl->tpl_vars['url'];?>
<?php }} ?>
