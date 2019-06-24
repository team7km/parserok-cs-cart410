<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 20:57:41
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/access_key.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8354840455d053195afaac1-38038376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bec315208e08d2a1d5768049200ccc91984013c' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/access_key.tpl',
      1 => 1560353874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8354840455d053195afaac1-38038376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'access_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d053195b04b21_80214177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d053195b04b21_80214177')) {function content_5d053195b04b21_80214177($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_access_key'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[access_key]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="access_key_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("storefront_access_key");?>

    </label>
    <div class="controls">
        <input type="text"
               id="access_key_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="input-large"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>
<?php }} ?>
