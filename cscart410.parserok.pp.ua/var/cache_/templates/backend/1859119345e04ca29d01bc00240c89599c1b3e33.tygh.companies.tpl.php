<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 20:46:13
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/companies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15609628715d028be58016c9-48764853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1859119345e04ca29d01bc00240c89599c1b3e33' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/companies.tpl',
      1 => 1560353874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15609628715d028be58016c9-48764853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'selected_companies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d028be5919fa8_02419192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d028be5919fa8_02419192')) {function content_5d028be5919fa8_02419192($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('all_companies'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[company_ids]" : $tmp), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_add_button'=>true,'multiple'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['selected_companies']->value,'view_mode'=>"list",'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'checkbox_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'no_item_text'=>$_smarty_tpl->__("all_companies")), 0);?>


<?php }} ?>
