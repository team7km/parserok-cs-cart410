<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 13:17:46
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/addons/advanced_import/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3888221275d0f51cabe2360-01264635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d00baf82ab2faa7e5fcf58d4946c512f4fad35' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/addons/advanced_import/hooks/index/scripts.post.tpl',
      1 => 1561284032,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3888221275d0f51cabe2360-01264635',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f51cac1d883_06679741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f51cac1d883_06679741')) {function content_5d0f51cac1d883_06679741($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/user01/data/www/alex.parserok.pp.ua/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/user01/data/www/alex.parserok.pp.ua/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.cant_save_preset_invalid_modifiers'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/advanced_import/func.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/advanced_import/read_more.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        _.tr({
            "advanced_import.cant_save_preset_invalid_modifiers":
                "<?php echo strtr($_smarty_tpl->__("advanced_import.cant_save_preset_invalid_modifiers"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
