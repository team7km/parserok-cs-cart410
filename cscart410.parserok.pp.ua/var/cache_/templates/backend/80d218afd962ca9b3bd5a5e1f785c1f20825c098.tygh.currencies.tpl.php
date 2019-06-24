<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 20:46:13
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/currencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2679367145d028be5524619-48372097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80d218afd962ca9b3bd5a5e1f785c1f20825c098' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/currencies.tpl',
      1 => 1560353874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2679367145d028be5524619-48372097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'selected_currencies' => 0,
    'all_currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d028be55502a6_92988269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d028be55502a6_92988269')) {function content_5d028be55502a6_92988269($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('currencies','all_currencies'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[currency_ids][]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required cm-multiple-checkboxes"
    >
        <?php echo $_smarty_tpl->__("currencies");?>

    </label>
    <div class="controls" id="currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="cm-combo-checkbox-group">
            <input type="hidden"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value=""
            />

            <label class="checkbox"
                   for="currency_all_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            >
                <input type="checkbox"
                       class="cm-checkbox-group"
                       data-ca-checkbox-group-role="toggler"
                       data-ca-checkbox-group="currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       id="currency_all_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['selected_currencies']->value===array()) {?>
                           checked
                           disabled
                       <?php }?>
                />
                <?php echo $_smarty_tpl->__("all_currencies");?>

            </label>

            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                <label class="checkbox"
                       for="currency_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                >
                    <input type="checkbox"
                           class="cm-checkbox-group"
                           data-ca-checkbox-group-role="togglee"
                           data-ca-checkbox-group="currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                           name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_id'], ENT_QUOTES, 'UTF-8');?>
"
                           id="currency_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                           <?php if (in_array($_smarty_tpl->tpl_vars['currency']->value['currency_id'],$_smarty_tpl->tpl_vars['selected_currencies']->value)) {?>
                               checked
                           <?php }?>
                    />

                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>

                </label>
            <?php } ?>
        </div>
    </div>
</div>
<?php }} ?>
