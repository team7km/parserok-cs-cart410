<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 12:04:16
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_plans/hooks/categories/tree_simple_tr.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15123456545d0606107c6109-26075596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '665c8f9cb262e43d9c25638a69c3531e07b1f040' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/vendor_plans/hooks/categories/tree_simple_tr.override.tpl',
      1 => 1560353908,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15123456545d0606107c6109-26075596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cur_cat' => 0,
    'category' => 0,
    'level' => 0,
    'shift' => 0,
    'direction' => 0,
    '_shift' => 0,
    'show_all' => 0,
    'comb_id' => 0,
    'cat_id' => 0,
    'path' => 0,
    'expand_all' => 0,
    'except_id' => 0,
    'random' => 0,
    'display' => 0,
    'checkbox_name' => 0,
    '_except_id' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d06061082daf1_54398077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d06061082daf1_54398077')) {function content_5d06061082daf1_54398077($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','disabled'));
?>
<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['disabled']) {?>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['level']>0) {?> multiple-table-row <?php }?>cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['category']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"shift"),$_smarty_tpl);?>

        <td width="<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['level']>0) {?>4%<?php } else { ?>1%<?php }?>">&nbsp;</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
                <?php echo smarty_function_math(array('equation'=>"x+10",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo smarty_function_math(array('equation'=>"x+21",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

            <?php }?>
            <span class="nowrap" style="padding-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_shift']->value, ENT_QUOTES, 'UTF-8');?>
px;">
            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
                <?php if ($_smarty_tpl->tpl_vars['show_all']->value) {?>
                    <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if (isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])||$_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"><span class="icon-caret-right"></span></span>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['except_id']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["_except_id"] = new Smarty_variable("&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value), null, 0);?>
                    <?php }?>
                    <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if ((isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value]))) {?>hidden<?php }?>" onclick="if (!$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
').children().length) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.picker?category_id=".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id'])."&random=".((string)$_smarty_tpl->tpl_vars['random']->value)."&display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value).((string)$_smarty_tpl->tpl_vars['_except_id']->value));?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)"><span class="icon-caret-right"> </span></span>
                <?php }?>
                <span title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if (!isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])&&(!$_smarty_tpl->tpl_vars['expand_all']->value||!$_smarty_tpl->tpl_vars['show_all']->value)) {?>hidden<?php }?>"><span class="icon-caret-down"></span></span>
            <?php }?>
            <span id="category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['status']=="N") {?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?>
            </span>
        </td>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <td class="right">&nbsp;</td>
        <?php }?>
    </tr>
<?php }?>
<?php }} ?>
