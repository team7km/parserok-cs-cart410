<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 13:17:51
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/addons/vendor_plans/hooks/index/order_by_statuses.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21290494445d0f51cfd6be50-89906279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22f7af2e7f22101f8492b0cea6d431036e8eaa1' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/addons/vendor_plans/hooks/index/order_by_statuses.post.tpl',
      1 => 1561284071,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21290494445d0f51cfd6be50-89906279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plan_usage' => 0,
    'runtime' => 0,
    'plan_data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f51cfd9df66_12680672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f51cfd9df66_12680672')) {function content_5d0f51cfd9df66_12680672($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.current_plan_usage','vendor_plans.plan_name','vendor_plans.unlimited'));
?>
<?php if ($_smarty_tpl->tpl_vars['plan_usage']->value) {?>
    <div class="dashboard-table dashboard-table-plan-usage">
        <h4><?php echo $_smarty_tpl->__("vendor_plans.current_plan_usage");?>
</h4>
        <div class="table-wrapper">
            <table class="table" width="100%">
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->__("vendor_plans.plan_name");?>
:
                    </td>
                    <td>
                        <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])."&selected_section=plan"), ENT_QUOTES, 'UTF-8');?>
">
                            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan_data']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</strong>
                        </a>
                    </td>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plan_usage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td width="30%">
                        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong><br />
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['is_price']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['item']->value['current']), 0);?>
/<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['current'], ENT_QUOTES, 'UTF-8');?>
&nbsp;/&nbsp;<?php }
if (!$_smarty_tpl->tpl_vars['item']->value['limit']) {
echo $_smarty_tpl->__("vendor_plans.unlimited");
} elseif ($_smarty_tpl->tpl_vars['item']->value['is_price']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['item']->value['limit']), 0);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['limit'], ENT_QUOTES, 'UTF-8');
}?>
                    </td>
                    <td width="70%" valign="middle">
                        <div class="progress <?php if ($_smarty_tpl->tpl_vars['item']->value['current']==$_smarty_tpl->tpl_vars['item']->value['limit']) {?>progress-info<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['current']>$_smarty_tpl->tpl_vars['item']->value['limit']) {?>progress-danger<?php }?>">
                            <div class="bar" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['percentage'], ENT_QUOTES, 'UTF-8');?>
%;"></div>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
<?php }?>
<?php }} ?>
