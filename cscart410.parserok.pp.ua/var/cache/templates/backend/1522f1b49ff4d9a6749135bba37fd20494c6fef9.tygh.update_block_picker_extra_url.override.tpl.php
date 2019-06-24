<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 14:00:51
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17774699045d062163a70d83-75029846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '17774699045d062163a70d83-75029846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dynamic_object_scheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d062163ac4087_54094020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d062163ac4087_54094020')) {function content_5d062163ac4087_54094020($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch']=="pages.view?page_type=".((string)@constant('PAGE_TYPE_BLOG'))) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>
&page_type=<?php echo htmlspecialchars(@constant('PAGE_TYPE_BLOG'), ENT_QUOTES, 'UTF-8');?>

<?php }?><?php }} ?>
