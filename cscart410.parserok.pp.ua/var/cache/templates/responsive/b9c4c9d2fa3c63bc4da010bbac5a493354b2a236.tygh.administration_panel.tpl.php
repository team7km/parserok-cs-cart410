<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 14:32:43
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/administration_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2910712945d0628dbcdcf07-97755510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9c4c9d2fa3c63bc4da010bbac5a493354b2a236' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/administration_panel.tpl',
      1 => 1560354879,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2910712945d0628dbcdcf07-97755510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'settings' => 0,
    'name' => 0,
    'c_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0628dbe28830_77399279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0628dbe28830_77399279')) {function content_5d0628dbe28830_77399279($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('demo_panel.go_admin_panel','demo_panel.go_vendor_panel','demo_panel.theme_editor.enable','demo_panel.block_manager.enable','administration_panel.live_editor.enable','administration_panel.theme_editor.enable','administration_panel.block_manager.enable','demo_panel.go_admin_panel','demo_panel.go_vendor_panel','demo_panel.theme_editor.enable','demo_panel.block_manager.enable','administration_panel.live_editor.enable','administration_panel.theme_editor.enable','administration_panel.block_manager.enable'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company']) {?>
    <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    $(document).ready(function() {

        $(_.doc).on('click', '#off_minimize_block', function() {
            $('#tygh_container').removeClass('ty-top-panel-padding');
        });

        $(_.doc).on('click', '#on_minimize_block', function() {
            $('#tygh_container').addClass('ty-top-panel-padding');
        });

        var open = $.cookie.get('minimize_block');
        if (open) {
            $('#tygh_container').removeClass('ty-top-panel-padding');
        } else {
            $('#tygh_container').addClass('ty-top-panel-padding');
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ty-top-panel"><div id="minimize_block" class="ty-top-panel__wrapper <?php if ($_COOKIE['minimize_block']) {?>hidden<?php }?>"><div class="ty-top-panel__header"><div class="ty-top-panel__logo"><a href="<?php echo htmlspecialchars(fn_url('',"A"), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel__logo-link"><i class="ty-top-panel__icon-basket ty-icon-basket"></i></a></div><h4 class="ty-top-panel__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</h4></div><div class="ty-top-panel-action"><span class="ty-top-panel-action_item"><a href="<?php echo htmlspecialchars(fn_url('',"A"), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel-btn cm-no-ajax"><?php echo $_smarty_tpl->__("demo_panel.go_admin_panel");?>
</a><?php if (fn_allowed_for("MULTIVENDOR")) {?><a href="<?php echo htmlspecialchars(fn_url('',"V"), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel-btn cm-no-ajax"><?php echo $_smarty_tpl->__("demo_panel.go_vendor_panel");?>
</a><?php }?></span><?php if ($_smarty_tpl->tpl_vars['config']->value['demo_mode']) {?><a href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['c_url']->value,"demo_customize_theme=Y"), ENT_QUOTES, 'UTF-8');?>
"id="settings_theme_editor"class="ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>active<?php }?>"title="<?php echo htmlspecialchars($_smarty_tpl->__("demo_panel.theme_editor.enable",array("[product]"=>@constant('PRODUCT_NAME'))), ENT_QUOTES, 'UTF-8', true);?>
"><i class="ty-top-panel-action__icon-setting ty-icon-wrench"></i></a><a href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['c_url']->value,"demo_block_manager=Y"), ENT_QUOTES, 'UTF-8');?>
"id="setting_block_manager"class="ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>active<?php }?>"title="<?php echo htmlspecialchars($_smarty_tpl->__("demo_panel.block_manager.enable",array("[product]"=>@constant('PRODUCT_NAME'))), ENT_QUOTES, 'UTF-8', true);?>
"><i class="ty-top-panel-action__icon-setting ty-icon-products-without-options ty-top-panel-action__icon-setting--block-manager"></i></a><?php } else {
if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"live_editor"),@constant('AREA'),$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?><a href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=live_editor&status=enable&return_url=".$_tmp1), ENT_QUOTES, 'UTF-8');?>
"id="settings_live_editor"class="cm-no-ajax ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>active<?php }?>"title="<?php echo htmlspecialchars($_smarty_tpl->__("administration_panel.live_editor.enable",array("[product]"=>@constant('PRODUCT_NAME'))), ENT_QUOTES, 'UTF-8', true);?>
"><i class="ty-top-panel-action__icon-setting ty-icon-live-edit" style="top: 7px; font-size: 26px;"></i></a><?php }
if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"theme_editor"),@constant('AREA'),$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?><a href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=theme_editor&status=enable&return_url=".$_tmp2), ENT_QUOTES, 'UTF-8');?>
"id="settings_theme_editor"class="cm-no-ajax ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>active<?php }?>"title="<?php echo htmlspecialchars($_smarty_tpl->__("administration_panel.theme_editor.enable",array("[product]"=>@constant('PRODUCT_NAME'))), ENT_QUOTES, 'UTF-8', true);?>
"><i class="ty-top-panel-action__icon-setting ty-icon-wrench"></i></a><?php }
if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"block_manager"),@constant('AREA'),$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?><a href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=block_manager&status=enable&return_url=".$_tmp3), ENT_QUOTES, 'UTF-8');?>
"id="settings_block_manager"class="cm-no-ajax ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>active<?php }?>"title="<?php echo htmlspecialchars($_smarty_tpl->__("administration_panel.block_manager.enable",array("[product]"=>@constant('PRODUCT_NAME'))), ENT_QUOTES, 'UTF-8', true);?>
"><i class="ty-top-panel-action__icon-setting ty-icon-products-without-options ty-top-panel-action__icon-setting--block-manager"></i></a><?php }
}?><a id="off_minimize_block" class="ty-top-panel__close ty-top-panel-action_item cm-combination-panel cm-save-state cm-ss-reverse"><i class="ty-icon-cancel"></i></a></div></div><a id="on_minimize_block" class="minimize-label cm-combination-panel cm-save-state cm-ss-reverse<?php if (!$_COOKIE['minimize_block']) {?> hidden<?php }?>"><i class="minimize-label__icon ty-icon-down-open"></i></a></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="administration_panel.tpl" id="<?php echo smarty_function_set_id(array('name'=>"administration_panel.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company']) {?>
    <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    $(document).ready(function() {

        $(_.doc).on('click', '#off_minimize_block', function() {
            $('#tygh_container').removeClass('ty-top-panel-padding');
        });

        $(_.doc).on('click', '#on_minimize_block', function() {
            $('#tygh_container').addClass('ty-top-panel-padding');
        });

        var open = $.cookie.get('minimize_block');
        if (open) {
            $('#tygh_container').removeClass('ty-top-panel-padding');
        } else {
            $('#tygh_container').addClass('ty-top-panel-padding');
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ty-top-panel"><div id="minimize_block" class="ty-top-panel__wrapper <?php if ($_COOKIE['minimize_block']) {?>hidden<?php }?>"><div class="ty-top-panel__header"><div class="ty-top-panel__logo"><a href="<?php echo htmlspecialchars(fn_url('',"A"), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel__logo-link"><i class="ty-top-panel__icon-basket ty-icon-basket"></i></a></div><h4 class="ty-top-panel__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</h4></div><div class="ty-top-panel-action"><span class="ty-top-panel-action_item"><a href="<?php echo htmlspecialchars(fn_url('',"A"), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel-btn cm-no-ajax"><?php echo $_smarty_tpl->__("demo_panel.go_admin_panel");?>
</a><?php if (fn_allowed_for("MULTIVENDOR")) {?><a href="<?php echo htmlspecialchars(fn_url('',"V"), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel-btn cm-no-ajax"><?php echo $_smarty_tpl->__("demo_panel.go_vendor_panel");?>
</a><?php }?></span><?php if ($_smarty_tpl->tpl_vars['config']->value['demo_mode']) {?><a href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['c_url']->value,"demo_customize_theme=Y"), ENT_QUOTES, 'UTF-8');?>
"id="settings_theme_editor"class="ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>active<?php }?>"title="<?php echo htmlspecialchars($_smarty_tpl->__("demo_panel.theme_editor.enable",array("[product]"=>@constant('PRODUCT_NAME'))), ENT_QUOTES, 'UTF-8', true);?>
"><i class="ty-top-panel-action__icon-setting ty-icon-wrench"></i></a><a href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['c_url']->value,"demo_block_manager=Y"), ENT_QUOTES, 'UTF-8');?>
"id="setting_block_manager"class="ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>active<?php }?>"title="<?php echo htmlspecialchars($_smarty_tpl->__("demo_panel.block_manager.enable",array("[product]"=>@constant('PRODUCT_NAME'))), ENT_QUOTES, 'UTF-8', true);?>
"><i class="ty-top-panel-action__icon-setting ty-icon-products-without-options ty-top-panel-action__icon-setting--block-manager"></i></a><?php } else {
if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"live_editor"),@constant('AREA'),$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?><a href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=live_editor&status=enable&return_url=".$_tmp4), ENT_QUOTES, 'UTF-8');?>
"id="settings_live_editor"class="cm-no-ajax ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>active<?php }?>"title="<?php echo htmlspecialchars($_smarty_tpl->__("administration_panel.live_editor.enable",array("[product]"=>@constant('PRODUCT_NAME'))), ENT_QUOTES, 'UTF-8', true);?>
"><i class="ty-top-panel-action__icon-setting ty-icon-live-edit" style="top: 7px; font-size: 26px;"></i></a><?php }
if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"theme_editor"),@constant('AREA'),$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?><a href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=theme_editor&status=enable&return_url=".$_tmp5), ENT_QUOTES, 'UTF-8');?>
"id="settings_theme_editor"class="cm-no-ajax ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>active<?php }?>"title="<?php echo htmlspecialchars($_smarty_tpl->__("administration_panel.theme_editor.enable",array("[product]"=>@constant('PRODUCT_NAME'))), ENT_QUOTES, 'UTF-8', true);?>
"><i class="ty-top-panel-action__icon-setting ty-icon-wrench"></i></a><?php }
if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"block_manager"),@constant('AREA'),$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?><a href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp6=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=block_manager&status=enable&return_url=".$_tmp6), ENT_QUOTES, 'UTF-8');?>
"id="settings_block_manager"class="cm-no-ajax ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>active<?php }?>"title="<?php echo htmlspecialchars($_smarty_tpl->__("administration_panel.block_manager.enable",array("[product]"=>@constant('PRODUCT_NAME'))), ENT_QUOTES, 'UTF-8', true);?>
"><i class="ty-top-panel-action__icon-setting ty-icon-products-without-options ty-top-panel-action__icon-setting--block-manager"></i></a><?php }
}?><a id="off_minimize_block" class="ty-top-panel__close ty-top-panel-action_item cm-combination-panel cm-save-state cm-ss-reverse"><i class="ty-icon-cancel"></i></a></div></div><a id="on_minimize_block" class="minimize-label cm-combination-panel cm-save-state cm-ss-reverse<?php if (!$_COOKIE['minimize_block']) {?> hidden<?php }?>"><i class="minimize-label__icon ty-icon-down-open"></i></a></div>
<?php }?><?php }} ?>
