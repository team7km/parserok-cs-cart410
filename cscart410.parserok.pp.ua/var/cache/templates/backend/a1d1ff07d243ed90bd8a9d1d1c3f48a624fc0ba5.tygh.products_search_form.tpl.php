<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 14:08:10
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/products_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8406638895d06231adb9141-11537721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1d1ff07d243ed90bd8a9d1d1c3f48a624fc0ba5' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/products_search_form.tpl',
      1 => 1560353922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8406638895d06231adb9141-11537721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
    'extra' => 0,
    'search' => 0,
    's_cid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d06231ae053b0_69219685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d06231ae053b0_69219685')) {function content_5d06231ae053b0_69219685($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','find_results_with','search_in_category','all_categories','status','all','approved','pending','disapproved'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="pre_moderation_search_form" method="get" class="cm-disable-empty">

    <?php if ($_REQUEST['redirect_url']) {?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!='') {?>
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    
    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

        <div class="sidebar-field">
            <label><?php echo $_smarty_tpl->__("find_results_with");?>
:</label>
            <input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
">
        </div>

        <div class="sidebar-field">
            <label><?php echo $_smarty_tpl->__("search_in_category");?>
:</label>
            <?php if (fn_show_picker("categories",@constant('CATEGORY_SHOW_ALL'))) {?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['cid']) {?>
                    <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['cid'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable("0", null, 0);?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_category",'input_name'=>"cid",'item_ids'=>$_smarty_tpl->tpl_vars['s_cid']->value,'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("all_categories"),'extra'=>''), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"cid",'id'=>$_smarty_tpl->tpl_vars['search']->value['cid']), 0);?>

            <?php }?>
        </div>
    
        <div class="sidebar-field">
            <label><?php echo $_smarty_tpl->__("status");?>
:</label>
            <select name="approval_status">
                <option value="all" <?php if ($_smarty_tpl->tpl_vars['search']->value['approval_status']=="all") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['approval_status']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("approved");?>
</option>
                <option value="P" <?php if ($_smarty_tpl->tpl_vars['search']->value['approval_status']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("pending");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['search']->value['approval_status']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disapproved");?>
</option>
            </select>
        </div>
        
        <div class="sidebar-field">
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

        <div class="sidebar-field">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]"), 0);?>

        </div>
    
    </form>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_content'=>Smarty::$_smarty_vars['capture']['section']), 0);?>
<?php }} ?>
