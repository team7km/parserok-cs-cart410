<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 15:12:38
         compiled from "b7ee593178d4978b0992e1493d9a13e02c3bbc4a" */ ?>
<?php /*%%SmartyHeaderCode:4324779465d063236d01b20-82163348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ee593178d4978b0992e1493d9a13e02c3bbc4a' => 
    array (
      0 => 'b7ee593178d4978b0992e1493d9a13e02c3bbc4a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '4324779465d063236d01b20-82163348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d063236d1ad39_06709498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d063236d1ad39_06709498')) {function content_5d063236d1ad39_06709498($_smarty_tpl) {?>
                            <ul id="customer_service_links">
                            <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
">About your order</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']&&$_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=='A') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
">Wishlist</a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=='Y') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
">Comparison list</a></li>
                            <?php }?>
                            </ul><?php }} ?>
