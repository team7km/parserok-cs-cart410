<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 14:05:14
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/buttons/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12902099625d022dea39bb16-44348884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ec148e86cea4c4497bf97de651da2158f0c2ebe' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/buttons/save.tpl',
      1 => 1560353830,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12902099625d022dea39bb16-44348884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d022dea4022c5_01490204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d022dea4022c5_01490204')) {function content_5d022dea4022c5_01490204($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>
