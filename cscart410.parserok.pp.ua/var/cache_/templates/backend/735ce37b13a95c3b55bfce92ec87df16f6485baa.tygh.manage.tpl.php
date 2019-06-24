<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 16:34:00
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/seo/views/seo_redirects/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6881623655d0250c85ae3e1-91487424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '735ce37b13a95c3b55bfce92ec87df16f6485baa' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/seo/views/seo_redirects/manage.tpl',
      1 => 1560353902,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6881623655d0250c85ae3e1-91487424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_vars' => 0,
    'seo_var' => 0,
    'var_type' => 0,
    'id' => 0,
    'addons' => 0,
    'languages' => 0,
    'lng' => 0,
    'seo_redirects' => 0,
    'redirect' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0250c8728fa7_10412418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0250c8728fa7_10412418')) {function content_5d0250c8728fa7_10412418($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_modifier_sizeof')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.sizeof.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('seo.old_url','tt_addons_seo_views_seo_redirects_manage_seo.old_url','seo.new_url','language','seo.old_url','seo.new_url','type','language','seo.old_url','seo.new_url','type','language','tools','delete','no_data','seo.new_redirect','add_new','seo.redirects_manager'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("add_seo_redirect", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="rule_add_var" class="form-horizontal form-edit">
<input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />

<div class="control-group">
    <label class="control-label cm-required" for="elm_old_url"><?php echo $_smarty_tpl->__("seo.old_url");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_seo_views_seo_redirects_manage_seo.old_url")), 0);?>
:</label>
    <div class="controls">
        <input type="text" name="redirect_data[src]" id="elm_old_url" value="" class="span9" />
    </div>
</div>

<div class="control-group">
    <label class="control-label cm-required"><?php echo $_smarty_tpl->__("seo.new_url");?>
</label>
    <div class="controls mixed-controls cm-bs-group">

        <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable("s_new_redirect", null, 0);?>
        <div class="form-inline clearfix cm-bs-container">
            <label class="radio pull-left">
                <input type="radio" class="cm-bs-trigger" checked="checked" name="redirect_data[type]" value="s" />
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['seo_vars']->value['s']['name']);?>
:
            </label>
            <div class="cm-bs-block pull-left disable-overlay-wrap">
                <input type="text" name="redirect_data[dest]" id="s_new_redirect" value="" />
                <div class="disable-overlay cm-bs-off hidden"></div>
            </div>
        </div>

    <?php  $_smarty_tpl->tpl_vars["seo_var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["seo_var"]->_loop = false;
 $_smarty_tpl->tpl_vars["var_type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["seo_var"]->key => $_smarty_tpl->tpl_vars["seo_var"]->value) {
$_smarty_tpl->tpl_vars["seo_var"]->_loop = true;
 $_smarty_tpl->tpl_vars["var_type"]->value = $_smarty_tpl->tpl_vars["seo_var"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['seo_var']->value['picker']) {?>
        <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['var_type']->value)."_new_redirect", null, 0);?>

        <div class="form-inline clearfix cm-bs-container">
            <label class="radio pull-left">
                <input type="radio" class="cm-bs-trigger" name="redirect_data[type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['seo_var']->value['name']);?>
:
            </label>
            <div class="cm-bs-block pull-left disable-overlay-wrap">
                <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['seo_var']->value['picker'],'data_id'=>$_smarty_tpl->tpl_vars['id']->value,'input_name'=>"redirect_data[object_id]",'view_mode'=>"links",'params_array'=>$_smarty_tpl->tpl_vars['seo_var']->value['picker_params']),$_smarty_tpl);?>

                <div class="disable-overlay cm-bs-off"></div>
            </div>
        </div>
        <?php }?>
    <?php } ?>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['seo']['single_url']!="Y"&&smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
<div class="control-group">
    <label class="control-label cm-required" for="elm_lang_code"><?php echo $_smarty_tpl->__("language");?>
:</label>
    <div class="controls">
        <select class="span2" name="redirect_data[lang_code]">
        <?php  $_smarty_tpl->tpl_vars['lng'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lng']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lng']->key => $_smarty_tpl->tpl_vars['lng']->value) {
$_smarty_tpl->tpl_vars['lng']->_loop = true;
?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lng']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['lng']->value['lang_code']==@constant('CART_LANGUAGE')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lng']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
        </select>
    </div>
</div>
<?php } else { ?>
<input type="hidden" name="redirect_data[lang_code]" value="<?php echo htmlspecialchars(@constant('CART_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[seo_redirects.update]",'cancel_action'=>"close"), 0);?>

</div>
</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="seo_redirects_form" class="form-horizontal form-edit">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php if ($_smarty_tpl->tpl_vars['seo_redirects']->value) {?>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table-responsive">
    <thead>
    <tr>
        <th width="1%" class="mobile-hide">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="35%"><?php echo $_smarty_tpl->__("seo.old_url");?>
</th>
        <th width="35%"><?php echo $_smarty_tpl->__("seo.new_url");?>
</th>
        <th width="30%"><?php echo $_smarty_tpl->__("type");?>
</th>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['seo']['single_url']!="Y"&&smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
        <th><?php echo $_smarty_tpl->__("language");?>
</th>
        <?php }?>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars["redirect"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["redirect"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_redirects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["redirect"]->key => $_smarty_tpl->tpl_vars["redirect"]->value) {
$_smarty_tpl->tpl_vars["redirect"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["redirect"]->key;
?>
    <tr>
        <td class="mobile-hide">
            <input type="checkbox" name="redirect_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect']->value['redirect_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("seo.old_url");?>
">
            <input type="text" class="input-hidden" name="seo_redirects[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][src]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect']->value['src'], ENT_QUOTES, 'UTF-8');?>
" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("seo.new_url");?>
">
            <?php if ($_smarty_tpl->tpl_vars['redirect']->value['type']=="s") {?>
            <input type="text" class="input-hidden" name="seo_redirects[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][dest]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect']->value['dest'], ENT_QUOTES, 'UTF-8');?>
" /></td>
            <?php } else { ?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect']->value['parsed_url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect']->value['parsed_url'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php }?>
        <td data-th="<?php echo $_smarty_tpl->__("type");?>
">
            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['seo_vars']->value[$_smarty_tpl->tpl_vars['redirect']->value['type']]['name']);?>

        </td>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['seo']['single_url']!="Y"&&smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
        <td data-th="<?php echo $_smarty_tpl->__("language");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['redirect']->value['lang_code']]['name'], ENT_QUOTES, 'UTF-8');?>
</td>
        <?php }?>    
        <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">

            <div class="hidden-tools">
                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"seo_redirects.delete?redirect_id=".((string)$_smarty_tpl->tpl_vars['redirect']->value['redirect_id']),'method'=>"POST"));?>
</li>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            </div>
        </td>
    </tr>
    <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <span class="mobile-hide shift-right">
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['seo_redirects']->value) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[seo_redirects.m_delete]",'form'=>"seo_redirects_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    </span>

    <?php if ($_smarty_tpl->tpl_vars['seo_redirects']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[seo_redirects.m_update]",'but_role'=>"action",'but_target_form'=>"seo_redirects_form",'but_meta'=>"cm-submit"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_seo_redirect",'text'=>$_smarty_tpl->__("seo.new_redirect"),'title'=>$_smarty_tpl->__("add_new"),'content'=>Smarty::$_smarty_vars['capture']['add_seo_redirect'],'act'=>"general",'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"seo_redirects.manage",'view_type'=>"seo_redirects"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/seo/views/seo_redirects/components/search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"seo_redirects.manage"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("seo.redirects_manager"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>
<?php }} ?>
