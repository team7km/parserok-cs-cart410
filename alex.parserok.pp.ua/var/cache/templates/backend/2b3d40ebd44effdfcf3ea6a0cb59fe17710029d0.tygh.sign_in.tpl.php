<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 15:20:57
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/buttons/sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20338036325d0f6ea9a1e3e9-88457826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b3d40ebd44effdfcf3ea6a0cb59fe17710029d0' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/buttons/sign_in.tpl',
      1 => 1561283976,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20338036325d0f6ea9a1e3e9-88457826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f6ea9a28122_90764006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f6ea9a28122_90764006')) {function content_5d0f6ea9a28122_90764006($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
