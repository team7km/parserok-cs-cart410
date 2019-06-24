<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 13:17:57
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2906435355d0f51d513abd6-59061339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094c4a614b33a6230695f4fed5d4e3e8cb951413' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1561285015,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2906435355d0f51d513abd6-59061339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f51d51440f7_47186166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f51d51440f7_47186166')) {function content_5d0f51d51440f7_47186166($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
