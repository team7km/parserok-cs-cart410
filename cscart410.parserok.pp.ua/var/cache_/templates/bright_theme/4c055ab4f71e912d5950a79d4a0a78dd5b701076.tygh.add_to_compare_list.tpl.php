<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 16:47:12
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/buttons/add_to_compare_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12973154195d04f6e0176c92-95797300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c055ab4f71e912d5950a79d4a0a78dd5b701076' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/buttons/add_to_compare_list.tpl',
      1 => 1560354879,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12973154195d04f6e0176c92-95797300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'hide_compare_list_button' => 0,
    'redirect_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04f6e03003b0_51853145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04f6e03003b0_51853145')) {function content_5d04f6e03003b0_51853145($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_comparison_list','add_to_comparison_list'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax cm-ajax-full-render", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
    <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(rawurlencode((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp)), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_to_comparison_list"),'but_href'=>"product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value),'but_role'=>"text",'but_target_id'=>"comparison_list,account_info*",'but_meta'=>"ty-btn__text ty-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value),'but_rel'=>"nofollow"), 0);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/add_to_compare_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/add_to_compare_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax cm-ajax-full-render", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
    <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(rawurlencode((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp)), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_to_comparison_list"),'but_href'=>"product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value),'but_role'=>"text",'but_target_id'=>"comparison_list,account_info*",'but_meta'=>"ty-btn__text ty-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value),'but_rel'=>"nofollow"), 0);?>

<?php }?>
<?php }?><?php }} ?>
