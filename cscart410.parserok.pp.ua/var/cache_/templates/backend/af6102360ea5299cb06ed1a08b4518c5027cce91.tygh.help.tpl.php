<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 16:07:26
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16217108005d04ed8e794838-81445355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af6102360ea5299cb06ed1a08b4518c5027cce91' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/help.tpl',
      1 => 1560353830,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16217108005d04ed8e794838-81445355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04ed8e7a3e61_79292543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04ed8e7a3e61_79292543')) {function content_5d04ed8e7a3e61_79292543($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('note'));
?>
<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
<div class="pull-right note-subheader">
    <?php $_smarty_tpl->_capture_stack[0][] = array("notes_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('act'=>"notes",'id'=>"content_".((string)$_smarty_tpl->tpl_vars['id']->value)."_notes",'text'=>$_smarty_tpl->__("note"),'content'=>Smarty::$_smarty_vars['capture']['notes_picker']), 0);?>

</div>
<?php }?><?php }} ?>
