<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 13:53:34
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/vendor_locations/blocks/companies_catalog/vendors_map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9475416115d061fae2a5f90-81534430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b402a144baef24c09fff77d00e54ff03072670f6' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/themes/responsive/templates/addons/vendor_locations/blocks/companies_catalog/vendors_map.tpl',
      1 => 1560355514,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9475416115d061fae2a5f90-81534430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'item' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d061fae2ec029_75066735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d061fae2ec029_75066735')) {function content_5d061fae2ec029_75066735($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div id="vendors_map" data-ca-geomap-marker-selector=".cm-vendor-map-marker" data-ca-geomap-max-zoom="15">
</div>
<div class="hidden">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="cm-vendor-map-marker"
             data-ca-geomap-marker-lat="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['lat'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geomap-marker-lng="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['lng'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geomap-marker-url="<?php echo strtr(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['item']->value['company_id'])), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
             data-ca-geomap-marker-label="<?php echo strtr($_smarty_tpl->tpl_vars['item']->value['company'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
        >
        </div>
    <?php } ?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_locations/blocks/companies_catalog/vendors_map.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_locations/blocks/companies_catalog/vendors_map.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div id="vendors_map" data-ca-geomap-marker-selector=".cm-vendor-map-marker" data-ca-geomap-max-zoom="15">
</div>
<div class="hidden">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="cm-vendor-map-marker"
             data-ca-geomap-marker-lat="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['lat'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geomap-marker-lng="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['lng'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geomap-marker-url="<?php echo strtr(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['item']->value['company_id'])), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
             data-ca-geomap-marker-label="<?php echo strtr($_smarty_tpl->tpl_vars['item']->value['company'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
        >
        </div>
    <?php } ?>
</div>
<?php }?><?php }} ?>
