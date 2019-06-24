<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 20:57:41
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18954090375d053195ada503-52794561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9532a233426ad7aa1559803df5892bef7752a3e6' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/storefronts/components/status.tpl',
      1 => 1560353875,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18954090375d053195ada503-52794561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d053195aee5e8_83257015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d053195aee5e8_83257015')) {function content_5d053195aee5e8_83257015($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_status','ttc_stores_status','storefront_status.tooltip'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[status]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("storefront_status");?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_stores_status")), 0);?>

    </label>
    <div class="controls">
        <input type="hidden"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
"
        />

        <?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('checked'=>$_smarty_tpl->tpl_vars['status']->value===smarty_modifier_enum("StorefrontStatuses::OPEN"),'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value),'input_value'=>smarty_modifier_enum("StorefrontStatuses::OPEN"),'input_id'=>"status_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>


        <p>
            <?php echo $_smarty_tpl->__("storefront_status.tooltip");?>

        </p>
    </div>
</div>
<?php }} ?>
