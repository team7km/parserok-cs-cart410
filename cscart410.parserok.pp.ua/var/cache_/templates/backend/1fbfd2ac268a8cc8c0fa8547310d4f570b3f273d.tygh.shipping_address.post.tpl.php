<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 16:03:37
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_locations/hooks/companies/shipping_address.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12985942765d0249a9b94152-54047978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fbfd2ac268a8cc8c0fa8547310d4f570b3f273d' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_locations/hooks/companies/shipping_address.post.tpl',
      1 => 1560353907,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12985942765d0249a9b94152-54047978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
    'place_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0249a9ce17d3_44769647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0249a9ce17d3_44769647')) {function content_5d0249a9ce17d3_44769647($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_locations.location','tt_addons_vendor_locations_hooks_companies_shipping_address_post_vendor_locations.location'));
?>
<div class="control-group">
    <label for="elm_company_location" class="control-label"><?php echo $_smarty_tpl->__("vendor_locations.location");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_vendor_locations_hooks_companies_shipping_address_post_vendor_locations.location")), 0);?>
:</label>
    <div class="controls">
        <?php $_smarty_tpl->tpl_vars['place_id'] = new Smarty_variable(null, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['vendor_location']) {?>
            <?php $_smarty_tpl->tpl_vars['place_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['vendor_location']->getPlaceId(), null, 0);?>
        <?php }?>
        <input type="text" class="cm-geocomplete input-large" data-ca-geocomplete-type="address" data-ca-geocomplete-place-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['place_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-geocomplete-value-elem-id="elm_company_vendor_location_value" id="elm_company_location" />

        <input type="hidden" name="company_data[vendor_location]" id="elm_company_vendor_location_value" />
    </div>
</div>
<?php }} ?>
