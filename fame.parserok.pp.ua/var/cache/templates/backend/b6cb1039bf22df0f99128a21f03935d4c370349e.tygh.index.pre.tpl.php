<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 15:12:42
         compiled from "/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/hooks/index/index.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18565691055d0f6cba903f94-99930316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6cb1039bf22df0f99128a21f03935d4c370349e' => 
    array (
      0 => '/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/addons/vendor_debt_payout/hooks/index/index.pre.tpl',
      1 => 1561288273,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18565691055d0f6cba903f94-99930316',
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
  'unifunc' => 'content_5d0f6cba972835_01343523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f6cba972835_01343523')) {function content_5d0f6cba972835_01343523($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_block_alert']->value) {?>
    <div class="alert alert-block alert-error debt-notification">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['block_alert']->value;?>

        </div>
        <div class="debt-notification__button">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_debt_payout/views/vendor_debt_payout/components/pay_debt_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pay_debt_class'=>"btn-large"), 0);?>

        </div>
    </div>
<?php }?><?php }} ?>
