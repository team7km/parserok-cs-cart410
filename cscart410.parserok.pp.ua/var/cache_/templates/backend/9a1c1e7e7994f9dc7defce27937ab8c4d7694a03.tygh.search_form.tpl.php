<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 16:34:00
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/seo/views/seo_redirects/components/search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3758753205d0250c89b7408-35741080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a1c1e7e7994f9dc7defce27937ab8c4d7694a03' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/seo/views/seo_redirects/components/search_form.tpl',
      1 => 1560353921,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3758753205d0250c89b7408-35741080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'seo_vars' => 0,
    'seo_var' => 0,
    'var_type' => 0,
    'addons' => 0,
    'languages' => 0,
    'lng' => 0,
    'dispatch' => 0,
    'in_popup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0250c89fd851_51953508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0250c89fd851_51953508')) {function content_5d0250c89fd851_51953508($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sizeof')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.sizeof.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','seo.old_url','type','language'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="seo_redirects_search_form" method="get">
<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("seo.old_url");?>
</label>
    <input type="text" name="src" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['src'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text" />
</div>

<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("type");?>
</label>
    <select name="type">
    <option value="">--</option>
    <?php  $_smarty_tpl->tpl_vars["seo_var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["seo_var"]->_loop = false;
 $_smarty_tpl->tpl_vars["var_type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["seo_var"]->key => $_smarty_tpl->tpl_vars["seo_var"]->value) {
$_smarty_tpl->tpl_vars["seo_var"]->_loop = true;
 $_smarty_tpl->tpl_vars["var_type"]->value = $_smarty_tpl->tpl_vars["seo_var"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['seo_var']->value['picker']||$_smarty_tpl->tpl_vars['var_type']->value=="s") {?>
    <option <?php if ($_smarty_tpl->tpl_vars['var_type']->value==$_smarty_tpl->tpl_vars['search']->value['type']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['seo_var']->value['name']);?>
</option>
    <?php }?>
    <?php } ?>
    </select>    
</div>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['seo']['single_url']!="Y"&&smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("language");?>
</label>
    <select name="lang_code">
    <option value="">--</option>
    <?php  $_smarty_tpl->tpl_vars['lng'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lng']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lng']->key => $_smarty_tpl->tpl_vars['lng']->value) {
$_smarty_tpl->tpl_vars['lng']->_loop = true;
?>
    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lng']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['lang_code']==$_smarty_tpl->tpl_vars['lng']->value['lang_code']) {?>selected="selected"<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lng']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
    <?php } ?>
    </select>
</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"seo_redirects",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0);?>


</form>
</div><?php }} ?>
