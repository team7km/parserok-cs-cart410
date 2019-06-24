<?php /* Smarty version Smarty-3.1.21, created on 2019-06-18 13:20:09
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/hooks/addons/action_buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7241469205d08bad99f40e6-70998291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f24c5e780b86c023a8fb33c756a1ec34bd893bc' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/hooks/addons/action_buttons.post.tpl',
      1 => 1560353891,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7241469205d08bad99f40e6-70998291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d08bad9b572a9_68002939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d08bad9b572a9_68002939')) {function content_5d08bad9b572a9_68002939($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.download_config'));
?>
<?php if ($_smarty_tpl->tpl_vars['_addon']->value=="mobile_app") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_meta'=>"cm-post cm-ajax cm-comet",'but_href'=>"mobile_app.download_config",'but_text'=>$_smarty_tpl->__("mobile_app.download_config")), 0);?>

<?php }?>
<?php }} ?>
