<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 20:51:06
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/pickers/companies/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1014941125d028d0a885647-46626221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaedbe82622f0928d0460ab3cec413e851cca896' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/pickers/companies/picker_contents.tpl',
      1 => 1560353846,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1014941125d028d0a885647-46626221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'companies' => 0,
    'company' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d028d0a94b9c1_08959162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d028d0a94b9c1_08959162')) {function content_5d028d0a94b9c1_08959162($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','id','name','email','registered','active','id','name','email','registered','active','disable','active','no_data','no_data','choose','add_companies_and_close','add_companies'));
?>
<?php if (!$_REQUEST['extra']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {

    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    var display_type = '<?php echo strtr($_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';

    $.ceEvent('on', 'ce.formpost_companies_form', function(frm, elm) {
        var companies = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                companies[id] = $('#company_' + id).text();
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), companies, 'm', {
                '{company_id}': '%id',
                '{company}': '%item'
            });
            

            if (display_type != 'radio') {
                $.ceNotification('show', {
                    type: 'N', 
                    title: _.tr('notice'), 
                    message: _.tr('text_items_added'), 
                    message_state: 'I'
                });
            }
        }

        return false;        
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/companies_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"companies.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true), 0);?>


<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="companies_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table-responsive">
    <thead>
    <tr>
        <th width="1%" class="center">
            <?php if ($_REQUEST['display']!="radio") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
            <?php }?>
        <th><?php echo $_smarty_tpl->__("id");?>
</th>
        <th><?php echo $_smarty_tpl->__("name");?>
</th>
        <?php if (!fn_allowed_for("ULTIMATE")) {?>
            <th><?php echo $_smarty_tpl->__("email");?>
</th>
        <?php }?>
        <th><?php echo $_smarty_tpl->__("registered");?>
</th>
        <?php if (!fn_allowed_for("ULTIMATE")) {?>
            <th class="right"><?php echo $_smarty_tpl->__("active");?>
</th>
        <?php }?>
    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
    <tr>
        <td class="center" data-th="">
            <?php if ($_REQUEST['display']=="radio") {?>
            <input type="radio" name="<?php echo htmlspecialchars((($tmp = @$_REQUEST['checkbox_name'])===null||$tmp==='' ? "companies_ids" : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="radio" />
            <?php } else { ?>
            <input type="checkbox" name="<?php echo htmlspecialchars((($tmp = @$_REQUEST['checkbox_name'])===null||$tmp==='' ? "companies_ids" : $tmp), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" />
            <?php }?>
        </td>
        <td data-th="<?php echo $_smarty_tpl->__("id");?>
"><a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
">&nbsp;<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;</a></td>
        <td data-th="<?php echo $_smarty_tpl->__("name");?>
"><a id="company_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company'], ENT_QUOTES, 'UTF-8');?>
</a></td>
        <?php if (!fn_allowed_for("ULTIMATE")) {?>
            <td data-th="<?php echo $_smarty_tpl->__("email");?>
"><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></td>
        <?php }?>
        <td data-th="<?php echo $_smarty_tpl->__("registered");?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['company']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
        <?php if (!fn_allowed_for("ULTIMATE")) {?>
            <td class="right" data-th="<?php echo $_smarty_tpl->__("active");?>
"><?php if ($_smarty_tpl->tpl_vars['company']->value['status']!="A") {
echo $_smarty_tpl->__("disable");
} else {
echo $_smarty_tpl->__("active");
}?></td>
        <?php }?>
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['company']->_loop) {
?>
    <tr class="no-items">
        <?php if (!fn_allowed_for("ULTIMATE")) {?>
            <td colspan="6"><p><?php echo $_smarty_tpl->__("no_data");?>
</p></td>
        <?php } else { ?>
            <td colspan="4"><p><?php echo $_smarty_tpl->__("no_data");?>
</p></td>
        <?php }?>
    </tr>
    <?php } ?>
    </table>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<div class="buttons-container">
    <?php if ($_REQUEST['display']=="radio") {?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("add_companies_and_close"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable($_smarty_tpl->__("add_companies"), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>

</form>
<?php }} ?>
