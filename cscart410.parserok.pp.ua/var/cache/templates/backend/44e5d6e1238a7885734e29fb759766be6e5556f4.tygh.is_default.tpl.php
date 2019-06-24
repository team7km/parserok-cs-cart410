<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 20:57:41
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/is_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21190468015d053195ac9b53-65832611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44e5d6e1238a7885734e29fb759766be6e5556f4' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/is_default.tpl',
      1 => 1560353874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21190468015d053195ac9b53-65832611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'is_default' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d053195ad43d1_67809108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d053195ad43d1_67809108')) {function content_5d053195ad43d1_67809108($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('is_default_storefront'));
?>

<div class="control-group">
    <label for="is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("is_default_storefront");?>

    </label>
    <div class="controls" id="is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <input type="checkbox"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['is_default']->value) {?>checked<?php }?>
        />
    </div>
</div>
<?php }} ?>
