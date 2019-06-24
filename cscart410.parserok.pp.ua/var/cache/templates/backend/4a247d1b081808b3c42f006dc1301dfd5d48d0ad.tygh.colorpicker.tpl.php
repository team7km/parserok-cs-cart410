<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 18:32:27
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8796056675d06610ba11783-50646726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a247d1b081808b3c42f006dc1301dfd5d48d0ad' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/colorpicker.tpl',
      1 => 1560353830,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8796056675d06610ba11783-50646726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_meta' => 0,
    'cp_attrs' => 0,
    'cp_name' => 0,
    'cp_id' => 0,
    'cp_value' => 0,
    'show_picker' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d06610ba31630_96840085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d06610ba31630_96840085')) {function content_5d06610ba31630_96840085($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.render_tag_attrs.php';
?><div class="colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo smarty_modifier_render_tag_attrs((($tmp = @$_smarty_tpl->tpl_vars['cp_attrs']->value)===null||$tmp==='' ? array() : $tmp));?>
>
    <input
        type="text"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['show_picker']->value) {?>data-ca-spectrum-show-initial="true"<?php } else { ?>data-ca-view="palette"<?php }?>
        class="cm-colorpicker"
    >
</div><?php }} ?>
