<?php /* Smarty version Smarty-3.1.21, created on 2019-06-22 17:34:13
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/countries/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15939525845d0e3c65055621-21451349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36a761e22b1ea60f1648d199721f0f2db4375229' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/countries/manage.tpl',
      1 => 1560353849,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15939525845d0e3c65055621-21451349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'countries' => 0,
    'country' => 0,
    'has_permission' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0e3c650fafb4_14755821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0e3c650fafb4_14755821')) {function content_5d0e3c650fafb4_14755821($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('code','code','code','country','region','status','code','code','code','country','region','status','countries'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="countries_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>

<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table-responsive">
    <thead>
    <tr>
        <th class="left"><?php echo $_smarty_tpl->__("code");?>
</th>
        <th class="center"><?php echo $_smarty_tpl->__("code");?>
&nbsp;A3</th>
        <th class="center"><?php echo $_smarty_tpl->__("code");?>
&nbsp;N3</th>
        <th><?php echo $_smarty_tpl->__("country");?>
</th>
        <th class="center"><?php echo $_smarty_tpl->__("region");?>
</th>
        <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
    <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['country']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
    
        <td class="center row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>

        </td>
        <td class="center row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
&nbsp;A3">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code_A3'], ENT_QUOTES, 'UTF-8');?>

        </td>
        <td class="center row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
&nbsp;N3">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code_N3'], ENT_QUOTES, 'UTF-8');?>

        </td>
        <td data-th="<?php echo $_smarty_tpl->__("country");?>
"> 
            <input type="text" name="country_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>
][country]" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['country'], ENT_QUOTES, 'UTF-8');?>
" class="span4 input-hidden" />
        </td>
        <td class="center row-status" data-th="<?php echo $_smarty_tpl->__("region");?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['region'], ENT_QUOTES, 'UTF-8');?>

        </td>
        <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions("tools","update_status","admin","GET",array("table"=>"countries")), null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['country']->value['code'],'status'=>$_smarty_tpl->tpl_vars['country']->value['status'],'hidden'=>'','object_id_name'=>"code",'table'=>"countries",'non_editable'=>!$_smarty_tpl->tpl_vars['has_permission']->value), 0);?>

        </td>
    </tr>
    <?php } ?>
    </table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[countries.m_update]",'but_role'=>"submit-link",'but_target_form'=>"countries_form"), 0);?>



    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
 

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("countries"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
