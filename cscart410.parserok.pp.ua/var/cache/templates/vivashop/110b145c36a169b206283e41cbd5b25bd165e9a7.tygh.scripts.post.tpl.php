<?php /* Smarty version Smarty-3.1.21, created on 2019-06-22 18:29:52
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/vivashop/templates/addons/hidpi/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5911653595d0e4970a8aad8-41993689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110b145c36a169b206283e41cbd5b25bd165e9a7' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/vivashop/templates/addons/hidpi/hooks/index/scripts.post.tpl',
      1 => 1561217367,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5911653595d0e4970a8aad8-41993689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'hidpi_image_host' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0e4970aaa709_47958037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0e4970aaa709_47958037')) {function content_5d0e4970aaa709_47958037($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/hidpi/retina.js"),$_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">
    Retina.configure({
        image_host: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['hidpi_image_host']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
        check_mime_type: true,
	 	retinaImgTagSelector: 'img',
		retinaImgFilterFunc: undefined
    });
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/hidpi/func.js"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hidpi/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hidpi/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/hidpi/retina.js"),$_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">
    Retina.configure({
        image_host: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['hidpi_image_host']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
        check_mime_type: true,
	 	retinaImgTagSelector: 'img',
		retinaImgFilterFunc: undefined
    });
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/hidpi/func.js"),$_smarty_tpl);
}?><?php }} ?>
