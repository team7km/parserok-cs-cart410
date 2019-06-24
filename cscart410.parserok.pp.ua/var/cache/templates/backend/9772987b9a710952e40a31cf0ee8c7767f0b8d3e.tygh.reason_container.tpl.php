<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 14:08:10
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/reason_container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5729517995d06231aedcd89-81207258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9772987b9a710952e40a31cf0ee8c7767f0b8d3e' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/reason_container.tpl',
      1 => 1560353922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5729517995d06231aedcd89-81207258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d06231aeef5b6_46192789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d06231aeef5b6_46192789')) {function content_5d06231aeef5b6_46192789($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('reason','notify_vendors_by_email'));
?>
<div class="form-horizontal form-edit">
	<div class="control-group">
	    <label class="control-label" ><?php echo $_smarty_tpl->__("reason");?>
:</label>
	    <div class="controls">
	    	<textarea name="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" id="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4" class="input-text input-large"></textarea>
	    </div>
	</div>
	
	<div class="control-group cm-toggle-button">
	    <label class="control-label" for="action_notification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("notify_vendors_by_email");?>
</label>
	    <div class="controls">
	    	<input type="checkbox" name="action_notification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" id="action_notification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" checked="checked">
	    </div>
	</div>
</div><?php }} ?>
