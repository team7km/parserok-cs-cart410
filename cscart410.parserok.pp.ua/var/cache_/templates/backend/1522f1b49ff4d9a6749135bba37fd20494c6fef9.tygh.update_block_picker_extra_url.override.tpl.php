<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 19:17:05
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3043859195d051a01ea7037-89883438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1522f1b49ff4d9a6749135bba37fd20494c6fef9' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl',
      1 => 1560353879,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3043859195d051a01ea7037-89883438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dynamic_object_scheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d051a01eb05e4_16163869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d051a01eb05e4_16163869')) {function content_5d051a01eb05e4_16163869($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch']=="pages.view?page_type=".((string)@constant('PAGE_TYPE_BLOG'))) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>
&page_type=<?php echo htmlspecialchars(@constant('PAGE_TYPE_BLOG'), ENT_QUOTES, 'UTF-8');?>

<?php }?><?php }} ?>
