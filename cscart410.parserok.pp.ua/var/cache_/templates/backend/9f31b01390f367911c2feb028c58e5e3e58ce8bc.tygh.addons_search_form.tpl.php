<?php /* Smarty version Smarty-3.1.21, created on 2019-06-12 19:06:06
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/addons/components/addons_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8374337265d0122ee7705a5-02152381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f31b01390f367911c2feb028c58e5e3e58ce8bc' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/views/addons/components/addons_search_form.tpl',
      1 => 1560353865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8374337265d0122ee7705a5-02152381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'extra' => 0,
    'search' => 0,
    'hide_for_vendor' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0122ee7b24f3_20278066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0122ee7b24f3_20278066')) {function content_5d0122ee7b24f3_20278066($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','name','remove','status','any','not_installed','installed','active','disabled','addons_source','any','addon_built_in','addon_third_party','search'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
 addons-search-form">
        <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

        
        <div class="sidebar-field ">
            <label for="elm_addon"><?php echo $_smarty_tpl->__("name");?>
</label>
            <input type="text" name="q" id="elm_addon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" size="30" autofocus />
            <i class="icon icon-remove hidden" id="elm_addon_clear" title="<?php echo $_smarty_tpl->__("remove");?>
"></i>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <div class="sidebar-field">
            <label for="elm_addon_status"><?php echo $_smarty_tpl->__("status");?>
</label>

            <select id="elm_addon_status" name="type">
                <option value="any" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['type'])||$_smarty_tpl->tpl_vars['search']->value['type']=='any') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                <option value="not_installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='not_installed') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("not_installed");?>
</option>
                <option value="installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='installed') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("installed");?>
</option>
                <option value="active" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='active') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                <option value="disabled" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='disabled') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        </div>
        <div class="sidebar-field">
            <label for="elm_addon_source"><?php echo $_smarty_tpl->__("addons_source");?>
</label>
            <select id="elm_addon_source" name="source">
                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['source'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                <option value="core" <?php if ($_smarty_tpl->tpl_vars['search']->value['source']=='core') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("addon_built_in");?>
</option>
                <option value="third_party" <?php if ($_smarty_tpl->tpl_vars['search']->value['source']=='third_party') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("addon_third_party");?>
</option>
            </select>
        </div>
        <?php }?>

        <div class="sidebar-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("search");?>
">
        </div>
    </form>
</div><?php }} ?>
