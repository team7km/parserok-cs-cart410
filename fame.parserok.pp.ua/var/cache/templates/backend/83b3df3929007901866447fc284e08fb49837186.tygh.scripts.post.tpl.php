<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 15:12:34
         compiled from "/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/addons/tags/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4433052905d0f6cb21c2473-09850797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b3df3929007901866447fc284e08fb49837186' => 
    array (
      0 => '/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/addons/tags/hooks/index/scripts.post.tpl',
      1 => 1561288270,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4433052905d0f6cb21c2473-09850797',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f6cb21d6476_76704207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f6cb21d6476_76704207')) {function content_5d0f6cb21d6476_76704207($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/user01/data/www/fame.parserok.pp.ua/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('addons.tags.add_a_tag'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    _.tr({
		addons_tags_add_a_tag: '<?php echo strtr($_smarty_tpl->__("addons.tags.add_a_tag"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
