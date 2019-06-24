<?php /* Smarty version Smarty-3.1.21, created on 2019-06-12 19:05:29
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/vendor_locations/blocks/location_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9444498605d0122c93a5230-66131287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01962c84b8eccc4d5ae1d9d6a1c7978c290d5dd' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/vendor_locations/blocks/location_selector.tpl',
      1 => 1560355514,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9444498605d0122c93a5230-66131287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'config' => 0,
    'location' => 0,
    'class' => 0,
    'locality' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0122c94668a5_25139368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0122c94668a5_25139368')) {function content_5d0122c94668a5_25139368($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_locations.selected_city','vendor_locations.customer_geolocation','vendor_locations.not_your_city','vendor_locations.search_city','choose','vendor_locations.customer_geolocation','vendor_locations.select_city','vendor_locations.selected_city','vendor_locations.customer_geolocation','vendor_locations.not_your_city','vendor_locations.search_city','choose','vendor_locations.customer_geolocation','vendor_locations.select_city'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php $_smarty_tpl->tpl_vars['location'] = new Smarty_variable($_SESSION['settings']['customer_geolocation']['value'], null, 0);?>
<div class="cm-reload-on-geolocation-change" id="location_selector_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->_capture_stack[0][] = array("geolocation_picker", null, null); ob_start(); ?>
    <div id="customer_geolocation_dialog">
        <form name="geolocation_form" id="form_geolocation" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-geolocation-form cm-ajax-full-render">
            <input name="return_url" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['return_url'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
">
            <input name="location" id="elm_geolocation_data" type="hidden" data-ca-field-id="geolocation_data" value="">

            <div class="ty-filter-products-by-geolocation-popup__container">
                <p class="ty-filter-products-by-geolocation-popup__selected-city"><?php echo $_smarty_tpl->__("vendor_locations.selected_city");?>
:</p>
                <h3 class="ty-filter-products-by-geolocation-popup__title cm-filter-products-by-geolocation__location">
                    <bdi><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['location']->value['locality_text'])===null||$tmp==='' ? $_smarty_tpl->__("vendor_locations.customer_geolocation") : $tmp), ENT_QUOTES, 'UTF-8');?>
</bdi>
                </h3>
                <p class="ty-filter-products-by-geolocation-popup__not-your-city"><?php echo $_smarty_tpl->__("vendor_locations.not_your_city");?>
</p>
            </div>
            <div class="ty-control-group">
                <label class="ty-control-group__title" for="customer_geolocation"><?php echo $_smarty_tpl->__("vendor_locations.search_city");?>
</label>
                <input id="customer_current_geolocation"
                       size="50"
                       class="cm-geocomplete ty-input-text-full cm-geolocation-search-current-location"
                       type="text"
                       name="customer_geolocation"
                       value=""
                       data-ca-field-id="customer_geolocation"
                       data-ca-geocomplete-type="address"
                       data-ca-geocomplete-value-elem-id="elm_geolocation_data"
                       data-ca-geocomplete-place-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['place_id'], ENT_QUOTES, 'UTF-8');?>
"
                >
            </div>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("choose"),'but_role'=>"text",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn cm-geolocation-select-current-location"), 0);?>

            </div>
        </form>
    <!--customer_geolocation_dialog--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("geolocation_label", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['locality'] = new Smarty_variable('', null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['location']->value) {?>
        <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("location-selected", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['locality'] = new Smarty_variable($_smarty_tpl->tpl_vars['location']->value['locality_text'], null, 0);?>
    <?php }?>
    <span class="cm-geolocation-current-location <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['locality']->value)===null||$tmp==='' ? $_smarty_tpl->__("vendor_locations.customer_geolocation") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>'','link_text'=>Smarty::$_smarty_vars['capture']['geolocation_label'],'link_icon'=>"ty-icon-location-arrow ty-filter-products-by-geolocation-popup__icon",'link_meta'=>"ty-filter-products-by-geolocation-popup__item",'text'=>$_smarty_tpl->__("vendor_locations.select_city"),'id'=>"customer_geolocation_dialog",'but_name'=>"dispatch[profiles.set_geolocation]",'content'=>Smarty::$_smarty_vars['capture']['geolocation_picker']), 0);?>

<!--location_selector_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_locations/blocks/location_selector.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_locations/blocks/location_selector.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php $_smarty_tpl->tpl_vars['location'] = new Smarty_variable($_SESSION['settings']['customer_geolocation']['value'], null, 0);?>
<div class="cm-reload-on-geolocation-change" id="location_selector_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->_capture_stack[0][] = array("geolocation_picker", null, null); ob_start(); ?>
    <div id="customer_geolocation_dialog">
        <form name="geolocation_form" id="form_geolocation" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-geolocation-form cm-ajax-full-render">
            <input name="return_url" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['return_url'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
">
            <input name="location" id="elm_geolocation_data" type="hidden" data-ca-field-id="geolocation_data" value="">

            <div class="ty-filter-products-by-geolocation-popup__container">
                <p class="ty-filter-products-by-geolocation-popup__selected-city"><?php echo $_smarty_tpl->__("vendor_locations.selected_city");?>
:</p>
                <h3 class="ty-filter-products-by-geolocation-popup__title cm-filter-products-by-geolocation__location">
                    <bdi><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['location']->value['locality_text'])===null||$tmp==='' ? $_smarty_tpl->__("vendor_locations.customer_geolocation") : $tmp), ENT_QUOTES, 'UTF-8');?>
</bdi>
                </h3>
                <p class="ty-filter-products-by-geolocation-popup__not-your-city"><?php echo $_smarty_tpl->__("vendor_locations.not_your_city");?>
</p>
            </div>
            <div class="ty-control-group">
                <label class="ty-control-group__title" for="customer_geolocation"><?php echo $_smarty_tpl->__("vendor_locations.search_city");?>
</label>
                <input id="customer_current_geolocation"
                       size="50"
                       class="cm-geocomplete ty-input-text-full cm-geolocation-search-current-location"
                       type="text"
                       name="customer_geolocation"
                       value=""
                       data-ca-field-id="customer_geolocation"
                       data-ca-geocomplete-type="address"
                       data-ca-geocomplete-value-elem-id="elm_geolocation_data"
                       data-ca-geocomplete-place-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['place_id'], ENT_QUOTES, 'UTF-8');?>
"
                >
            </div>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("choose"),'but_role'=>"text",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn cm-geolocation-select-current-location"), 0);?>

            </div>
        </form>
    <!--customer_geolocation_dialog--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("geolocation_label", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['locality'] = new Smarty_variable('', null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['location']->value) {?>
        <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("location-selected", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['locality'] = new Smarty_variable($_smarty_tpl->tpl_vars['location']->value['locality_text'], null, 0);?>
    <?php }?>
    <span class="cm-geolocation-current-location <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['locality']->value)===null||$tmp==='' ? $_smarty_tpl->__("vendor_locations.customer_geolocation") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>'','link_text'=>Smarty::$_smarty_vars['capture']['geolocation_label'],'link_icon'=>"ty-icon-location-arrow ty-filter-products-by-geolocation-popup__icon",'link_meta'=>"ty-filter-products-by-geolocation-popup__item",'text'=>$_smarty_tpl->__("vendor_locations.select_city"),'id'=>"customer_geolocation_dialog",'but_name'=>"dispatch[profiles.set_geolocation]",'content'=>Smarty::$_smarty_vars['capture']['geolocation_picker']), 0);?>

<!--location_selector_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?><?php }} ?>
