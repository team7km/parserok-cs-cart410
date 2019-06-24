<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 14:31:35
         compiled from "93c11ca9868fb4ec39f3a50e844a4590b631a47c" */ ?>
<?php /*%%SmartyHeaderCode:12715584935d0628977e78e0-53558195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93c11ca9868fb4ec39f3a50e844a4590b631a47c' => 
    array (
      0 => '93c11ca9868fb4ec39f3a50e844a4590b631a47c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '12715584935d0628977e78e0-53558195',
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
  'unifunc' => 'content_5d0628977f4cb7_35991087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0628977f4cb7_35991087')) {function content_5d0628977f4cb7_35991087($_smarty_tpl) {?>
                                    <ul id="customer_service_links">
                                    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
">Ваши заказы</a></li>
                                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']&&$_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=='A') {?>
                                        <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
">Отложенные</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=='Y') {?>
                                        <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
">Список сравнения</a></li>
                                    <?php }?>
                                    </ul><?php }} ?>
