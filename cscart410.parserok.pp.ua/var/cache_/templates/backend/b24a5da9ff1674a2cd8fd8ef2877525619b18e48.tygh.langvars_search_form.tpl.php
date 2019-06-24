<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 20:37:27
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/languages/components/langvars_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13839162495d0289d7347130-29833115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b24a5da9ff1674a2cd8fd8ef2877525619b18e48' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/languages/components/langvars_search_form.tpl',
      1 => 1560353869,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13839162495d0289d7347130-29833115',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0289d739cce7_22610210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0289d739cce7_22610210')) {function content_5d0289d739cce7_22610210($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','search_for_pattern'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="langvars_search_form" method="get">

<div class="sidebar-field">
	<label><?php echo $_smarty_tpl->__("search_for_pattern");?>
</label>
	<input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text" />
</div>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.translations]"), 0);?>

</form>

</div><?php }} ?>
