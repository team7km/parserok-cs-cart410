<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 20:57:41
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16631190635d053195ab14d5-33176201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06958b94f49fe5ee9adea59266229d874cc060c9' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/url.tpl',
      1 => 1560353875,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16631190635d053195ab14d5-33176201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'readonly' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d053195ac2b38_36637533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d053195ac2b38_36637533')) {function content_5d053195ac2b38_36637533($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_puny_decode')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.puny_decode.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_url'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[url]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    >
        <?php echo $_smarty_tpl->__("storefront_url");?>

    </label>
    <div class="controls">
        <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
            http://<?php echo htmlspecialchars(smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <input type="text"
                   id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   class="input-large"
                   value="<?php echo htmlspecialchars(smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
"
            />
        <?php }?>
    </div>
</div>
<?php }} ?>
