<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 16:10:15
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/exim/components/export_csv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20364105d04ee37c31f66-13118908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e293305de2a074e4feaed275991c82522646e1' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/exim/components/export_csv.tpl',
      1 => 1560353868,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20364105d04ee37c31f66-13118908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'delimiter' => 0,
    'eol' => 0,
    'export_data' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04ee37c7ed92_41498178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04ee37c7ed92_41498178')) {function content_5d04ee37c7ed92_41498178($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['fields']->value) {
echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['fields']->value);
echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['data']->value);
echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');
} ?><?php }} ?>
