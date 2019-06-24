<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 15:59:59
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/store_locator/views/store_locator/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21293890055d0248cf0b9e14-10085415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6861922431984239ef6b78d67e60ace4a143e560' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/store_locator/views/store_locator/manage.tpl',
      1 => 1560353902,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21293890055d0248cf0b9e14-10085415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locations' => 0,
    'loc' => 0,
    'allow_save' => 0,
    'no_hide_input' => 0,
    'destinations' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0248cf181d37_20753436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0248cf181d37_20753436')) {function content_5d0248cf181d37_20753436($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('store_locator','city','rate_area','status','store_locator','city','rate_area','store_locator.no_rate_area','tools','edit','delete','status','no_data','add_store_location','store_locator'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="store_locator_form" class="cm-hide-inputs">
<input type="hidden" name="fake" value="1" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true), 0);?>


<div class="items-container" id="store_locations">
    <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table-responsive">

        <thead>
        <tr>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:stores_list_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:stores_list_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <th width="1%" class="mobile-hide">
                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"cm-no-hide-input"), 0);?>

            </th>
            <th width="20%" class="shift-left"><?php echo $_smarty_tpl->__("store_locator");?>
</th>
            <th width="20%" class="shift-left"><?php echo $_smarty_tpl->__("city");?>
</th>
            <th width="20%" class="shift-left"><?php echo $_smarty_tpl->__("rate_area");?>
</th>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:stores_list_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <th width="5%">&nbsp;</th>
            <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
        </tr>
        </thead>

            <?php  $_smarty_tpl->tpl_vars['loc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loc']->key => $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->_loop = true;
?>
            <tbody>
            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['loc']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" valign="top" >

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:stores_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:stores_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['loc']->value,"store_locations"), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable('', null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable('', null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("text", null, 0);?>
                <?php }?>

                <td class="left <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide">
                    <input type="checkbox" name="store_locator_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>

                <td data-th="<?php echo $_smarty_tpl->__("store_locator");?>
">
                    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['loc']->value), 0);?>

                </td>

                <td data-th="<?php echo $_smarty_tpl->__("city");?>
">
                    <a class="row-status" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['city'], ENT_QUOTES, 'UTF-8');?>
</a>
                </td>

                <td data-th="<?php echo $_smarty_tpl->__("rate_area");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['loc']->value['main_destination_id']) {?>
                        <a href="<?php echo htmlspecialchars(fn_url("destinations.update&destination_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['main_destination_id'])), ENT_QUOTES, 'UTF-8');?>
" class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destinations']->value[$_smarty_tpl->tpl_vars['loc']->value['main_destination_id']]["destination"], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("store_locator.no_rate_area");?>

                    <?php }?>
                </td>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:stores_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <td class="center nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id'])));?>
</li>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"store_locator.delete?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id']),'method'=>"POST"));?>
</li>
                        <?php }?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <div class="hidden-tools right">
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                    </div>
                </td>
                <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['loc']->value['store_location_id'],'status'=>$_smarty_tpl->tpl_vars['loc']->value['status'],'hidden'=>'','object_id_name'=>"store_location_id",'table'=>"store_locations",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value),'display'=>$_smarty_tpl->tpl_vars['display']->value), 0);?>

                </td>

            </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--store_locations--></div>


    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true), 0);?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"store_locator.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_store_location"),'hide_tools'=>true), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("store_locator"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
