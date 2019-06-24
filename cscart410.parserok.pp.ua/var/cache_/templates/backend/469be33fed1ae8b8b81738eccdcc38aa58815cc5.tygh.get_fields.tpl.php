<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 14:16:49
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/advanced_import/views/import_presets/get_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2691888305d04d3a132b296-39697854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '469be33fed1ae8b8b81738eccdcc38aa58815cc5' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/advanced_import/views/import_presets/get_fields.tpl',
      1 => 1560353877,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2691888305d04d3a132b296-39697854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_buttons_container' => 0,
    'allow_href' => 0,
    'fields' => 0,
    'preset' => 0,
    'allow_href_backup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d04d3a1376047_42149692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04d3a1376047_42149692')) {function content_5d04d3a1376047_42149692($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('import'));
?>
<div id="content_fields">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/fields_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_fields--></div>
<?php if ($_smarty_tpl->tpl_vars['show_buttons_container']->value) {?>
    <div class="buttons-container">
        <?php $_smarty_tpl->tpl_vars['allow_href_backup'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_href']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['allow_href'] = new Smarty_variable(true, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cancel_action'=>"close",'hide_first_button'=>!(($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? array() : $tmp),'but_text'=>$_smarty_tpl->__("import"),'but_meta'=>"cm-submit",'but_onclick'=>"$".".ceAdvancedImport('setFieldsForImport', ".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id']).")",'but_name'=>"dispatch[advanced_import.import]"), 0);?>

        <?php $_smarty_tpl->tpl_vars['allow_href'] = new Smarty_variable($_smarty_tpl->tpl_vars['allow_href_backup']->value, null, 0);?>
    </div>
<?php }?><?php }} ?>
