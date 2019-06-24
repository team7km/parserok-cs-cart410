<?php /* Smarty version Smarty-3.1.21, created on 2019-06-12 18:55:12
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16525035655d012060cd8a55-97997913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1598ce273a28a87fa707109bbdb0e42a433e30e8' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/comet.tpl',
      1 => 1560353830,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16525035655d012060cd8a55-97997913',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d012060cdd0c0_65219004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d012060cdd0c0_65219004')) {function content_5d012060cdd0c0_65219004($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
