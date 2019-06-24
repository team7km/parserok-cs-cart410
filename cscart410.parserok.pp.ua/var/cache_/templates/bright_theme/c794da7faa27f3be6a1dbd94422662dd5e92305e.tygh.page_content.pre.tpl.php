<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 15:06:35
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/blog/hooks/pages/page_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3994635885d04df4bd04ca5-97231655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c794da7faa27f3be6a1dbd94422662dd5e92305e' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/blog/hooks/pages/page_content.pre.tpl',
      1 => 1560354895,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3994635885d04df4bd04ca5-97231655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04df4be29104_79878179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04df4be29104_79878179')) {function content_5d04df4be29104_79878179($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('by','by'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['page']->value['description']&&$_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_BLOG')) {?>
    <div class="ty-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
    <div class="ty-blog__author"><?php echo $_smarty_tpl->__("by");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['author'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>
        <div class="ty-blog__img-block">
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'images'=>$_smarty_tpl->tpl_vars['page']->value['main_pair']), 0);?>

        </div>
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/hooks/pages/page_content.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/hooks/pages/page_content.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['page']->value['description']&&$_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_BLOG')) {?>
    <div class="ty-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
    <div class="ty-blog__author"><?php echo $_smarty_tpl->__("by");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['author'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>
        <div class="ty-blog__img-block">
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'images'=>$_smarty_tpl->tpl_vars['page']->value['main_pair']), 0);?>

        </div>
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
