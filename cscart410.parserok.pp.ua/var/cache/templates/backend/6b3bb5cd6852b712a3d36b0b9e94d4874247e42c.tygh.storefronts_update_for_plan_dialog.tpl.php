<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 14:13:27
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/storefronts_update_for_plan_dialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10312883885d062457e15fa3-20494250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b3bb5cd6852b712a3d36b0b9e94d4874247e42c' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/storefronts_update_for_plan_dialog.tpl',
      1 => 1560353922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10312883885d062457e15fa3-20494250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plan_id' => 0,
    'affected_vendors_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d062457e2c3e6_87051996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d062457e2c3e6_87051996')) {function content_5d062457e2c3e6_87051996($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.storefronts_update_for_plan.title','vendor_plans.storefronts_update_for_plan.general_message','vendor_plans.storefronts_update_for_plan.add_storefronts_message','vendor_plans.storefronts_update_for_plan.remove_storefronts_message','continue'));
?>

<div class="cm-dialog-auto-size cm-dialog-keep-in-place hidden"
     data-ca-dialog-title="<?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_plan.title");?>
"
     id="update_plan_vendors_update_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <div class="vendor-plan__storefronts-update__messages">
        <div class="vendor-plan__storefronts-update__message vendor-plan__storefronts-update__message--general">
            <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_plan.general_message",array($_smarty_tpl->tpl_vars['affected_vendors_count']->value,"[search_url]"=>fn_url("companies.manage?plan_id=".((string)$_smarty_tpl->tpl_vars['plan_id']->value))));?>

        </div>
        <div class="vendor-plan__storefronts-update-action vendor-plan__storefronts-update-action--add">
            <label class="checkbox">
                <input type="checkbox" name="plan_data[add_vendors_to_new_storefronts]">
                <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_plan.add_storefronts_message",array($_smarty_tpl->tpl_vars['affected_vendors_count']->value));?>

            </label>
        </div>
        <div class="vendor-plan__storefronts-action vendor-plan__storefronts-update-action--remove">
            <label class="checkbox">
                <input type="checkbox" name="plan_data[remove_vendors_from_old_storefronts]">
                <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_plan.remove_storefronts_message",array($_smarty_tpl->tpl_vars['affected_vendors_count']->value));?>

            </label>
        </div>
    </div>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[vendor_plans.update]",'but_text'=>$_smarty_tpl->__("continue")), 0);?>

    </div>
</div>
<?php }} ?>
