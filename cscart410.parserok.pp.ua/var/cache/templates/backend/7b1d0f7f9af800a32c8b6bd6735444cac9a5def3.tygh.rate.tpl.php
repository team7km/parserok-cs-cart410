<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 20:58:34
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/discussion/views/discussion_manager/components/rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8881895185d0531ca46af78-61341953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b1d0f7f9af800a32c8b6bd6735444cac9a5def3' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/discussion/views/discussion_manager/components/rate.tpl',
      1 => 1560353917,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8881895185d0531ca46af78-61341953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rate_id' => 0,
    'val' => 0,
    'item_rate_id' => 0,
    'rate_name' => 0,
    'rate_value' => 0,
    'disabled' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0531ca480a82_13923235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0531ca480a82_13923235')) {function content_5d0531ca480a82_13923235($_smarty_tpl) {?><fieldset class="rating" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php  $_smarty_tpl->tpl_vars["title"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["title"]->_loop = false;
 $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable;
 $_from = fn_get_discussion_ratings(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["title"]->key => $_smarty_tpl->tpl_vars["title"]->value) {
$_smarty_tpl->tpl_vars["title"]->_loop = true;
 $_smarty_tpl->tpl_vars["val"]->value = $_smarty_tpl->tpl_vars["title"]->key;
?>
    <?php $_smarty_tpl->tpl_vars['item_rate_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate_id']->value)."_".((string)$_smarty_tpl->tpl_vars['val']->value), null, 0);?>
    <input type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['rate_value']->value==$_smarty_tpl->tpl_vars['val']->value) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?>/><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</label>
    <?php } ?>
</fieldset><?php }} ?>
