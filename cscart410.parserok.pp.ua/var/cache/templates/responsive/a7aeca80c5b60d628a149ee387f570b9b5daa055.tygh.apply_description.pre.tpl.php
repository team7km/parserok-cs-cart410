<?php /* Smarty version Smarty-3.1.21, created on 2019-06-22 14:26:43
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/vendor_plans/hooks/vendors/apply_description.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11878354285d0e1073a0c575-85117114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7aeca80c5b60d628a149ee387f570b9b5daa055' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/vendor_plans/hooks/vendors/apply_description.pre.tpl',
      1 => 1560684663,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11878354285d0e1073a0c575-85117114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vendor_plans' => 0,
    'profile_fields' => 0,
    'fields' => 0,
    'field' => 0,
    'show_plan_list' => 0,
    'company_data' => 0,
    'default_plan' => 0,
    'plan' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0e1073a96323_50429169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0e1073a96323_50429169')) {function content_5d0e1073a96323_50429169($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan','vendor_plans.plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['vendor_plans']->value) {?>
    <?php $_smarty_tpl->tpl_vars['show_plan_list'] = new Smarty_variable(true, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fields']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fields']->key => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="plan_id") {?>
                <?php $_smarty_tpl->tpl_vars['show_plan_list'] = new Smarty_variable(false, null, 0);?>
            <?php }?>
        <?php } ?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['show_plan_list']->value) {?>
        <div class="ty-control-group ty-apply-for-vendor-plan">
            <label class="ty-control-group__title" for="company_plan"><?php echo $_smarty_tpl->__("vendor_plans.plan");?>
</label>
            <select name="company_data[plan_id]" id="company_plan" class="ty-apply-for-vendor-plan__select cm-vendor-plans-selector">
                <?php $_smarty_tpl->tpl_vars['default_plan'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['plan_id'], null, 0);?>
                <?php if (!$_smarty_tpl->tpl_vars['default_plan']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['default_plan'] = new Smarty_variable($_REQUEST['plan_id'], null, 0);?>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars["plan"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["plan"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["plan"]->key => $_smarty_tpl->tpl_vars["plan"]->value) {
$_smarty_tpl->tpl_vars["plan"]->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ((!$_smarty_tpl->tpl_vars['default_plan']->value&&$_smarty_tpl->tpl_vars['plan']->value['is_default'])||$_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['default_plan']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0);?>
)</option>
                <?php } ?>
            </select>
        </div>
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/hooks/vendors/apply_description.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_plans/hooks/vendors/apply_description.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['vendor_plans']->value) {?>
    <?php $_smarty_tpl->tpl_vars['show_plan_list'] = new Smarty_variable(true, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fields']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fields']->key => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="plan_id") {?>
                <?php $_smarty_tpl->tpl_vars['show_plan_list'] = new Smarty_variable(false, null, 0);?>
            <?php }?>
        <?php } ?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['show_plan_list']->value) {?>
        <div class="ty-control-group ty-apply-for-vendor-plan">
            <label class="ty-control-group__title" for="company_plan"><?php echo $_smarty_tpl->__("vendor_plans.plan");?>
</label>
            <select name="company_data[plan_id]" id="company_plan" class="ty-apply-for-vendor-plan__select cm-vendor-plans-selector">
                <?php $_smarty_tpl->tpl_vars['default_plan'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['plan_id'], null, 0);?>
                <?php if (!$_smarty_tpl->tpl_vars['default_plan']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['default_plan'] = new Smarty_variable($_REQUEST['plan_id'], null, 0);?>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars["plan"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["plan"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["plan"]->key => $_smarty_tpl->tpl_vars["plan"]->value) {
$_smarty_tpl->tpl_vars["plan"]->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ((!$_smarty_tpl->tpl_vars['default_plan']->value&&$_smarty_tpl->tpl_vars['plan']->value['is_default'])||$_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['default_plan']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0);?>
)</option>
                <?php } ?>
            </select>
        </div>
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
