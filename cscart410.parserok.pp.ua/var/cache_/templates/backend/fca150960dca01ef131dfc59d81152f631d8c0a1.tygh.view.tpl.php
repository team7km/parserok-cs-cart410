<?php /* Smarty version Smarty-3.1.21, created on 2019-06-12 18:55:58
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/settings_wizard/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11866099795d01208ee5e8d5-41664733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca150960dca01ef131dfc59d81152f631d8c0a1' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/settings_wizard/view.tpl',
      1 => 1560353855,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11866099795d01208ee5e8d5-41664733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return_url' => 0,
    'current_step' => 0,
    'step_data' => 0,
    'item' => 0,
    'wizard_addons' => 0,
    'addon' => 0,
    'images_dir' => 0,
    'ldelim' => 0,
    'popup_title' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d01208f044de5_36506428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d01208f044de5_36506428')) {function content_5d01208f044de5_36506428($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('install','settings_wizard_close_tooltip','close','finish','next_step','settings_wizard'));
?>
<?php if (!defined("AJAX_REQUEST")) {
$_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start();
}?>

<form name="settings_wizard_form" method="post" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax cm-ajax-force form-edit form-setting" data-ca-target-id="settings_wizard">
    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
">

    <div id="settings_wizard">
        <input type="hidden" name="current_step" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_step']->value, ENT_QUOTES, 'UTF-8');?>
">

        <div class="form-horizontal">
            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['step_data']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=="header") {?>
                    <h4><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['item']->value['text'],$_smarty_tpl->tpl_vars['item']->value['placeholders']);?>
</h4>
            
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="text") {?>
                    <p><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['item']->value['text'],$_smarty_tpl->tpl_vars['item']->value['placeholders']);?>
</p>
            
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="template") {?>
                    <p><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['item']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
            
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="setting") {?>
                    <p><?php echo $_smarty_tpl->getSubTemplate ("common/settings_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"setting-wide",'item'=>$_smarty_tpl->tpl_vars['item']->value['setting_data'],'html_id'=>"field_".((string)$_smarty_tpl->tpl_vars['item']->value['setting_data']['name']),'html_name'=>"settings[".((string)$_smarty_tpl->tpl_vars['item']->value['setting_data']['name'])."]"), 0);?>
</p>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="addon") {?>
                    <?php $_smarty_tpl->tpl_vars["addon"] = new Smarty_variable($_smarty_tpl->tpl_vars['wizard_addons']->value[$_smarty_tpl->tpl_vars['item']->value['addon_name']], null, 0);?>
                    <table class="table table-addons table-wizard">
                        <tr>
                            <td class="addon-icon">
                                <div class="bg-icon">
                                    <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_icon']) {?>
                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
/icon.png" width="38" height="38" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" >
                                    <?php }?>
                                </div>
                            </td>
                            <td width="95%">
                                <div class="object-group-link-wrap">
                                    <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
                                    <span class="row-status object-group-details"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </div>
                            </td>
                            <td width="5%">
                                <input type="hidden" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="N">
                                <label for="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                                    <input id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" checked="checked">
                                    <?php echo $_smarty_tpl->__("install");?>

                                </label>     
                            </td>
                        </tr>
                    </table>
                <?php }?>
            <?php } ?>
        </div>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
            <?php if (!$_smarty_tpl->tpl_vars['step_data']->value['next_step']) {?>
                Tygh.$('#settings_wizard_next_step').hide();
                Tygh.$('#settings_wizard_finish').addClass('btn-primary');
            <?php } else { ?>
                Tygh.$('#settings_wizard_next_step').show();
                Tygh.$('#settings_wizard_finish').removeClass('btn-primary');
            <?php }?>

            Tygh.$('#settings_wizard').appear(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
Tygh.$.ceDialog('get_last').ceDialog('change_title', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['popup_title']->value, ENT_QUOTES, 'UTF-8');?>
')<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
        <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!--settings_wizard--></div>

    <?php if (!defined("AJAX_REQUEST")) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php }?>

    <?php if (defined("AJAX_REQUEST")) {?>
        <div class="buttons-container">
        <a class="btn pull-left cm-dialog-closer cm-tooltip" title="<?php echo $_smarty_tpl->__("settings_wizard_close_tooltip");?>
"><?php echo $_smarty_tpl->__("close");?>
</a>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"settings_wizard_finish",'but_text'=>$_smarty_tpl->__("finish"),'but_name'=>"dispatch[settings_wizard.next_step.finish]",'but_role'=>"action",'but_meta'=>"cm-no-ajax cm-submit",'but_target_form'=>"settings_wizard_form"), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"settings_wizard_next_step",'but_text'=>$_smarty_tpl->__("next_step"),'but_name'=>"dispatch[settings_wizard.next_step]",'but_role'=>"submit-link",'but_target_form'=>"settings_wizard_form",'but_meta'=>"btn btn-primary"), 0);?>


    <?php if (defined("AJAX_REQUEST")) {?>
        </div>
    <?php }?>
    <?php if (!defined("AJAX_REQUEST")) {?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
</form>

<?php if (!defined("AJAX_REQUEST")) {?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("settings_wizard"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar_position'=>"left"), 0);?>

<?php }?><?php }} ?>
