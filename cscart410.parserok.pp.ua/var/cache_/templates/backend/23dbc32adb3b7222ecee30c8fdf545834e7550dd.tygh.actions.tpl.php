<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 14:05:10
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/products/components/bulk_edit/actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15291720525d022de6411e38-32982574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23dbc32adb3b7222ecee30c8fdf545834e7550dd' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/products/components/bulk_edit/actions.tpl',
      1 => 1560353912,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15291720525d022de6411e38-32982574',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d022de6566cb8_29252432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d022de6566cb8_29252432')) {function content_5d022de6566cb8_29252432($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone_selected','export_selected'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[products.m_clone]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[products.export_range]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[products.m_delete]",'form'=>"manage_products_form"));?>

</li>
<?php }} ?>
