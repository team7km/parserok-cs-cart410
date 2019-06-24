<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 20:57:41
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7112231645d053195b36217-10885618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c08a0693a886cf5c4e5bc9d163d23c3f2570d95' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/languages.tpl',
      1 => 1560353874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7112231645d053195b36217-10885618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'selected_languages' => 0,
    'all_languages' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d053195b56894_06988773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d053195b56894_06988773')) {function content_5d053195b56894_06988773($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('languages','all_languages'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[language_ids][]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required cm-multiple-checkboxes"
    >
        <?php echo $_smarty_tpl->__("languages");?>

    </label>
    <div class="controls" id="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="cm-combo-checkbox-group">
            <input type="hidden"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value=""
            />

            <label class="checkbox"
                   for="language_all_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            >
                <input type="checkbox"
                       class="cm-checkbox-group"
                       data-ca-checkbox-group-role="toggler"
                       data-ca-checkbox-group="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       id="language_all_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['selected_languages']->value===array()) {?>
                            checked
                            disabled
                        <?php }?>
                />
                <?php echo $_smarty_tpl->__("all_languages");?>

            </label>

            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                <label class="checkbox"
                       for="language_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                >
                    <input type="checkbox"
                           class="cm-checkbox-group"
                           data-ca-checkbox-group-role="togglee"
                           data-ca-checkbox-group="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                           name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
"
                           id="language_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                           <?php if (in_array($_smarty_tpl->tpl_vars['language']->value['lang_id'],$_smarty_tpl->tpl_vars['selected_languages']->value)) {?>checked<?php }?>
                    />

                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </label>
            <?php } ?>
        </div>
    </div>
</div>
<?php }} ?>
