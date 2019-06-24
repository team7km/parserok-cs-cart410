<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 13:36:05
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/hooks/index/dashboard_new_products_link.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17637753525d061b959547f8-71197421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47daa5d14a6cf692cf015f2197e07bcdcebece49' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/hooks/index/dashboard_new_products_link.post.tpl',
      1 => 1560353906,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17637753525d061b959547f8-71197421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d061b959aba43_52806328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d061b959aba43_52806328')) {function content_5d061b959aba43_52806328($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['url']->value)."&approval_status=Y", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['url'] = clone $_smarty_tpl->tpl_vars['url'];?>
<?php }} ?>
