<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 13:22:38
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/themes/responsive/templates/addons/replain/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4645216275d0f52ee1bbc49-36928627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2f74f22a0237357090c8ba9b05040978640de85' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/themes/responsive/templates/addons/replain/hooks/index/scripts.post.tpl',
      1 => 1561285343,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4645216275d0f52ee1bbc49-36928627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f52ee2185e3_62467494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f52ee2185e3_62467494')) {function content_5d0f52ee2185e3_62467494($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/alex.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['replain']['replain_script']) {?>
    <?php echo $_smarty_tpl->tpl_vars['addons']->value['replain']['replain_script'];?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/replain/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/replain/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['replain']['replain_script']) {?>
    <?php echo $_smarty_tpl->tpl_vars['addons']->value['replain']['replain_script'];?>

<?php }
}?><?php }} ?>
