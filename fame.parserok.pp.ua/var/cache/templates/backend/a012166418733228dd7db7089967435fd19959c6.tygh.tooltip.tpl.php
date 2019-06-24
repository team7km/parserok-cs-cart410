<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 15:14:56
         compiled from "/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6538344745d0f6d40965ad3-91841305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a012166418733228dd7db7089967435fd19959c6' => 
    array (
      0 => '/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/common/tooltip.tpl',
      1 => 1561288177,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6538344745d0f6d40965ad3-91841305',
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
  'unifunc' => 'content_5d0f6d4097d3d6_42974777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f6d4097d3d6_42974777')) {function content_5d0f6d4097d3d6_42974777($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
