<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 21:03:13
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5627220855d0532e1a6ae40-24263325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e334276cb9a13c5142d9cce58f48c66f7e575ff' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl',
      1 => 1560353908,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5627220855d0532e1a6ae40-24263325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'search' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0532e1a7a5b1_48194885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0532e1a7a5b1_48194885')) {function content_5d0532e1a7a5b1_48194885($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan'));
?>
<th width="20%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=plan&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor_plans.plan");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="plan") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<?php }} ?>
