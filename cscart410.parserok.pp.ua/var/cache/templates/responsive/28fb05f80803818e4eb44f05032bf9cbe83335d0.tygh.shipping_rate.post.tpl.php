<?php /* Smarty version Smarty-3.1.21, created on 2019-06-18 13:24:38
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/store_locator/hooks/checkout/shipping_rate.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19992892625d08bbe685ef28-46269681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28fb05f80803818e4eb44f05032bf9cbe83335d0' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/store_locator/hooks/checkout/shipping_rate.post.tpl',
      1 => 1560684663,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19992892625d08bbe685ef28-46269681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'shipping' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d08bbe69b7782_38706559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d08bbe69b7782_38706559')) {function content_5d08bbe69b7782_38706559($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('store_locator.shipping_price_from','store_locator.shipping_price_from'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (isset($_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_from'])) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("formatted_min_rate", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_from'],'class'=>"ty-nowrap"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable($_smarty_tpl->__("store_locator.shipping_price_from",array('[price]'=>Smarty::$_smarty_vars['capture']['formatted_min_rate'])), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['rate'] = clone $_smarty_tpl->tpl_vars['rate'];?>
    <?php $_smarty_tpl->tpl_vars['delivery_time'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['delivery_time'] = clone $_smarty_tpl->tpl_vars['delivery_time'];?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/checkout/shipping_rate.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/hooks/checkout/shipping_rate.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (isset($_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_from'])) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("formatted_min_rate", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_from'],'class'=>"ty-nowrap"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable($_smarty_tpl->__("store_locator.shipping_price_from",array('[price]'=>Smarty::$_smarty_vars['capture']['formatted_min_rate'])), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['rate'] = clone $_smarty_tpl->tpl_vars['rate'];?>
    <?php $_smarty_tpl->tpl_vars['delivery_time'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['delivery_time'] = clone $_smarty_tpl->tpl_vars['delivery_time'];?>
<?php }?>
<?php }?><?php }} ?>
