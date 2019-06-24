<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 15:12:34
         compiled from "/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/addons/geo_maps/components/scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17243371365d0f6cb2202e47-69333018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0f83a8d0729f16b74709f0dbf03d6e5b4e789d' => 
    array (
      0 => '/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/addons/geo_maps/components/scripts.tpl',
      1 => 1561288212,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17243371365d0f6cb2202e47-69333018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'provider' => 0,
    'api_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f6cb2249f93_93264704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f6cb2249f93_93264704')) {function content_5d0f6cb2249f93_93264704($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/user01/data/www/fame.parserok.pp.ua/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/user01/data/www/fame.parserok.pp.ua/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','geo_maps.cannot_select_location'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/maps.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/code.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/locate.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['provider'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['provider']->value=="yandex") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/index.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/maps.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/code.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/locate.js"),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['provider']->value=="google") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/index.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/maps.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/code.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/locate.js"),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/func.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['api_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['geo_maps'][$_smarty_tpl->tpl_vars['provider']->value][((string)$_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'])."_api_key"], null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        _.geo_maps = {
            provider: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            api_key: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['api_key']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            yandex_commercial: <?php if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['yandex']['yandex_commercial']=="Y") {?>true<?php } else { ?>false<?php }?>,
            language: "<?php echo htmlspecialchars(@constant('CART_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
",
        };

        _.tr({
            geo_maps_google_search_bar_placeholder: '<?php echo strtr($_smarty_tpl->__("search"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            geo_maps_cannot_select_location: '<?php echo strtr($_smarty_tpl->__("geo_maps.cannot_select_location"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
