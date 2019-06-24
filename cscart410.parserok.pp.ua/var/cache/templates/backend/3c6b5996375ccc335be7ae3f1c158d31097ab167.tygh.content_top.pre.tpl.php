<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 19:39:04
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/help_tutorial/hooks/index/content_top.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17844018845d051f28154152-04081217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c6b5996375ccc335be7ae3f1c158d31097ab167' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/help_tutorial/hooks/index/content_top.pre.tpl',
      1 => 1560353889,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17844018845d051f28154152-04081217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d051f281842d8_13107163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d051f281842d8_13107163')) {function content_5d051f281842d8_13107163($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("Tv7AZhmLwkw","RseUfuFdctg"),'open'=>false), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("BVOLfcROTyg"),'open'=>false), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="store_import"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("cCJOoAZnCqk"),'open'=>false), 0);?>

<?php } elseif ((fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']=="companies")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("eUam0Puui3M"),'open'=>fn_allowed_for("ULTIMATE:FREE")&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=='manage'), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="index"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("5STIqzsPU9c"),'open'=>false), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="seo_rules"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("JUFXyew6lig"),'open'=>false), 0);?>

<?php }?><?php }} ?>
