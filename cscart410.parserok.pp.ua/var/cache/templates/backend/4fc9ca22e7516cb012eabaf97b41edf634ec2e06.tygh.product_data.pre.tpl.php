<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 14:01:45
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/product_variations/hooks/product_list/product_data.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8567303315d062199460c89-41411747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fc9ca22e7516cb012eabaf97b41edf634ec2e06' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/product_variations/hooks/product_list/product_data.pre.tpl',
      1 => 1560353897,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8567303315d062199460c89-41411747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0621994675c3_91834886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0621994675c3_91834886')) {function content_5d0621994675c3_91834886($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_name']) {?>
    <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_alt" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_name'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php }} ?>
