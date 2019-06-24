<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 10:58:48
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/zenmall/views/zenmall/export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17423522585d05f6b8d9ac64-44652139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f4ef536c167c1762dc67a744fddc221c873b716' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/zenmall/views/zenmall/export.tpl',
      1 => 1560671830,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17423522585d05f6b8d9ac64-44652139',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d05f6b8e161a7_92630847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d05f6b8e161a7_92630847')) {function content_5d05f6b8e161a7_92630847($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('zenmall_export_start_title','zenmall_export_start_description','zenmall_export_start_button','zenmall_export_start_info','zenmall_export_sync_title','zenmall_export_sync_description','zenmall_export_sync_status_text_catalog_sctructure','zenmall_export_sync_info_time','zenmall_export_finish_title','zenmall_export_finish_registration','zenmall_export_finish_your_shop','zenmall_export_finish_copy_link','zenmall_export_finish_open_page','zenmall_export_finish_manage_catalog','zenmall_export_finish_in_back_office','zenmall_export_finish_insert_link','zenmall_export_finish_button_get_link','zenmall_export_finish_catalog_will_be_imported','zenmall_export_finish_recommendation'));
?>
<div id="elm_sidebar" class="sidebar">
    <div class="sidebar-wrapper">
    </div>
</div>
<div class="content ufa">
    <div class="content-wrap">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
          var zm_errors = {
            'ZENMALL_EXPORT_ERROR_CATEGORIES_NOT_FOUND'   : "<?php echo $_smarty_tpl->__('zenmall_export_error_categories_not_found');?>
",
            'ZENMALL_EXPORT_ERROR_GENERATE'               : "<?php echo $_smarty_tpl->__('zenmall_export_error_generate');?>
",
          }
        <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php echo smarty_function_script(array('src'=>"js/addons/zenmall/zeroclipboard/ZeroClipboard.js"),$_smarty_tpl);?>

        <?php echo smarty_function_script(array('src'=>"js/addons/zenmall/zenmall.js"),$_smarty_tpl);?>

        <div id="zenmall_export_wrapper" class="zenmall_OpenSans">
         <div class="zenmall_b-error">
            <span class="zenmall_b-error__message"></span>
          </div>
          <div id="zenmall-export-step1" class="zenmall_b-wrapper step">
            <div class="zenmall_wrapper">
              <a href="https://www.zenmall.ru" target="_blank" class="zenmall_logo"></a>
              <span class="zenmall_underline"></span>
              <div class="zenmall_content">
                <h2 class="zenmall_header">
                  <?php echo $_smarty_tpl->__("zenmall_export_start_title");?>
</h2>
                <p class="zenmall_text">
                  <?php echo $_smarty_tpl->__("zenmall_export_start_description");?>
</p>
              </div>
              <div class="zenmall_content">
                <a href="javascript: void 7;" onclick="ZenMallStartExport()" class="zenmall_button"><?php echo $_smarty_tpl->__("zenmall_export_start_button");?>
</a>
              </div>
              <div class="zenmall_content">
                <p class="zenmall_text zenmall_text_info">
                  <?php echo $_smarty_tpl->__("zenmall_export_start_info");?>
</p>
              </div>
            </div>
          </div>
          <div id="zenmall-export-step2" class="zenmall_b-wrapper step" style="display:none">
            <div class="zenmall_wrapper">
              <a href="https://www.zenmall.ru" target="_blank" class="zenmall_logo"></a>
              <span class="zenmall_underline"></span>
              <div class="zenmall_content">
                <h2 class="zenmall_header">
                  <?php echo $_smarty_tpl->__("zenmall_export_sync_title");?>
</h2>
                <p class="zenmall_text">
                  <?php echo $_smarty_tpl->__("zenmall_export_sync_description");?>
</p>
              </div>
              <div class="zenmall_content">
                <div class="zenmall_text zenmall_text_progress"><?php echo $_smarty_tpl->__("zenmall_export_sync_status_text_catalog_sctructure");?>
</div>
              </div>
              <div class="zenmall_content">
                <p class="zenmall_text zenmall_text_info">
                  <?php echo $_smarty_tpl->__("zenmall_export_sync_info_time");?>
</p>
              </div>
            </div>
          </div>
          <div id="zenmall-export-step3" class="zenmall_b-wrapper step" style="display:none">
            <div class="zenmall_wrapper">
              <a href="https://www.zenmall.ru" target="_blank" class="zenmall_logo"></a>
              <span class="zenmall_underline"></span>
              <div class="zenmall_content">
                <h2 class="zenmall_header">
                  <?php echo $_smarty_tpl->__("zenmall_export_finish_title");?>
</h2>
                <ol class="zenmall_text zenmall_text_listing">
                  <li>
                    <a href="javascript: void 7;" target="_blank" class="zenmall_text zenmall_text_link zenmall_reg_link"><?php echo $_smarty_tpl->__("zenmall_export_finish_registration");?>
</a> <?php echo $_smarty_tpl->__("zenmall_export_finish_your_shop");?>
</li>
                  <li>
                    <?php echo $_smarty_tpl->__("zenmall_export_finish_copy_link");?>
</li>
                  <li>
                    <?php echo $_smarty_tpl->__("zenmall_export_finish_open_page");?>
<a href="javascript: void 7;" target="_blank" class="zenmall_text zenmall_text_link zenmall_manage_link"><?php echo $_smarty_tpl->__("zenmall_export_finish_manage_catalog");?>
</a> <?php echo $_smarty_tpl->__("zenmall_export_finish_in_back_office");?>
</li>
                  <li>
                    <?php echo $_smarty_tpl->__("zenmall_export_finish_insert_link");?>
</li>
                </ol>
              </div>
              <div class="zenmall_content">
                <div class="zenmall_text zenmall_text_hyperlink"></div>
              </div>
              <div class="zenmall_content">
                <a href="javascript: void 7;" class="zenmall_button zenmall_copy_link"><?php echo $_smarty_tpl->__("zenmall_export_finish_button_get_link");?>
</a>
              </div>
              <div class="zenmall_content">
                <p class="zenmall_text zenmall_text_info">
                  <?php echo $_smarty_tpl->__("zenmall_export_finish_catalog_will_be_imported");?>
</p>
              </div>
              <div class="zenmall_content">
                <p class="zenmall_text zenmall_text_info">
                  <?php echo $_smarty_tpl->__("zenmall_export_finish_recommendation");?>
</p>
              </div>
            </div>
          </div>
        </div>
        
        
    </div>
</div>

<?php }} ?>
