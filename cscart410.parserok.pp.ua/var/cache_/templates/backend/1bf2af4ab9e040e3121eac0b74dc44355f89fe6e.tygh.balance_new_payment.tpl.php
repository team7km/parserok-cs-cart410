<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 16:02:48
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/companies/components/balance_new_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11469455875d04ec78081f75-47858670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf2af4ab9e040e3121eac0b74dc44355f89fe6e' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/companies/components/balance_new_payment.tpl',
      1 => 1560353867,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11469455875d04ec78081f75-47858670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04ec7809f367_81632326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04ec7809f367_81632326')) {function content_5d04ec7809f367_81632326($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('payment_amount','comments','notify_vendor'));
?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="new_payout_form">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"payment[vendor]",'id'=>"p_vendor",'selected'=>$_REQUEST['vendor']), 0);?>


<div class="control-group">
    <label class="cm-required control-label" for="payment_amount"><?php echo $_smarty_tpl->__("payment_amount");?>
</label>
    <div class="controls">
        <input type="text" class="cm-numeric" name="payment[amount]" id="payment_amount" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="payment_comments"><?php echo $_smarty_tpl->__("comments");?>
</label>
    <div class="controls">
    <textarea class="span9" rows="8" cols="55" name="payment[comments]" id="payment_comments"
    ></textarea></div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <div class="control-group">
        <label for="" class="control-label">&nbsp;</label>
        <div class="controls cm-toggle-button">
            <div class="select-field notify-customer">
                <label class="checkbox" for="notify_user">
                    <input type="checkbox"
                           name="payment[notify_user]"
                           id="notify_user"
                           value="Y"
                    />
                    <?php echo $_smarty_tpl->__("notify_vendor");?>

                </label>
            </div>
        </div>
    </div>
<?php }?>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[companies.payouts_add]",'cancel_action'=>"close"), 0);?>

</div>

</form><?php }} ?>
