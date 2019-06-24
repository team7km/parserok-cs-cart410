<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 16:36:01
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/discussion/views/discussion_manager/components/stars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8795438095d025141f03b72-99826026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e675281e1552736ff8886cbeacb2899aa6d43f8b' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/discussion/views/discussion_manager/components/stars.tpl',
      1 => 1560353917,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8795438095d025141f03b72-99826026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d0251420191b5_87668740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0251420191b5_87668740')) {function content_5d0251420191b5_87668740($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['name'] = "stars_rate";
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'] = (int) "1";
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop'] = is_array($_loop="6") ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['total']);
?>
    <i class="icon-star<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['stars_rate']['index']>$_smarty_tpl->tpl_vars['stars']->value) {?>-empty<?php }?>"></i>
<?php endfor; endif; ?><?php }} ?>
