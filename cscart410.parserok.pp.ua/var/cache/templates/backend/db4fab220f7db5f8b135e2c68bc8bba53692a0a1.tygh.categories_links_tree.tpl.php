<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 12:04:42
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/categories/components/categories_links_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20485977215d06062ad9a549-47587371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4fab220f7db5f8b135e2c68bc8bba53692a0a1' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/categories/components/categories_links_tree.tpl',
      1 => 1560353867,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20485977215d06062ad9a549-47587371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories_tree' => 0,
    'category' => 0,
    'category_data' => 0,
    'runtime' => 0,
    'direction' => 0,
    'shift' => 0,
    'comb_id' => 0,
    'expanded' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d06062aea79f4_09830862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d06062aea79f4_09830862')) {function content_5d06062aea79f4_09830862($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items'));
?>
<ul>
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['shift'] = new Smarty_variable(14*(($tmp = @$_smarty_tpl->tpl_vars['category']->value['level'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("category_subtitle", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['company_categories']) {?>
            <?php $_smarty_tpl->tpl_vars['expanded'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['company_id']==$_smarty_tpl->tpl_vars['category_data']->value['company_id'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['comb_id'] = new Smarty_variable("comp_".((string)$_smarty_tpl->tpl_vars['category']->value['company_id']), null, 0);?>
            <strong class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['expanded'] = new Smarty_variable(smarty_modifier_in_array($_smarty_tpl->tpl_vars['category']->value['category_id'],$_smarty_tpl->tpl_vars['runtime']->value['active_category_ids']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['comb_id'] = new Smarty_variable("cat_".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']), null, 0);?>
            <?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['category']->value['disabled']) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <a class="row-status <?php if ($_smarty_tpl->tpl_vars['category']->value['status']=="N") {?> manage-root-item-disabled<?php }
if (!$_smarty_tpl->tpl_vars['category']->value['subcategories']) {?> normal<?php }?>" href="<?php echo htmlspecialchars(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['category']->value['subcategories']) {?> style="padding-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: 14px;"<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php }?>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <li <?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>class="active"<?php }?> style="padding-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;">
    <div class="link"><?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']) {?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if ($_smarty_tpl->tpl_vars['expanded']->value) {?> hidden<?php }?>" ><span class="icon-caret-right"> </span></span><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if (!$_smarty_tpl->tpl_vars['expanded']->value) {?> hidden<?php }?>" ><span class="icon-caret-down"> </span></span><?php }
echo Smarty::$_smarty_vars['capture']['category_subtitle'];?>
</div>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']) {?>
        <li class="<?php if (!$_smarty_tpl->tpl_vars['expanded']->value) {?> hidden<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_links_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories_tree'=>$_smarty_tpl->tpl_vars['category']->value['subcategories'],'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0);?>

            <?php }?>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
--></li>
    <?php }?>
<?php } ?>
</ul><?php }} ?>
