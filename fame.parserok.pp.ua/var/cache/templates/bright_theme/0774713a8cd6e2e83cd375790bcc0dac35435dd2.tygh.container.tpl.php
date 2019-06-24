<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 15:12:43
         compiled from "/var/www/user01/data/www/fame.parserok.pp.ua/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1505005435d0f6cbb709529-68307987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0774713a8cd6e2e83cd375790bcc0dac35435dd2' => 
    array (
      0 => '/var/www/user01/data/www/fame.parserok.pp.ua/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1561291904,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1505005435d0f6cbb709529-68307987',
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
  'unifunc' => 'content_5d0f6cbb715915_67278359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f6cbb715915_67278359')) {function content_5d0f6cbb715915_67278359($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
