<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 19:46:34
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/advanced_import/views/import_presets/components/options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20395271255d0520eabea8a4-81966387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b47544384da2ce3a4553d52558a2b4613dddf4ca' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/advanced_import/views/import_presets/components/options.tpl',
      1 => 1560353916,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20395271255d0520eabea8a4-81966387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab' => 0,
    'section' => 0,
    'display' => 0,
    'options' => 0,
    'option' => 0,
    'option_id' => 0,
    'field_name_prefix' => 0,
    'variant_id' => 0,
    'variant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0520eac55624_63228399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0520eac55624_63228399')) {function content_5d0520eac55624_63228399($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['tab'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['tab']->value)===null||$tmp==='' ? "general" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['section']->value)===null||$tmp==='' ? "general" : $tmp), null, 0);?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['display']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['option_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option_id']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
        <?php if (!is_array($_smarty_tpl->tpl_vars['option']->value)||$_smarty_tpl->tpl_vars['tab']->value!=(($tmp = @$_smarty_tpl->tpl_vars['option']->value['tab'])===null||$tmp==='' ? "general" : $tmp)||$_smarty_tpl->tpl_vars['section']->value!=(($tmp = @$_smarty_tpl->tpl_vars['option']->value['section'])===null||$tmp==='' ? "general" : $tmp)||$_smarty_tpl->tpl_vars['option']->value['hidden']) {?>
            <?php continue 1;?>
        <?php }?>
        <div class="control-group<?php if ($_smarty_tpl->tpl_vars['option']->value['control_group_meta']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['control_group_meta'], ENT_QUOTES, 'UTF-8');
}?>">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label">
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['option']->value['title']);
if ($_smarty_tpl->tpl_vars['option']->value['description']) {
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['option']->value['description'],(($tmp = @$_smarty_tpl->tpl_vars['option']->value['description_params'])===null||$tmp==='' ? array() : $tmp))), 0);
}?>:
            </label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['option']->value['type']=="checkbox") {?>
                    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
                    <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                           class="checkbox"
                           type="checkbox"
                           name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                           value="Y"
                           <?php if ((($tmp = @$_smarty_tpl->tpl_vars['option']->value['selected_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] : $tmp)=="Y") {?>checked="checked"<?php }?>
                    />
                <?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=="input") {?>
                    <?php if ($_smarty_tpl->tpl_vars['option']->value['option_template']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['option']->value['option_template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>$_smarty_tpl->tpl_vars['option']->value,'field_name_prefix'=>$_smarty_tpl->tpl_vars['field_name_prefix']->value), 0);?>

                    <?php } else { ?>
                        <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                               class="input-large"
                               type="text"
                               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['option']->value['selected_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                        />
                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=="select") {?>
                    <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_smarty_tpl->tpl_vars['variant_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['variant_id']->value = $_smarty_tpl->tpl_vars['variant']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['variant_id']->value==(($tmp = @$_smarty_tpl->tpl_vars['option']->value['selected_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] : $tmp)) {?>selected="selected"<?php }?>
                            ><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['variant']->value);?>
</option>
                        <?php } ?>
                    </select>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['option']->value['notes']) {?>
                    <p class="muted"><?php echo $_smarty_tpl->tpl_vars['option']->value['notes'];?>
</p>
                <?php }?>
            </div>
        </div>
    <?php } ?>
<?php } else { ?>
    <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['option_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option_id']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
        <input type="hidden"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
               <?php if (is_array($_smarty_tpl->tpl_vars['option']->value)) {?>
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['option']->value['selected_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"
               <?php } else { ?>
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value, ENT_QUOTES, 'UTF-8');?>
"
               <?php }?>
        />
    <?php } ?>
<?php }?><?php }} ?>
