<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 13:18:33
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7337192615d0f51f9b17f02-76049839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e916ce8571c728386f2ce372b1d57b49e7510ea1' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/common/tooltip.tpl',
      1 => 1561283979,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7337192615d0f51f9b17f02-76049839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f51f9b28074_93165086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f51f9b28074_93165086')) {function content_5d0f51f9b28074_93165086($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
