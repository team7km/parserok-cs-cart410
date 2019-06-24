<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 14:15:54
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/products_approval.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2805928715d04d36a0a38b6-22299130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c886e4e9d52b249987032edf1a3db75951b4b08a' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/products_approval.tpl',
      1 => 1560353907,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2805928715d04d36a0a38b6-22299130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'config' => 0,
    'products' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04d36a1c0e17_61074659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04d36a1c0e17_61074659')) {function content_5d04d36a1c0e17_61074659($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','vendor','status','name','vendor','status','approved','pending','disapproved','tools','approve','disapprove','disapprove','approve','no_data','proceed','approve_selected','approve_selected','proceed','disapprove_selected','disapprove_selected','disapprove_selected','approve_selected','product_approval'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/views/premoderation/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"premoderation.products_approval"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_products_form">
<input type="hidden" name="category_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['cid'], ENT_QUOTES, 'UTF-8');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<div class="table-responsive-wrapper">
    <table class="table table-middle table-responsive">
    <thead>
        <tr>
            <th class="left mobile-hide" width="5%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
            <th width="50%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=product&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="product") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            <th width="30%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=company&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="company") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            <th width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=approval&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="approval") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            <th width="5%">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <tr>
        <td class="left mobile-hide">
            <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
            <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['status']=="N") {?>class="manage-root-item-disabled"<?php }?>><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
            <div class="product-list__labels">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="product-code">
                        <span class="product-code__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

        </td>
        <td data-th="<?php echo $_smarty_tpl->__("vendor");?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['company_name'], ENT_QUOTES, 'UTF-8');?>

        <td data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['approved']=="Y") {
echo $_smarty_tpl->__("approved");
} elseif ($_smarty_tpl->tpl_vars['product']->value['approved']=="P") {
echo $_smarty_tpl->__("pending");
} else {
echo $_smarty_tpl->__("disapproved");
}?>
        <td data-th="<?php echo $_smarty_tpl->__("tools");?>
">
            <?php $_smarty_tpl->_capture_stack[0][] = array("approve", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/views/premoderation/components/approval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"approval_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'status'=>"Y",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0);?>

                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("approve"),'but_name'=>"dispatch[premoderation.products_approval.approve.".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'cancel_action'=>"close"), 0);?>

                </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            
            <?php $_smarty_tpl->_capture_stack[0][] = array("disapprove", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/views/premoderation/components/approval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"approval_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'status'=>"N",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0);?>

                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("disapprove"),'but_name'=>"dispatch[premoderation.products_approval.disapprove.".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'cancel_action'=>"close"), 0);?>

                </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            
            <?php if ($_smarty_tpl->tpl_vars['product']->value['approved']=="Y"||$_smarty_tpl->tpl_vars['product']->value['approved']=="P") {?>
                <?php ob_start();
echo $_smarty_tpl->__("disapprove");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"disapprove_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'text'=>$_tmp1." \"".((string)$_smarty_tpl->tpl_vars['product']->value['product'])."\"",'content'=>Smarty::$_smarty_vars['capture']['disapprove'],'act'=>"notes",'icon'=>"icon-thumbs-down"), 0);?>

            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['product']->value['approved']=="P"||$_smarty_tpl->tpl_vars['product']->value['approved']=="N") {?>
                <?php ob_start();
echo $_smarty_tpl->__("approve");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"approve_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'text'=>$_tmp2." \"".((string)$_smarty_tpl->tpl_vars['product']->value['product'])."\"",'content'=>Smarty::$_smarty_vars['capture']['approve'],'act'=>"notes",'icon'=>"icon-thumbs-up"), 0);?>

            <?php }?>
            
        </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("approve_selected", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/views/premoderation/components/reason_container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"approved"), 0);?>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("proceed"),'but_name'=>"dispatch[premoderation.m_approve]",'cancel_action'=>"close",'but_meta'=>"cm-process-items"), 0);?>

        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"approve_selected",'text'=>$_smarty_tpl->__("approve_selected"),'content'=>Smarty::$_smarty_vars['capture']['approve_selected'],'link_text'=>$_smarty_tpl->__("approve_selected")), 0);?>
    

    <?php $_smarty_tpl->_capture_stack[0][] = array("disapprove_selected", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/views/premoderation/components/reason_container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"declined"), 0);?>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("proceed"),'but_name'=>"dispatch[premoderation.m_decline]",'cancel_action'=>"close",'but_meta'=>"cm-process-items"), 0);?>

        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"disapprove_selected",'text'=>$_smarty_tpl->__("disapprove_selected"),'content'=>Smarty::$_smarty_vars['capture']['disapprove_selected'],'link_text'=>$_smarty_tpl->__("disapprove_selected")), 0);?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("disapprove_selected"),'form'=>"manage_products_form",'class'=>"cm-process-items cm-dialog-opener cm-dialog-auto-size",'data'=>array("data-ca-target-id"=>"content_disapprove_selected")));?>
</li>                    
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>


        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_id'=>"content_approve_selected",'but_text'=>$_smarty_tpl->__("approve_selected"),'but_meta'=>"cm-process-items cm-dialog-opener cm-dialog-auto-size",'but_target_form'=>"manage_products_form"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("product_approval"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
