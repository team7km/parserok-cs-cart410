<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 20:57:41
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/redirect_customer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15300762405d053195b70c12-32695327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b658678be4d6c422eec27eb4613aebecbb67e7f' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/redirect_customer.tpl',
      1 => 1560353874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15300762405d053195b70c12-32695327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'redirect_customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d053195b80728_61503512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d053195b80728_61503512')) {function content_5d053195b80728_61503512($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('redirect_customer_from_storefront'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[redirect_customer]" : $tmp), null, 0);?>

<div class="control-group">
    <div class="controls">
        <input type="hidden"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <label for="redirect_customer_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="checkbox"
        >
            <input type="checkbox"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   id="redirect_customer_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                   class="cm-switch-availability"
                   <?php if ($_smarty_tpl->tpl_vars['redirect_customer']->value) {?>checked<?php }?>
            /><?php echo $_smarty_tpl->__("redirect_customer_from_storefront");?>

        </label>
    </div>
</div>
<?php }} ?>
