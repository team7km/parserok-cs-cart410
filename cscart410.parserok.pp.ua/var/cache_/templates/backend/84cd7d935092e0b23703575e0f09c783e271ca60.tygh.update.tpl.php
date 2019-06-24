<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 14:23:04
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/usergroups/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5660552945d04d51814c477-22323767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84cd7d935092e0b23703575e0f09c783e271ca60' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/usergroups/update.tpl',
      1 => 1560353858,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5660552945d04d51814c477-22323767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usergroup' => 0,
    'id' => 0,
    'usergroup_types' => 0,
    'type_code' => 0,
    'type_name' => 0,
    'show_privileges_tab' => 0,
    'grouped_privileges' => 0,
    'section_id' => 0,
    'section' => 0,
    'navigation' => 0,
    'navigatoin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04d5181a2ca0_24037977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04d5181a2ca0_24037977')) {function content_5d04d5181a2ca0_24037977($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_count')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','usergroup','type','privilege.apply_to_all'));
?>
<?php if ($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="update_usergroups_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit ">
<input type="hidden" name="usergroup_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("general"),'target'=>"#content_general_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>

<div id="content_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse in collapse-visible">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:general_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:general_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="control-group">
        <label class="control-label cm-required" for="elm_usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("usergroup");?>
</label>
        <div class="controls">
            <input type="text" id="elm_usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="usergroup_data[usergroup]" size="35" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_usergroup_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("type");?>
</label>
        <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <input type="hidden" name="usergroup_data[type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['type'], ENT_QUOTES, 'UTF-8');?>
"/>
                <div class="controls-text">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_types']->value[$_smarty_tpl->tpl_vars['usergroup']->value['type']], ENT_QUOTES, 'UTF-8');?>

                </div>
            <?php } else { ?>
                <select id="elm_usergroup_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="usergroup_data[type]">
                    <?php  $_smarty_tpl->tpl_vars['type_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_name']->_loop = false;
 $_smarty_tpl->tpl_vars['type_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['usergroup_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_name']->key => $_smarty_tpl->tpl_vars['type_name']->value) {
$_smarty_tpl->tpl_vars['type_name']->_loop = true;
 $_smarty_tpl->tpl_vars['type_code']->value = $_smarty_tpl->tpl_vars['type_name']->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            <?php }?>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"usergroup_data[status]",'id'=>"usergroup_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['usergroup']->value,'hidden'=>true), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['show_privileges_tab']->value) {?>
    <hr/>
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:general_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<?php if ($_smarty_tpl->tpl_vars['show_privileges_tab']->value) {?>
    <div class="control-group">
        <div class="control-label"><?php echo $_smarty_tpl->__("privilege.apply_to_all");?>
:</div>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("views/usergroups/components/privileges_access_level_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_id'=>'usergroup','group_id'=>'global','usergroup_id'=>$_smarty_tpl->tpl_vars['id']->value,'show_custom_access_level_control'=>false), 0);?>

        </div>
    </div>
    <hr/>
    <div id="content_privileges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="usergroup-privileges-list">
        <input type="hidden" name="usergroup_data[privileges]" value="" />
        <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['section_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['grouped_privileges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['section_id']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/usergroups/components/privileges_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('usergroup_id'=>$_smarty_tpl->tpl_vars['id']->value,'section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0);?>

        <?php } ?>
    </div>
    <?php echo smarty_function_script(array('src'=>"js/tygh/usergroup_privileges.js"),$_smarty_tpl);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['navigation']->value['tabs'])===0) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('navigation', null, 0);
$_smarty_tpl->tpl_vars['navigation']->value['tabs'] = array();?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'navigation'=>$_smarty_tpl->tpl_vars['navigatoin']->value), 0);?>


<div class="buttons-container">
<?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[usergroups.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>

</form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
