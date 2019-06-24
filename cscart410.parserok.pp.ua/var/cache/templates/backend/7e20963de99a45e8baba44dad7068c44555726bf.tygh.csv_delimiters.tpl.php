<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 19:46:34
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/exim/components/csv_delimiters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16063282895d0520eabca857-31399464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e20963de99a45e8baba44dad7068c44555726bf' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/exim/components/csv_delimiters.tpl',
      1 => 1560353868,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16063282895d0520eabca857-31399464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
    'allow_auto_detect' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0520eabe2739_34099417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0520eabe2739_34099417')) {function content_5d0520eabe2739_34099417($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('auto','semicolon','comma','tab'));
?>
<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['allow_auto_detect']->value) {?>
        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO"), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value==smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO")) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("auto");?>
</option>
    <?php }?>
    <option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("semicolon");?>
</option>
    <option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("comma");?>
</option>
    <option value="T" <?php if ($_smarty_tpl->tpl_vars['value']->value=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("tab");?>
</option>
</select>
<?php }} ?>
