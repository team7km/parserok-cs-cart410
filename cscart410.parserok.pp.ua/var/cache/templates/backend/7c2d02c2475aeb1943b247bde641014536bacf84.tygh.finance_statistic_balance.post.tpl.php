<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 21:02:52
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/hooks/index/finance_statistic_balance.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4906199725d0532cc6bb005-92931602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c2d02c2475aeb1943b247bde641014536bacf84' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/hooks/index/finance_statistic_balance.post.tpl',
      1 => 1560353907,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4906199725d0532cc6bb005-92931602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_pay_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0532cc6c29e2_48420249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0532cc6c29e2_48420249')) {function content_5d0532cc6c29e2_48420249($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_pay_button']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_debt_payout/views/vendor_debt_payout/components/pay_debt_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
