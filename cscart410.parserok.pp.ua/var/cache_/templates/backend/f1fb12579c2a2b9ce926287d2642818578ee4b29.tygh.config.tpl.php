<?php /* Smarty version Smarty-3.1.21, created on 2019-06-13 17:01:12
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/settings/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3242472115d0257281799b2-38600334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1fb12579c2a2b9ce926287d2642818578ee4b29' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/mobile_app/settings/config.tpl',
      1 => 1560353863,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3242472115d0257281799b2-38600334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mobile_app_styles' => 0,
    'config_data' => 0,
    'image_types' => 0,
    'image_type_data' => 0,
    'app_images' => 0,
    'apple_pay_supported_networks' => 0,
    'code' => 0,
    'name' => 0,
    'setting_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d025728282bf4_41675933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d025728282bf4_41675933')) {function content_5d025728282bf4_41675933($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.shopName','ttc_mobile_app.shopName','mobile_app.pushNotifications','ttc_mobile_app.pushNotifications','no','yes','mobile_app.fcm_api_key','mobile_app.fcm_api_key_tooltip','mobile_app.services_config','tt_mobile_app.services_config','remove_this_item','remove_this_item','mobile_app.appName','ttc_mobile_app.appName','mobile_app.appShortDescription','ttc_mobile_app.appShortDescription','mobile_app.appFullDescription','ttc_mobile_app.appFullDescription','mobile_app.supportEmail','ttc_mobile_app.supportEmail','mobile_app.privacyPolicyUrl','ttc_mobile_app.privacyPolicyUrl','mobile_app.crop_when_resize','tt_mobile_app.crop_when_resize','mobile_app.','tt_mobile_app.','mobile_app.apple_pay','mobile_app.apple_pay_merchant_identifier','mobile_app.apple_pay_merchant_identifier_tooltip','mobile_app.apple_pay_merchant_name','mobile_app.apple_pay_merchant_name_tooltip','mobile_app.apple_pay_supported_networks','general','mobile_app.configure_colors','mobile_app.apple_pay'));
?>
<div id="colors_variables">
    <style>
        <?php echo $_smarty_tpl->tpl_vars['mobile_app_styles']->value;?>

    </style>
<!--colors_variables--></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("general", null, null); ob_start(); ?>
<div class="clearfix">
    <div class="span6">
        <?php ob_start();
echo $_smarty_tpl->__('app_params');
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1), 0);?>


        <div class="control-group">
            <label class="control-label" for="m_settings_app_settings_utility_shopName"><?php echo $_smarty_tpl->__("mobile_app.shopName");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_mobile_app.shopName")), 0);?>
:</label>
            <div class="controls">
                <input type="text" name="m_settings[app_settings][utility][shopName]"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['utility']['shopName'], ENT_QUOTES, 'UTF-8');?>
"
                    id="m_settings_app_settings_utility_shopName"
                />
            </div>
        </div>

        <br /><br />

        <div class="control-group">
            <label class="control-label" for="m_settings_app_settings_utility_pushNotifications"><?php echo $_smarty_tpl->__("mobile_app.pushNotifications");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_mobile_app.pushNotifications")), 0);?>
:</label>
            <div class="controls">
                <select
                    name="m_settings[app_settings][utility][pushNotifications]"
                    id="m_settings_app_settings_utility_pushNotifications"
                >
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['utility']['pushNotifications']==0) {?>selected<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['utility']['pushNotifications']==1) {?>selected<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="m_settings_app_settings_utility_fcm_api_key"><?php echo $_smarty_tpl->__("mobile_app.fcm_api_key");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("mobile_app.fcm_api_key_tooltip",array("[bundle_id]"=>(($tmp = @$_smarty_tpl->tpl_vars['config_data']->value['bundle_id'])===null||$tmp==='' ? '' : $tmp)))), 0);?>
:</label>
            <div class="controls">
                <input type="text" name="m_settings[app_settings][utility][fcmApiKey]"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['utility']['fcmApiKey'], ENT_QUOTES, 'UTF-8');?>
"
                    id="m_settings_app_settings_utility_fcm_api_key"
                />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="m_settings_app_settings_utility_services_config"><?php echo $_smarty_tpl->__("mobile_app.services_config");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_mobile_app.services_config")), 0);?>
:</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['config_data']->value['google_config_file_uploaded']) {?>
                    <a href="<?php echo htmlspecialchars(fn_url("mobile_app.get_google_config_file"), ENT_QUOTES, 'UTF-8');?>
">google-services.json</a>
                        <a class="cm-post" href="<?php echo htmlspecialchars(fn_url("mobile_app.delete_google_config_file"), ENT_QUOTES, 'UTF-8');?>
">
                            <i alt="<?php echo $_smarty_tpl->__("remove_this_item");?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" class="icon-remove-sign cm-tooltip hand"></i>
                        </a>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"mobile_app[google_services_config_file]",'hide_server'=>true), 0);?>

            </div>
        </div>

        <br /><br />

        <div class="control-group">
            <label for="config_data_app_settings_build_appName" 
                   class="control-label cm-required"
            ><?php echo $_smarty_tpl->__("mobile_app.appName");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_mobile_app.appName")), 0);?>
:</label>
            <div class="controls">
                <input type="text" name="m_settings[app_settings][build][appName]"
                    id="config_data_app_settings_build_appName"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['build']['appName'], ENT_QUOTES, 'UTF-8');?>
"
                    maxlength="30"
                />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label cm-required" for="config_data_app_settings_build_appShortDescription"><?php echo $_smarty_tpl->__("mobile_app.appShortDescription");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_mobile_app.appShortDescription")), 0);?>
:</label>
            <div class="controls">
                <textarea 
                    name="m_settings[app_settings][build][appShortDescription]" 
                    cols="30" 
                    rows="3" 
                    maxlength="80"
                    data-target="appShortDescription"
                    id="config_data_app_settings_build_appShortDescription"
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['build']['appShortDescription'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label cm-required" for="config_data_app_settings_build_appFullDescription"><?php echo $_smarty_tpl->__("mobile_app.appFullDescription");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_mobile_app.appFullDescription")), 0);?>
:</label>
            <div class="controls">
                <textarea 
                    name="m_settings[app_settings][build][appFullDescription]" 
                    cols="30" 
                    rows="10" 
                    maxlength="4000"
                    data-target="appFullDescription"
                    id="config_data_app_settings_build_appFullDescription"
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['build']['appFullDescription'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label cm-required cm-email" for="config_data_app_settings_build_supportEmail"><?php echo $_smarty_tpl->__("mobile_app.supportEmail");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_mobile_app.supportEmail")), 0);?>
:</label>
            <div class="controls">
                <input type="email" name="m_settings[app_settings][build][supportEmail]"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['build']['supportEmail'], ENT_QUOTES, 'UTF-8');?>
"
                    id="config_data_app_settings_build_supportEmail"
                    data-target="supportEmail"
                />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label cm-required" for="config_data_app_settings_build_privacyPolicyUrl"><?php echo $_smarty_tpl->__("mobile_app.privacyPolicyUrl");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_mobile_app.privacyPolicyUrl")), 0);?>
:</label>
            <div class="controls">
                <input type="text" name="m_settings[app_settings][build][privacyPolicyUrl]"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['build']['privacyPolicyUrl'], ENT_QUOTES, 'UTF-8');?>
"
                    id="config_data_app_settings_build_privacyPolicyUrl"
                    data-target="privacyPolicyUrl"
                />
            </div>
        </div>
    </div>

    <div class="span9 mobile-app__images-container">
        <?php ob_start();
echo $_smarty_tpl->__('images_params');
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp2), 0);?>

        <div class="control-group">
            <label class="control-label" for="config_data_app_settings_build_crop_when_resize"><?php echo $_smarty_tpl->__("mobile_app.crop_when_resize");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_mobile_app.crop_when_resize")), 0);?>
:</label>
            <div class="controls">
                <innpu type="checkbox" name="m_settings[app_settings][images][crop_when_resize]" value="N" checked/>
                <input type="checkbox" name="m_settings[app_settings][images][crop_when_resize]"
                       value="Y"
                       id="config_data_app_settings_build_crop_when_resize"
                       data-target="crop_when_resize"
                       <?php if ($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['images']['crop_when_resize']=="Y") {?>
                           checked
                       <?php }?>
                />
            </div>
        </div>

        <?php  $_smarty_tpl->tpl_vars['image_type_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image_type_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['image_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image_type_data']->key => $_smarty_tpl->tpl_vars['image_type_data']->value) {
$_smarty_tpl->tpl_vars['image_type_data']->_loop = true;
?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("mobile_app.".((string)$_smarty_tpl->tpl_vars['image_type_data']->value['name']));
if (!$_smarty_tpl->tpl_vars['image_type_data']->value['no_tooltip']) {
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_mobile_app.".((string)$_smarty_tpl->tpl_vars['image_type_data']->value['name']))), 0);
}?></label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>$_smarty_tpl->tpl_vars['image_type_data']->value['name'],'image_object_type'=>$_smarty_tpl->tpl_vars['image_type_data']->value['type'],'image_pair'=>$_smarty_tpl->tpl_vars['app_images']->value[$_smarty_tpl->tpl_vars['image_type_data']->value['type']],'hide_alt'=>true,'hide_thumbnails'=>true,'no_thumbnail'=>true), 0);?>

                </div>
            </div>
        <?php } ?>
    </div>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("colors", null, null); ob_start(); ?>
<div class="clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/mobile_app/components/categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("addons/mobile_app/components/drawer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("addons/mobile_app/components/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("addons/mobile_app/components/product_screen.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("addons/mobile_app/components/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("apple_pay", null, null); ob_start(); ?>
    <div class="clearfix">
        <div class="span6">
            <?php ob_start();
echo $_smarty_tpl->__('mobile_app.apple_pay');
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp3), 0);?>


            <div class="control-group">
                <label class="control-label" for="m_settings_app_settings_apple_pay"><?php echo $_smarty_tpl->__("mobile_app.apple_pay");?>
:</label>
                <input type="hidden" name="m_settings[app_settings][apple_pay][applePay]" value="off"/>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"m_settings_app_settings_apple_pay",'checked'=>$_smarty_tpl->tpl_vars['config_data']->value['app_settings']['apple_pay']['applePay']=="on",'input_name'=>"m_settings[app_settings][apple_pay][applePay]"), 0);?>

                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="m_settings_app_settings_apple_pay_merchant_identifier"><?php echo $_smarty_tpl->__("mobile_app.apple_pay_merchant_identifier");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("mobile_app.apple_pay_merchant_identifier_tooltip")), 0);?>
:</label>
                <div class="controls">
                    <input type="text" name="m_settings[app_settings][apple_pay][applePayMerchantIdentifier]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['apple_pay']['applePayMerchantIdentifier'], ENT_QUOTES, 'UTF-8');?>
"/>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="m_settings_app_settings_apple_pay_merchant_name"><?php echo $_smarty_tpl->__("mobile_app.apple_pay_merchant_name");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("mobile_app.apple_pay_merchant_name_tooltip")), 0);?>
:</label>
                <div class="controls">
                    <input type="text" name="m_settings[app_settings][apple_pay][applePayMerchantName]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_data']->value['app_settings']['apple_pay']['applePayMerchantName'], ENT_QUOTES, 'UTF-8');?>
"/>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="m_settings_app_settings_apple_pay_supported_networks"><?php echo $_smarty_tpl->__("mobile_app.apple_pay_supported_networks");?>
:</label>
                <div class="controls">
                    <select class="input-full" name="m_settings[app_settings][apple_pay][applePaySupportedNetworks][]" id="m_settings_app_settings_apple_pay_supported_networks" multiple="multiple" size="15">
                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apple_pay_supported_networks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (in_array($_smarty_tpl->tpl_vars['code']->value,(($tmp = @$_smarty_tpl->tpl_vars['config_data']->value['app_settings']['apple_pay']['applePaySupportedNetworks'])===null||$tmp==='' ? array() : $tmp))) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="content_mobile_app_configurator">

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="app_config">
        <input type="hidden" name="setting_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <div class="cm-j-tabs cm-track tabs">
            <ul class="nav nav-tabs">
                <li id="mobile_app_tab_general" class="cm-js active">
                    <a><?php echo $_smarty_tpl->__("general");?>
</a>
                </li>
                <li id="mobile_app_tab_colors" class="cm-js">
                    <a><?php echo $_smarty_tpl->__("mobile_app.configure_colors");?>
</a>
                </li>
                <li id="mobile_app_tab_apple_pay" class="cm-js">
                    <a><?php echo $_smarty_tpl->__("mobile_app.apple_pay");?>
</a>
                </li>
            </ul>
        </div>

        <div class="cm-tabs-content">
            <div id="content_mobile_app_tab_general" class="hidden"><?php echo Smarty::$_smarty_vars['capture']['general'];?>
</div>
            <div id="content_mobile_app_tab_colors" class="hidden"><?php echo Smarty::$_smarty_vars['capture']['colors'];?>
</div>
            <div id="content_mobile_app_tab_apple_pay" class="hidden"><?php echo Smarty::$_smarty_vars['capture']['apple_pay'];?>
</div>
        </div>

    </form>
</div><?php }} ?>
