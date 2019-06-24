<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 14:05:16
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18006075235d022dec7f0733-19657072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a326283f9deaead8899cc6a3efec38c7c184da6d' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/buttons/search.tpl',
      1 => 1560353829,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18006075235d022dec7f0733-19657072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d022decd143b1_54447891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d022decd143b1_54447891')) {function content_5d022decd143b1_54447891($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
