<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 20:57:36
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/pickers/companies/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10991819195d053190a2cd97-41432037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de713e557d7dcf5c13480ff8e47936a020cef9e4' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/pickers/companies/js.tpl',
      1 => 1560353846,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10991819195d053190a2cd97-41432037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'multiple' => 0,
    'clone' => 0,
    'holder' => 0,
    'position_field' => 0,
    'input_name' => 0,
    'position' => 0,
    'hidden_field' => 0,
    'view_only' => 0,
    'company' => 0,
    'hide_delete_button' => 0,
    'hide_edit_button' => 0,
    'single_line' => 0,
    'first_item' => 0,
    'extra_class' => 0,
    'display_input_id' => 0,
    'extra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d053190a7cb66_59495632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d053190a7cb66_59495632')) {function content_5d053190a7cb66_59495632($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove','edit'));
?>
<?php if (intval($_smarty_tpl->tpl_vars['company_id']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['company'] = new Smarty_variable(fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['company'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['ldelim']->value)."company".((string)$_smarty_tpl->tpl_vars['rdelim']->value), null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?><td><input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-micro"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> /></td><?php }?>
        <td><?php if ($_smarty_tpl->tpl_vars['hidden_field']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> /><?php }
if (!$_smarty_tpl->tpl_vars['view_only']->value) {?><a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['view_only']->value) {?></a><?php }?></td>
        <td class="nowrap">
        <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value&&!$_smarty_tpl->tpl_vars['view_only']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['company_id']->value)."', 'm'); return false;"));?>
</li>
                <?php if (!$_smarty_tpl->tpl_vars['hide_edit_button']->value!="view") {?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)));?>
</li>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <div class="hidden-tools">
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            </div>
        <?php }?>
        </td>
    </tr>
<?php } else { ?>
    <<?php if ($_smarty_tpl->tpl_vars['single_line']->value) {?>span<?php } else { ?>p<?php }?> <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item no-margin<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['first_item']->value&&$_smarty_tpl->tpl_vars['single_line']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span><?php }?>
    <input class="input-text-medium cm-picker-value-description<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> size="10" name="company_name" readonly="readonly" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 />
    </<?php if ($_smarty_tpl->tpl_vars['single_line']->value) {?>span<?php } else { ?>p<?php }?>>
<?php }?><?php }} ?>
