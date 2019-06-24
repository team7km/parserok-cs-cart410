<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 16:00:46
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/products/components/products_update_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19476660225d04ebfe12d1e3-97378213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e30d3e3691f33e5db7b5b159f9cfa55615cf32' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/products/components/products_update_features.tpl',
      1 => 1560353871,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19476660225d04ebfe12d1e3-97378213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_features' => 0,
    'features_search' => 0,
    'product_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04ebfe148970_13348022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04ebfe148970_13348022')) {function content_5d04ebfe148970_13348022($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
?>
<div id="content_features" class="hidden">

<?php if ($_smarty_tpl->tpl_vars['product_features']->value) {?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('search'=>$_smarty_tpl->tpl_vars['features_search']->value,'div_id'=>"product_features_pagination_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'current_url'=>fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page'])),'disable_history'=>true), 0);?>


<fieldset>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['product_features']->value), 0);?>

</fieldset>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('search'=>$_smarty_tpl->tpl_vars['features_search']->value,'div_id'=>"product_features_pagination_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'current_url'=>fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page'])),'disable_history'=>true), 0);?>


<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
</div><?php }} ?>
