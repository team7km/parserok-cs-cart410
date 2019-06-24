<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 15:12:33
         compiled from "/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14333562335d0f6cb1c914a8-17310825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb34d6cda3f213c7e4cca1f5b355d9cc5f0b69e1' => 
    array (
      0 => '/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/common/comet.tpl',
      1 => 1561288175,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14333562335d0f6cb1c914a8-17310825',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f6cb1c973c9_46917546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f6cb1c973c9_46917546')) {function content_5d0f6cb1c973c9_46917546($_smarty_tpl) {?><?php
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
