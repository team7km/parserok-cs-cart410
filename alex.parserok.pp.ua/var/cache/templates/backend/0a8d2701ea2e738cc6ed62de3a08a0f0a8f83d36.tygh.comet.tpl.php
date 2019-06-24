<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 13:17:46
         compiled from "/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6136274305d0f51ca404988-51573029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a8d2701ea2e738cc6ed62de3a08a0f0a8f83d36' => 
    array (
      0 => '/var/www/user01/data/www/alex.parserok.pp.ua/design/backend/templates/common/comet.tpl',
      1 => 1561283977,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6136274305d0f51ca404988-51573029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f51ca40ae70_40003714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f51ca40ae70_40003714')) {function content_5d0f51ca40ae70_40003714($_smarty_tpl) {?><?php
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
