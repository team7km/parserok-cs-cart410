<?php /* Smarty version Smarty-3.1.21, created on 2019-06-17 16:39:27
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/reward_points/hooks/products/global_update.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16106670585d07980f5595e1-24690496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73e68b736cf96622d6f7ad4d361ceb12a5de850f' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/reward_points/hooks/products/global_update.post.tpl',
      1 => 1560353898,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16106670585d07980f5595e1-24690496',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d07980f5f5af5_57401258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d07980f5f5af5_57401258')) {function content_5d07980f5f5af5_57401258($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points','points_lower'));
?>
<div class="control-group">
    <label for="gu_points" class="control-label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</label>
    <div class="controls">
    	<input type="text" id="gu_points" name="update_data[price_in_points]" size="6" value="">
    	<select name="update_data[price_in_points_type]">
    	    <option value="A" ><?php echo $_smarty_tpl->__("points_lower");?>
</option>
    	    <option value="P" >%</option>
    	</select>
    </div>
</div><?php }} ?>
