<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 21:05:00
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/advanced_import/views/import_presets/components/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20113923265d05334c85b649-12340348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45eada9d833f031e529f688c02e588380b7b084d' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/advanced_import/views/import_presets/components/form.tpl',
      1 => 1560353916,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20113923265d05334c85b649-12340348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preview_preset_id' => 0,
    'wrapper_extra_id' => 0,
    'object_type' => 0,
    'wrapper_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d05334c866216_82102796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d05334c866216_82102796')) {function content_5d05334c866216_82102796($_smarty_tpl) {?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="manage_import_presets_form"
        enctype="multipart/form-data"
        class="cm-skip-check-items import-preset <?php if ($_smarty_tpl->tpl_vars['preview_preset_id']->value) {?>cm-ajax cm-comet<?php }?>"
        data-ca-advanced-import-element="management_form"
        id="manage_import_presets_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_extra_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <?php echo $_smarty_tpl->tpl_vars['wrapper_content']->value;?>

</form><?php }} ?>
