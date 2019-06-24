<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 13:17:51
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/hooks/index/index.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14848649825d0f51cf733c05-59435465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b82312dfeeb540edb5953b04b0f8de208bd7307' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/hooks/index/index.pre.tpl',
      1 => 1561284069,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14848649825d0f51cf733c05-59435465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_block_alert' => 0,
    'block_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f51cf741348_05235522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f51cf741348_05235522')) {function content_5d0f51cf741348_05235522($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_block_alert']->value) {?>
    <div class="alert alert-block alert-error debt-notification">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['block_alert']->value;?>

        </div>
        <div class="debt-notification__button">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_debt_payout/views/vendor_debt_payout/components/pay_debt_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pay_debt_class'=>"btn-large"), 0);?>

        </div>
    </div>
<?php }?><?php }} ?>
