<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 15:12:52
         compiled from "919fcfa3245d801a1f310749e6e360110780ad06" */ ?>
<?php /*%%SmartyHeaderCode:1257247795d0f6cc4458183-46485030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '919fcfa3245d801a1f310749e6e360110780ad06' => 
    array (
      0 => '919fcfa3245d801a1f310749e6e360110780ad06',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1257247795d0f6cc4458183-46485030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f6cc4461e28_36202879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f6cc4461e28_36202879')) {function content_5d0f6cc4461e28_36202879($_smarty_tpl) {?><?php if (!is_callable('smarty_function_call_phone')) include '/var/www/user01/data/www/fame.parserok.pp.ua/app/addons/call_requests/functions/smarty_plugins/function.call_phone.php';
if (!is_callable('smarty_function_call_request')) include '/var/www/user01/data/www/fame.parserok.pp.ua/app/addons/call_requests/functions/smarty_plugins/function.call_request.php';
?><?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['status']=="A") {?>
<div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><?php echo smarty_function_call_phone(array(),$_smarty_tpl);?>
  <span class="ty-cr-work">Mon-Fr 10a.m.-6p.m.</span></div>
    <div class="ty-cr-link"><?php echo smarty_function_call_request(array(),$_smarty_tpl);?>
</div>
</div>
<?php }?><?php }} ?>
