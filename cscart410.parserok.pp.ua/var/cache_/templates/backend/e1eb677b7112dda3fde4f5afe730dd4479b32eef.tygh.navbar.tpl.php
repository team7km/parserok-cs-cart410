<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 17:01:12
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/components/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14006542215d025728bd9c60-68357755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1eb677b7112dda3fde4f5afe730dd4479b32eef' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/components/navbar.tpl',
      1 => 1560353863,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14006542215d025728bd9c60-68357755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
    'config_data' => 0,
    'color' => 0,
    'col_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d025728c01de5_23299812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d025728c01de5_23299812')) {function content_5d025728c01de5_23299812($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.section.navbar'));
?>
<div class="span16 mockup__mockups-container">
    <div class="span4 mockup">
        <div class="mockup__container">
            <div class="mockup__status-bar drawerBgColor__background">

                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/status_bar_example.png">

            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/mobile_app/components/atoms/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <div 
                class="mockup__body body mockup__category screenBackgroundColor__background"
                style="min-height: calc(100% - 65px); max-height: calc(100% - 65px);"
            >

            </div>

        </div>
    </div>

    <div class="span8">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("mobile_app.section.navbar")), 0);?>


        <?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_smarty_tpl->tpl_vars['col_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config_data']->value['app_appearance']['colors']['navbar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->_loop = true;
 $_smarty_tpl->tpl_vars['col_name']->value = $_smarty_tpl->tpl_vars['color']->key;
?>
        <div class="control-group">
            <label class="control-label" for=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->tpl_vars['color']->value['description']), 0);?>
: </label>
            <div class="controls">
                <div class="colorpicker">
                    <input <?php if ($_smarty_tpl->tpl_vars['color']->value['type']!="number") {?>type="text"<?php } else { ?>type="number"<?php }?> 
                        data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_name']->value, ENT_QUOTES, 'UTF-8');?>
" 
                        <?php if ($_smarty_tpl->tpl_vars['color']->value['type']=="color"||$_smarty_tpl->tpl_vars['color']->value['type']=="rgba") {?>
                            data-ca-spectrum-show-alpha="true"
                        <?php }?>
                        name="m_settings[app_appearance][colors][navbar][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_name']->value, ENT_QUOTES, 'UTF-8');?>
]"
                        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_name']->value, ENT_QUOTES, 'UTF-8');?>
" 
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['value'], ENT_QUOTES, 'UTF-8');?>
" 
                        <?php if ($_smarty_tpl->tpl_vars['color']->value['type']=="color"||$_smarty_tpl->tpl_vars['color']->value['type']=="rgba") {?>
                            class="js-mobile-app-input cm-colorpicker"
                        <?php } else { ?>
                            class="js-mobile-app-input"
                        <?php }?>
                    />
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div><?php }} ?>
