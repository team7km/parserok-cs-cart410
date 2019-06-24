<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 13:56:55
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/block_manager/widget_code.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21394529625d06207798acf1-13626625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a643200df541c0fb693740cdd68866255f11290' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/block_manager/widget_code.tpl',
      1 => 1560353848,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21394529625d06207798acf1-13626625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_https_url' => 0,
    'widget_http_url' => 0,
    'widget_layout_id' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0620779c9539_81826608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0620779c9539_81826608')) {function content_5d0620779c9539_81826608($_smarty_tpl) {?><div class="tygh" id="tygh_container">
</div>
<?php echo '<script'; ?>
 type="text/javascript" data-no-defer>
    (function() {
        var url = 'https:' == document.location.protocol ? '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_https_url']->value, ENT_QUOTES, 'UTF-8');?>
' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_http_url']->value, ENT_QUOTES, 'UTF-8');?>
';
        var cw = document.createElement('script'); cw.type = 'text/javascript'; cw.async = true;
        cw.src = '//widget.cart-services.com/static/init.js?url=' + url + '&layout=<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['widget_layout_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'] : $tmp), ENT_QUOTES, 'UTF-8');?>
';
        document.getElementById('tygh_container').appendChild(cw);
        })();
<?php echo '</script'; ?>
>
<!-- Before using a widget make sure that the
" <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> "
meta tag exists. -->
<?php }} ?>
