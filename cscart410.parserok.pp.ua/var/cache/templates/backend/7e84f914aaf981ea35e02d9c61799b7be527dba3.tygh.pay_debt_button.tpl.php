<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 21:02:52
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/pay_debt_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7654501615d0532cc6c7344-04305984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e84f914aaf981ea35e02d9c61799b7be527dba3' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/pay_debt_button.tpl',
      1 => 1560353922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7654501615d0532cc6c7344-04305984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pay_debt_class' => 0,
    'pay_debt_url' => 0,
    'pay_debt_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0532cc6d24b6_61100770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0532cc6d24b6_61100770')) {function content_5d0532cc6d24b6_61100770($_smarty_tpl) {?><a class="btn btn-primary <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pay_debt_class']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
   target="_blank"
   href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['pay_debt_url']->value), ENT_QUOTES, 'UTF-8');?>
"
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pay_debt_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
<?php }} ?>
