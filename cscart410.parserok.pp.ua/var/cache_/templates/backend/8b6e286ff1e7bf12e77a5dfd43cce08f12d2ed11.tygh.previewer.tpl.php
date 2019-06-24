<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 16:47:43
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19998384235d0253ffd763c7-76221867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b6e286ff1e7bf12e77a5dfd43cce08f12d2ed11' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/previewer.tpl',
      1 => 1560353831,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19998384235d0253ffd763c7-76221867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0253ffd9a473_01142908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0253ffd9a473_01142908')) {function content_5d0253ffd9a473_01142908($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
