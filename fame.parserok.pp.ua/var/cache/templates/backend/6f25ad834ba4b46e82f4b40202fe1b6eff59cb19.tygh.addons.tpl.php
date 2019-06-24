<?php /* Smarty version Smarty-3.1.21, created on 2019-06-23 15:15:40
         compiled from "/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/views/settings_wizard/components/addons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9217589075d0f6d6c2e89f6-72600688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f25ad834ba4b46e82f4b40202fe1b6eff59cb19' => 
    array (
      0 => '/var/www/user01/data/www/fame.parserok.pp.ua/design/backend/templates/views/settings_wizard/components/addons.tpl',
      1 => 1561288226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9217589075d0f6d6c2e89f6-72600688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wizard_addons_list' => 0,
    'addon' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0f6d6c357f65_52794816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0f6d6c357f65_52794816')) {function content_5d0f6d6c357f65_52794816($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('install'));
?>
<?php  $_smarty_tpl->tpl_vars["addon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["addon"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wizard_addons_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["addon"]->key => $_smarty_tpl->tpl_vars["addon"]->value) {
$_smarty_tpl->tpl_vars["addon"]->_loop = true;
?>
	<div class="table-wrapper">
		<table class="table table-addons table-wizard">
		    <tr>
		        <td class="addon-icon">
		            <div class="bg-icon">
		                <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_icon']) {?>
		                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
/icon.png" width="38" height="38" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" >
		                <?php }?>
		            </div>
		        </td>
		        <td width="95%">
		            <div class="object-group-link-wrap">
		                <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
		                <span class="row-status object-group-details"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
		            </div>
		        </td>
		        <td width="5%">
		            <input type="hidden" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="N">
		            <label for="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
		                <input id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="Y">
		                <?php echo $_smarty_tpl->__("install");?>

		            </label>     
		        </td>
		    </tr>
		</table>
	</div>
<?php } ?><?php }} ?>
