<?php /* Smarty version Smarty-3.1.21, created on 2019-06-16 10:56:07
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47918715d05f6173a0e28-16843992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c224e56242b940fc577ff4f0a9c64fbd6f7585b' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/common/sidebox.tpl',
      1 => 1560353831,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '47918715d05f6173a0e28-16843992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d05f6173bf4f3_53393282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d05f6173bf4f3_53393282')) {function content_5d05f6173bf4f3_53393282($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
