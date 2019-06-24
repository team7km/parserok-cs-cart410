<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 15:12:42
         compiled from "/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/hooks/index/dashboard_new_products_link.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18114094915d0f6cbacab9d7-04350115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82791f4e12fc3dfd8d16c3f6ec72833acc844d99' => 
    array (
      0 => '/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/hooks/index/dashboard_new_products_link.post.tpl',
      1 => 1561288273,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18114094915d0f6cbacab9d7-04350115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f6cbacb3964_02846619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f6cbacb3964_02846619')) {function content_5d0f6cbacb3964_02846619($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['url']->value)."&approval_status=Y", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['url'] = clone $_smarty_tpl->tpl_vars['url'];?>
<?php }} ?>
