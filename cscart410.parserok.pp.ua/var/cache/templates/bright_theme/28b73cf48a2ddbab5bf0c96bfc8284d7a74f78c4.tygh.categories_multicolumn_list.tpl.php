<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 14:14:53
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/blocks/categories/categories_multicolumn_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21380004035d0624ad1dbfa8-76659176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28b73cf48a2ddbab5bf0c96bfc8284d7a74f78c4' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/blocks/categories/categories_multicolumn_list.tpl',
      1 => 1560354879,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21380004035d0624ad1dbfa8-76659176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0624ad24a708_04193031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0624ad24a708_04193031')) {function content_5d0624ad24a708_04193031($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_multicolumns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories'=>$_smarty_tpl->tpl_vars['items']->value,'columns'=>$_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns'],'block'=>$_smarty_tpl->tpl_vars['block']->value), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/categories/categories_multicolumn_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/categories/categories_multicolumn_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_multicolumns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories'=>$_smarty_tpl->tpl_vars['items']->value,'columns'=>$_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns'],'block'=>$_smarty_tpl->tpl_vars['block']->value), 0);
}?><?php }} ?>
