<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 20:58:34
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/storefronts_update_for_vendor_dialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13202038945d0531ca3041c1-37898066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe9726752c49a242bd7849fd545859d45aa031e4' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/storefronts_update_for_vendor_dialog.tpl',
      1 => 1560353922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13202038945d0531ca3041c1-37898066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0531ca319697_98814863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0531ca319697_98814863')) {function content_5d0531ca319697_98814863($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.storefronts_update_for_vendor.title','vendor_plans.storefronts_update_for_vendor.general_message','vendor_plans.storefronts_update_for_vendor.add_storefronts_message','vendor_plans.storefronts_update_for_vendor.remove_storefronts_message','continue'));
?>

<div class="cm-dialog-auto-size cm-keep-in-place hidden"
     data-ca-dialog-title="<?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.title");?>
"
     id="update_company_vendors_update_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <div class="vendor-plan__storefronts-update__messages">
        <div class="vendor-plan__storefronts-update__message vendor-plan__storefronts-update__message--general">
            <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.general_message");?>

        </div>
        <div class="vendor-plan__storefronts-update-action vendor-plan__storefronts-update-action--add">
            <label class="checkbox">
                <input type="checkbox" name="company_data[add_vendor_to_new_storefronts]">
                <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.add_storefronts_message");?>

            </label>
        </div>
        <div class="vendor-plan__storefronts-action vendor-plan__storefronts-update-action--remove">
            <label class="checkbox">
                <input type="checkbox" name="company_data[remove_vendor_from_old_storefronts]">
                <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.remove_storefronts_message");?>

            </label>
        </div>
    </div>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[companies.update]",'but_text'=>$_smarty_tpl->__("continue")), 0);?>

    </div>
</div>
<?php }} ?>
