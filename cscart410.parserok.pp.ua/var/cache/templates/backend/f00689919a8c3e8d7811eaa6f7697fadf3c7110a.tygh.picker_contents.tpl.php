<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 12:04:16
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/pickers/categories/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17113822405d0606104aff54-86450944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f00689919a8c3e8d7811eaa6f7697fadf3c7110a' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/pickers/categories/picker_contents.tpl',
      1 => 1560353845,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17113822405d0606104aff54-86450944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
    'form_id' => 0,
    'categories_tree' => 0,
    'category_id' => 0,
    'direction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0606105b8546_09625426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0606105b8546_09625426')) {function content_5d0606105b8546_09625426($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','no_categories_available','manage_categories','tip.quick_select_and_close_category_selector','choose','add_categories'));
?>
<?php if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("right", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("left", null, 0);?>
<?php }?>

<?php ob_start();
echo htmlspecialchars(rand(0,1024), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['form_id'] = new Smarty_variable("cat_form_".$_tmp1, null, 0);?>

<?php if (!$_REQUEST['extra']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    var display_type = '<?php echo strtr($_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';

    $.ceEvent('on', 'ce.formpost_categories_form', function(frm, elm) {
        var categories = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                if (display_type != 'radio') {
                    categories[id] = {
                        category: $('#category_' + id).text(),
                        path_items: ''
                    };
                    var parent = $(this).closest('.table-tree').parent().prev('.table-tree');
                    while (parent.length > 0) {
                        var path_id = $('.cm-item', parent).first().val();
                        if (path_id) {
                            var path_name = $('#category_' + path_id).text();
                            categories[id]['path_items'] =
                                '<a class="ty-breadcrumbs__a" target="_blank" href="<?php echo htmlspecialchars(fn_url("categories.update&category_id="), ENT_QUOTES, 'UTF-8');?>
'+path_id+'">'+path_name+'</a> / ' +
                                    categories[id]['path_items'];
                        }
                        parent = parent.parent().prev('.table-tree');
                    }
                }
                else {
                    categories[id] = $('#category_' + id).text()
                }
            });

            if (display_type != 'radio') {
                
                $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                    '{category_id}': '%id',
                    '{category}': '%item.category',
                    '{path_items}': '%item.path_items'
                });
                
            } else {
                
                $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                    '{category_id}': '%id',
                    '{category}': '%item'
                });
                
            }


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

    $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('click', '.cm-click-and-close', function (e) {
        if (e.metaKey || e.ctrlKey) {
            let { caTargetCheckbox } = $(this).data();

            if (caTargetCheckbox && !$(caTargetCheckbox).is(e.target)) {
                let _target = $(caTargetCheckbox);
                _target.prop('checked', !_target.prop('checked'));
            }

            setTimeout(() => $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
 .cm-process-items.cm-dialog-closer').click(), 300);

            if (caTargetCheckbox && !$(caTargetCheckbox).is(e.target)) {
                e.preventDefault();
                return false;
            }
        }
    });

    $.ceEvent('on', 'ce.commoninit', function (context) {
        const { href } = location;

        if (!/dispatch\=products\.[update,manage]/.test(location.href)) {
            $('.quick-select-protip', context).hide();
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<form id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="categories_form">

<div class="items-container multi-level">
    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_tree_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('header'=>true,'checkbox_name'=>(($tmp = @$_REQUEST['checkbox_name'])===null||$tmp==='' ? "categories_ids" : $tmp),'parent_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'display'=>$_REQUEST['display'],'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0);?>

    <?php } else { ?>
        <p class="no-items center">
            <?php echo $_smarty_tpl->__("no_categories_available");?>

            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <a href="<?php echo htmlspecialchars(fn_url("categories.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("manage_categories");?>
.</a>
            <?php }?>
        </p>
    <?php }?>

    <br />
    <p class="text-center mobile-hide quick-select-protip"><?php echo $_smarty_tpl->__("tip.quick_select_and_close_category_selector");?>
</p>
</div>

<div class="buttons-container buttons-container--hidden-cancel">
    <?php if ($_REQUEST['display']=="radio") {?>
        <?php $_smarty_tpl->tpl_vars['but_close_text'] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['but_close_text'] = new Smarty_variable($_smarty_tpl->__("add_categories"), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>

</form>
<?php }} ?>
