<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 14:13:27
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/pickers/storefronts/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9952348425d062457c9cd39-55897916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40374d5670773703800e4620532b54c18dd0dec4' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/pickers/storefronts/js.tpl',
      1 => 1560353847,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9952348425d062457c9cd39-55897916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'storefront_id' => 0,
    'storefront' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'multiple' => 0,
    'clone' => 0,
    'holder' => 0,
    'position_field' => 0,
    'input_name' => 0,
    'position' => 0,
    'storefront_name' => 0,
    'hide_delete_button' => 0,
    'view_only' => 0,
    'hide_input' => 0,
    'input_id' => 0,
    'first_item' => 0,
    'single_line' => 0,
    'extra_class' => 0,
    'display_input_id' => 0,
    'extra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d062457cebbf3_42948883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d062457cebbf3_42948883')) {function content_5d062457cebbf3_42948883($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove'));
?>
<?php $_smarty_tpl->tpl_vars['storefront'] = new Smarty_variable(fn_get_storefront($_smarty_tpl->tpl_vars['storefront_id']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['storefront_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['storefront']->value->url)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."storefront".((string)$_smarty_tpl->tpl_vars['rdelim']->value) : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        class="cm-js-item storefront <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>cm-clone hidden<?php }?>"
        data-ca-storefront-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-storefront-company-ids="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCompanyIds()), ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?>
            <td>
                <input type="text"
                       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value*10, ENT_QUOTES, 'UTF-8');?>
"
                       size="3"
                       class="input-micro" <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>disabled="disabled"<?php }?>
                />
            </td>
        <?php }?>

        <td>
            <a class="storefront__name"
               href="<?php echo htmlspecialchars(fn_url("storefronts.update?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_name']->value, ENT_QUOTES, 'UTF-8');?>

            </a>
        </td>

        <td>
            <div class="hidden-tools">
                <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value&&!$_smarty_tpl->tpl_vars['view_only']->value) {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <li>
                            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)."', 'a'); return false;"));?>

                        </li>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                <?php }?>
            </div>
        </td>
        <?php if (!$_smarty_tpl->tpl_vars['hide_input']->value) {?>
            <input <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                   type="hidden"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
        <?php }?>
    </tr>
<?php } else { ?>
    <span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          class="cm-js-item no-margin <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>cm-clone hidden<?php }?>"
    >
        <?php if (!$_smarty_tpl->tpl_vars['first_item']->value&&$_smarty_tpl->tpl_vars['single_line']->value) {?>
            <span class="cm-comma <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>hidden<?php }?>">,&nbsp;&nbsp;</span>
        <?php }?>
        <input class="cm-picker-value-description <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="text"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
               size="10"
               name="storefront_name"
               readonly="readonly"
               <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>

        >&nbsp;
    </span>
<?php }?>
<?php }} ?>
