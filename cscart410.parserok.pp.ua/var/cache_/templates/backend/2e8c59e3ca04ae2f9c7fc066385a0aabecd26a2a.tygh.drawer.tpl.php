<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 17:01:12
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/components/drawer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7454140885d025728b9e9f5-42464764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8c59e3ca04ae2f9c7fc066385a0aabecd26a2a' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/components/drawer.tpl',
      1 => 1560353863,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7454140885d025728b9e9f5-42464764',
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
  'unifunc' => 'content_5d025728bd04c7_63715521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d025728bd04c7_63715521')) {function content_5d025728bd04c7_63715521($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.section.drawer'));
?>
<div class="span16 mockup__mockups-container">
    <div class="span4 mockup">
        <div class="mockup__container">
            <div class="mockup__status-bar">

                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/status_bar_example.png">

            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/mobile_app/components/atoms/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <div 
                class="mockup__body body mockup__category screenBackgroundColor__background"
                style="min-height: calc(100% - 65px); max-height: calc(100% - 65px);"
            >

            </div>

            <div class="mockup__overlay contentOverlayColor">
            </div>

            <div class="mockup__overlay-content navigator drawerBgColor__background">
                <div class="mockup__overlay-box logo-box drawerHeaderBackgroundColor__background drawerHeaderBorderColor__border">
                    <img class="navigator__store-logo" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/logo.png"/>
                    <p class="drawerHeaderTextColor">Login | Registration</p>
                </div>

                <div class="mockup__overlay-box links-box drawerHeaderBackgroundColor__border">
                    <p class="links-box__container"><i class="fa fa-home drawerHeaderButtonColor"></i><span class="links-box__name">Home</span></p>
                    <p class="links-box__container"><i class="fa fa-cart-plus drawerHeaderButtonColor"></i><span class="links-box__name">Cart</span></p>
                </div>

                <div class="mockup__overlay-box links-box drawerHeaderBackgroundColor__border">
                    <p class="links-box__container"><span class="links-box__name">Contacts</span></p>
                    <p class="links-box__container"><span class="links-box__name">Returns and Exchanges</span></p>
                    <p class="links-box__container"><span class="links-box__name">Payment and shipping</span></p>
                </div>
            </div>

        </div>
    </div>

    <div class="span8">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("mobile_app.section.drawer")), 0);?>


        <?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_smarty_tpl->tpl_vars['col_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config_data']->value['app_appearance']['colors']['drawer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        name="m_settings[app_appearance][colors][drawer][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_name']->value, ENT_QUOTES, 'UTF-8');?>
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
