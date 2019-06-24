<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 17:01:12
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/components/product_screen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9670357755d025728c0bd97-21368503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8521f46f790abc5fc47b093d2f9c9197079eb09' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/components/product_screen.tpl',
      1 => 1560353863,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9670357755d025728c0bd97-21368503',
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
  'unifunc' => 'content_5d025728ce2a00_12619025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d025728ce2a00_12619025')) {function content_5d025728ce2a00_12619025($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.section.product_screen'));
?>
<div class="span16 mockup__mockups-container">
    <div class="span4 mockup">
        <div class="mockup__container">
            <div class="mockup__status-bar drawerBgColor__background">

                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/status_bar_example.png">

            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/mobile_app/components/atoms/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <div class="mockup__body body screenBackgroundColor__background" style="min-height: calc(100% - 65px); max-height: calc(100% - 65px);">
                <div class="mockup__product-preview">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/mobile_app/product_preview.gif">
                </div>

                <div class="mockup__product-describes">
                    <p class="mockup__product-title darkColor">Mac OS X Lion: The Missing Manual</p>
                    <p class="mockup__product-rate">
                        <i class="fa fa-star fa-lg ratingStarsColor"></i>
                        <i class="fa fa-star fa-lg ratingStarsColor"></i>
                        <i class="fa fa-star fa-lg ratingStarsColor"></i>
                        <i class="fa fa-star fa-lg ratingStarsColor"></i>
                        <i class="fa fa-star-half fa-lg ratingStarsColor"></i>
                        <span style="color: #808080">1 reviews</span>
                    </p>
                    <p class="mockup__product-price darkColor">$34.99</p>
                    <p class="mockup__product-desc" style="color: #808080">For a company that promised to "put a pause on new features," Apple sure has been busy-there"s barely a feature left untouched in Mac OS X 10.6 "Snow Leopard."
                    </p>
                </div>

                <div class="mockup__product-tabs tabs">
                    <ul class="tabs__container grayColor__background SectionRow__border">
                        <li class="tabs__el">Reviews (1)</li>
                    </ul>

                    <div class="tabs__content tabs__content--review">
                        <p>
                            <span class="darkColor"><b>David</b></span>
                            <span style="float: right;">
                                <i class="fa fa-star fa-lg ratingStarsColor"></i>
                                <i class="fa fa-star fa-lg ratingStarsColor"></i>
                                <i class="fa fa-star fa-lg ratingStarsColor"></i>
                                <i class="fa fa-star fa-lg ratingStarsColor"></i>
                                <i class="fa fa-star-half fa-lg ratingStarsColor"></i>
                            </span>
                        </p>

                        <p class="discussionMessageColor">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit officiis voluptatum totam repudiandae eligendi iusto magnam cum mollitia corrupti esse, molestiae, cupiditate autem asperiores obcaecati est soluta commodi earum quia.</p>
                    </div>
                </div>

                <div class="mockup__product-tabs">
                    <ul class="tabs__container grayColor__background SectionRow__border">
                        <li class="tabs__el">Features</li>
                    </ul>

                    <div class="tabs__content tabs__content--features">
                        <p style="margin: 0;">
                            <span style="color: #595959"><b>Brand</b></span>
                            <span style="color: #595959; float: right;">Samsung </span>
                        </p>
                    </div>
                </div>

                <div class="mockup__product-tabs">
                    <ul class="tabs__container grayColor__background SectionRow__border">
                        <li class="tabs__el">Vendor info</li>
                    </ul>

                    <div class="tabs__content tabs__content--features">
                        <p style="position: relative; color: #595959">
                            <span><b>Simtech</b><br /><span style="font-size: 11px;">245 items</span></span>
                            <span style="position: absolute; right: 0; top: 0;" class="primaryColor">Vendor info</span>
                        </p>
                        <p style="color: #595959">The company that makes the best shopping cart software in the world</p>
                    </div>
                </div>

                <br /> <br /> <br />
            </div>

            <div class="mockup__product-add-to-cart screenBackgroundColor__background">
                <button class="mockup__product-add-to-cart--action primaryColorText primaryColor__background">Add to cart</button>
                <button class="mockup__product-add-to-cart--wish addToWishListColor__background" style="color: white;">❤</button>
            </div>
        </div>
    </div>

    <div class="span8">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("mobile_app.section.product_screen")), 0);?>


        <?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_smarty_tpl->tpl_vars['col_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config_data']->value['app_appearance']['colors']['product_screen']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        name="m_settings[app_appearance][colors][product_screen][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_name']->value, ENT_QUOTES, 'UTF-8');?>
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
