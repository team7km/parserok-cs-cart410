<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 17:01:12
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/components/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15988945455d025728cecb72-85819717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1c3a96e47894db93cd00f6c7ca020c927c7c79e' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/components/main.tpl',
      1 => 1560353863,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15988945455d025728cecb72-85819717',
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
  'unifunc' => 'content_5d025728d28418_10927110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d025728d28418_10927110')) {function content_5d025728d28418_10927110($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.section.main'));
?>
<div class="span16 mockup__mockups-container">
    <div class="span4 mockup">
        <div class="mockup__container">
            <div class="mockup__status-bar drawerBgColor__background">

                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/status_bar_example.png">

            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/mobile_app/components/atoms/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <div class="mockup__body body screenBackgroundColor__background mockup__category" style="min-height: calc(100% - 65px); max-height: calc(100% - 65px);">
                
                <div class="categoriesBackgroundColor__background" style="margin-left: -10px; margin-right: -10px; padding: 0 10px;">
                    <h3 class="mockup__main-heading categoriesHeaderColor">Categories</h3>

                    <div class="mockup__category-container">
                        <div class="mockup__category-item categoryBlockBackgroundColor__background categoryBorderRadius">
                            <img 
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/no_image.png" 
                                class="mockup__category-preview categoryEmptyImage__background"
                            />
                            <p class="mockup__category-name categoryBlockTextColor">Electronics</p>
                        </div>
                        <div class="mockup__category-item categoryBlockBackgroundColor__background categoryBorderRadius">
                            <img 
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/no_image.png" 
                                class="mockup__category-preview categoryEmptyImage__background"
                            />
                            <p class="mockup__category-name categoryBlockTextColor">Books</p>
                        </div>
                        <div class="mockup__category-item categoryBlockBackgroundColor__background categoryBorderRadius">
                            <img 
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/no_image.png" 
                                class="mockup__category-preview categoryEmptyImage__background"
                            />
                            <p class="mockup__category-name categoryBlockTextColor">Music</p>
                        </div>
                        <div class="mockup__category-item categoryBlockBackgroundColor__background categoryBorderRadius">
                            <img 
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/no_image.png" 
                                class="mockup__category-preview categoryEmptyImage__background"
                            />
                            <p class="mockup__category-name categoryBlockTextColor">Music</p>
                        </div>
                        <div class="mockup__category-item categoryBlockBackgroundColor__background categoryBorderRadius">
                            <img 
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/no_image.png" 
                                class="mockup__category-preview categoryEmptyImage__background"
                            />
                            <p class="mockup__category-name categoryBlockTextColor">Music</p>
                        </div>
                        <div class="mockup__category-item categoryBlockBackgroundColor__background categoryBorderRadius">
                            <img 
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/no_image.png" 
                                class="mockup__category-preview categoryEmptyImage__background"
                            />
                            <p class="mockup__category-name categoryBlockTextColor">Music</p>
                        </div>
                        <div class="mockup__category-item categoryBlockBackgroundColor__background categoryBorderRadius">
                            <img 
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/no_image.png" 
                                class="mockup__category-preview categoryEmptyImage__background"
                            />
                            <p class="mockup__category-name categoryBlockTextColor">Music</p>
                        </div>
                    </div>
                </div>

                <h4 class="mockup__second-heading categoriesHeaderColor">Main banners</h4>
                <div class="mockup__carousel-container">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/king.jpg" class="mockup__carousel-img"/>
                </div>

                <h4 class="mockup__second-heading categoriesHeaderColor">Hot deals</h4>
                <div class="mockup__carousel-container">
                    <div class="mockup__carousel-product productBorderColor__border">
                        <p class="mockup__carousel-product-badge productDiscountColor__background borderRadius">Save 17%</p>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/nokia.jpg" class="mockup__carousel-product-preview"/>
                        <p class="mockup__carousel-product-describe">
                            <span class="mockup__carousel-product-name">Apple iPad with Retina</span>
                            <span class="mockup__carousel-product-cost">$499.00</span>
                        </p>
                    </div>
                </div>

                <h4 class="mockup__second-heading categoriesHeaderColor">Sale</h4>
                <div class="mockup__carousel-container">
                    <div class="mockup__carousel-product productBorderColor__border">
                        <p class="mockup__carousel-product-badge productDiscountColor__background borderRadius">Save 17%</p>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/led.jpg" class="mockup__carousel-product-preview"/>
                        <p class="mockup__carousel-product-describe">
                            <span class="mockup__carousel-product-name">LED 8800 Series Smart TV</span>
                            <span class="mockup__carousel-product-cost">$499.00</span>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="span8">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("mobile_app.section.main")), 0);?>


        <?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_smarty_tpl->tpl_vars['col_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config_data']->value['app_appearance']['colors']['other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        name="m_settings[app_appearance][colors][other][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_name']->value, ENT_QUOTES, 'UTF-8');?>
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
