<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 14:13:27
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/pickers/storefronts/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18884115825d062457bf66b5-42827980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '228af66b33286c8dfff92c84231383bcbd0a5cfa' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/pickers/storefronts/picker.tpl',
      1 => 1560353847,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18884115825d062457bf66b5-42827980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data_id' => 0,
    'rnd' => 0,
    'item_ids' => 0,
    'extra_var' => 0,
    'multiple' => 0,
    'no_container' => 0,
    'but_text' => 0,
    'but_icon' => 0,
    'display' => 0,
    'checkbox_name' => 0,
    '_but_text' => 0,
    '_but_role' => 0,
    '_but_icon' => 0,
    'prepend' => 0,
    'input_name' => 0,
    'p_id' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'no_item_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d062457c8fa92_59961175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d062457c8fa92_59961175')) {function content_5d062457c8fa92_59961175($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_storefronts','add_storefronts','url','no_items'));
?>
<?php $_smarty_tpl->tpl_vars['data_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['data_id']->value)===null||$tmp==='' ? "storefronts_list" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['rnd'] = new Smarty_variable(rand(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['data_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value&&!is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['item_ids']->value), null, 0);?>
<?php }?>

<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars['extra_var'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
        <div class="choose-input">
    <?php }?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("add_buttons", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value==true) {?>
            <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable("checkbox", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable("radio", null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
            <?php $_smarty_tpl->tpl_vars['extra_var'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
        <?php }?>

        <div class="pull-right">
            <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?>
                <div class="<?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>choose-icon input-append<?php } else { ?>buttons-container<?php }?>">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
                <?php $_smarty_tpl->tpl_vars['_but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_storefronts") : $tmp), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['_but_role'] = new Smarty_variable("add", null, 0);?>
                <?php $_smarty_tpl->tpl_vars['_but_icon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_icon']->value)===null||$tmp==='' ? "icon-plus" : $tmp), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['_but_text'] = new Smarty_variable("<i class='icon-plus'></i>", null, 0);?>
                <?php $_smarty_tpl->tpl_vars['_but_role'] = new Smarty_variable("icon", null, 0);?>
            <?php }?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['multiple']->value) {?><?php echo "multiple";?><?php } else { ?><?php echo "single";?><?php }
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("storefronts.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&select_mode=".$_tmp1."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_icon'=>$_smarty_tpl->tpl_vars['_but_icon']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener add-on btn"), 0);?>

            <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?>
                </div>
            <?php }?>
        </div>

        <div class="hidden"
             id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"
             title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_storefronts") : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        ></div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if (!$_smarty_tpl->tpl_vars['prepend']->value) {?>
        <?php echo Smarty::$_smarty_vars['capture']['add_buttons'];?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("add_buttons", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <div class="table-wrapper">
            <table width="100%" class="table table-middle">
            <thead>
            <tr>
                <th width="100%">
                    <?php echo $_smarty_tpl->__("url");?>

                </th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?>class="hidden"<?php }?>
            >
    <?php } else { ?>
        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"
             class="<?php if ($_smarty_tpl->tpl_vars['multiple']->value&&!$_smarty_tpl->tpl_vars['item_ids']->value) {?>hidden<?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {?>cm-display-radio pull-left<?php }?>"
        >
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <tr class="hidden">
            <td colspan="2">
    <?php }?>
    <input id="a<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids"
           type="hidden"
           class="cm-picker-value"
           name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
           value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>"
    />
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            </td>
        </tr>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['p_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_id']->key => $_smarty_tpl->tpl_vars['p_id']->value) {
$_smarty_tpl->tpl_vars['p_id']->_loop = true;
?>
            <div class="input-append">
                <div class="pull-left">
                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/storefronts/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('storefront_id'=>$_smarty_tpl->tpl_vars['p_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_input'=>true), 0);?>

                </div>
                <?php echo Smarty::$_smarty_vars['capture']['add_buttons'];?>

            </div>
        <?php } ?>
    <?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
        <div class="input-append">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/storefronts/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('storefront_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value), 0);?>

            </div>
            <?php echo Smarty::$_smarty_vars['capture']['add_buttons'];?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/storefronts/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('storefront_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."storefront_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_input'=>true,'clone'=>true), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            </tbody>
            <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"
                   <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>class="hidden"<?php }?>
            >
            <tr class="no-items">
                <td colspan="2">
                    <p>
                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp);?>

                    </p>
                </td>
            </tr>
            </tbody>
            </table>
        </div><!--/table-wrapper-->
    <?php } else { ?>
        </div>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
        </div><!--/choose-input-->
    <?php }?>
</div><!--/clearfix-->
<?php }} ?>
