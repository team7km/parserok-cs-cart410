<?php /* Smarty version Smarty-3.1.21, created on 2019-06-12 18:55:59
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2325377415d01208f26ac08-88402780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cba3801b232b594ed6a8020f41ae390a68c7f855' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/tooltip.tpl',
      1 => 1560353832,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2325377415d01208f26ac08-88402780',
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
  'unifunc' => 'content_5d01208f2725d7_93487965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d01208f2725d7_93487965')) {function content_5d01208f2725d7_93487965($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
