<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 19:18:16
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/block_manager/update_container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12484997965d051a48bf1706-72490830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63fc4a2f6dca34e4b174ec7e2aae9372ace69eb5' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/block_manager/update_container.tpl',
      1 => 1560353848,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12484997965d051a48bf1706-72490830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container' => 0,
    'id' => 0,
    'location' => 0,
    'device' => 0,
    'is_available' => 0,
    'container_availability_instance' => 0,
    'devices_icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d051a48c7edc2_13782482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d051a48c7edc2_13782482')) {function content_5d051a48c7edc2_13782482($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','user_class','block_manager.availability.show_on','block_manager.availability.'));
?>

<?php if ($_smarty_tpl->tpl_vars['container']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['container']->value['container_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div id="container_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal form-edit " name="container_update_form">
<input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="container_data[container_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
<fieldset>
    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_container_user_class_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("user_class");?>
</label>
        <div class="controls">
        <input class="input-text" type="text" id="elm_container_user_class_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="container_data[user_class]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label cm-required cm-multiple-checkboxes"
               for="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_availability"
        ><?php echo $_smarty_tpl->__("block_manager.availability.show_on");?>
</label>
        <div class="controls" id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_availability">
            <div class="btn-group btn-group-checkbox">
                <?php  $_smarty_tpl->tpl_vars['is_available'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_available']->_loop = false;
 $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['container']->value['availability']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_available']->key => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->_loop = true;
 $_smarty_tpl->tpl_vars['device']->value = $_smarty_tpl->tpl_vars['is_available']->key;
?>
                
                    <?php if ($_smarty_tpl->tpl_vars['device']->value=="phone") {?>
                        <?php $_smarty_tpl->tpl_vars['devices_icon'] = new Smarty_variable("icon-mobile-phone", null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['device']->value=="tablet") {?>
                        <?php $_smarty_tpl->tpl_vars['devices_icon'] = new Smarty_variable("icon-tablet", null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['device']->value=="desktop") {?>
                        <?php $_smarty_tpl->tpl_vars['devices_icon'] = new Smarty_variable("icon-desktop", null, 0);?>
                    <?php }?>

                    <input type="checkbox"
                        id="elm_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_show_on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
"
                        class="cm-text-toggle btn-group-checkbox__checkbox"
                        <?php if ($_smarty_tpl->tpl_vars['is_available']->value) {?>checked="checked"<?php }?>
                        data-ca-toggle-text="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container_availability_instance']->value->getHiddenClass($_smarty_tpl->tpl_vars['device']->value), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-toggle-text-mode="onDisable"
                        data-ca-toggle-text-target-elem-id="elm_container_user_class_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <label class="btn btn-group-checkbox__label" for="elm_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_show_on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['devices_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
                        <?php echo $_smarty_tpl->__("block_manager.availability.".((string)$_smarty_tpl->tpl_vars['device']->value));?>

                    </label>
                <?php } ?>
            </div>
        </div>
    </div>

</fieldset>
</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[block_manager.update_location]",'cancel_action'=>"close",'but_meta'=>"cm-dialog-closer",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>
</form>
<!--container_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
