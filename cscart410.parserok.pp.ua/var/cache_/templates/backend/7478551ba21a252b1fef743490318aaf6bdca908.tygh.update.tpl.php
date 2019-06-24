<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 20:46:13
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1230891595d028be5154a65-27395005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7478551ba21a252b1fef743490318aaf6bdca908' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/update.tpl',
      1 => 1560353856,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1230891595d028be5154a65-27395005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'storefront' => 0,
    'id' => 0,
    'is_form_readonly' => 0,
    'url' => 0,
    'is_default' => 0,
    'status' => 0,
    'access_key' => 0,
    'selected_currencies' => 0,
    'all_currencies' => 0,
    'selected_languages' => 0,
    'all_languages' => 0,
    'redirect_customer' => 0,
    'selected_countries' => 0,
    'all_countries' => 0,
    'selected_companies' => 0,
    'runtime' => 0,
    'is_storefronts_limit_reached' => 0,
    'title_start' => 0,
    'title_end' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d028be5319a23_61170575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d028be5319a23_61170575')) {function content_5d028be5319a23_61170575($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mve_ultimate_license_required','add_storefront','create','editing_storefront','creating_storefront'));
?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['storefront']->value->storefront_id)===null||$tmp==='' ? 0 : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
        <form id="update_storefront_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
              action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              name="storefront_update_form"
              class="form-horizontal form-edit cm-disable-empty-files <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>cm-hide-inputs<?php }?>"
        >
            <input type="hidden"
                   name="storefront_data[storefront_id]"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            />

            <div id="content_general">
                <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable('', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable(smarty_modifier_enum("StorefrontStatuses::OPEN"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['access_key'] = new Smarty_variable('', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['is_default'] = new Smarty_variable(false, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['selected_currencies'] = new Smarty_variable(array(), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['selected_languages'] = new Smarty_variable(array(), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['storefront']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->url, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->status, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['access_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->access_key, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['is_default'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->is_default, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['selected_currencies'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->getCurrencyIds(), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['selected_languages'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->getLanguageIds(), null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/url.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'url'=>$_smarty_tpl->tpl_vars['url']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/is_default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'is_default'=>$_smarty_tpl->tpl_vars['is_default']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/access_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'access_key'=>$_smarty_tpl->tpl_vars['access_key']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/currencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'selected_currencies'=>$_smarty_tpl->tpl_vars['selected_currencies']->value,'all_currencies'=>$_smarty_tpl->tpl_vars['all_currencies']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'selected_languages'=>$_smarty_tpl->tpl_vars['selected_languages']->value,'all_languages'=>$_smarty_tpl->tpl_vars['all_languages']->value), 0);?>

            </div>

            <div id="content_regions">
                <?php $_smarty_tpl->tpl_vars['selected_countries'] = new Smarty_variable(array(), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['redirect_customer'] = new Smarty_variable(false, null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['storefront']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['selected_countries'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->getCountriesList(), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['redirect_customer'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->redirect_customer, null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/redirect_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'redirect_customer'=>$_smarty_tpl->tpl_vars['redirect_customer']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/regions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'selected_countries'=>$_smarty_tpl->tpl_vars['selected_countries']->value,'all_countries'=>$_smarty_tpl->tpl_vars['all_countries']->value), 0);?>

            </div>

            <div id="content_companies">
                <?php $_smarty_tpl->tpl_vars['selected_companies'] = new Smarty_variable(array(), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['storefront']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['selected_companies'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->getCompanyIds(), null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/companies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'selected_companies'=>$_smarty_tpl->tpl_vars['selected_companies']->value), 0);?>

            </div>
        </form>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if (($_smarty_tpl->tpl_vars['runtime']->value['mode']==="add"&&$_smarty_tpl->tpl_vars['is_storefronts_limit_reached']->value)) {?>
        <?php $_smarty_tpl->tpl_vars['promo_popup_title'] = new Smarty_variable($_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>@constant('PRODUCT_NAME'))), null, 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_override_meta'=>"btn btn-primary cm-dialog-opener cm-dialog-auto-size",'tool_href'=>"functionality_restrictions.mve_ultimate_license_required",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->__("add_storefront"),'link_text'=>$_smarty_tpl->__("create"),'icon'=>" ",'meta_data'=>"data-ca-dialog-title='".((string)$_smarty_tpl->tpl_vars['promo_popup_title']->value)."'"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[storefronts.update]",'but_target_form'=>"update_storefront_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['title_start'] = new Smarty_variable($_smarty_tpl->__("editing_storefront"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title_end'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->url, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("creating_storefront"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->tpl_vars['title_start']->value,'title_end'=>$_smarty_tpl->tpl_vars['title_end']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
