<?php /* Smarty version Smarty-3.1.21, created on 2019-06-15 20:59:29
         compiled from "/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/backend_google_auth/hooks/auth/login_form.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16159154355d05320131cb81-89692153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595e0f130ac5141208db298fa084309c8faea2a3' => 
    array (
      0 => '/var/www/user01/data/www/cscart410.parserok.pp.ua/design/backend/templates/addons/backend_google_auth/hooks/auth/login_form.override.tpl',
      1 => 1560353878,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16159154355d05320131cb81-89692153',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d053201337462_71152176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d053201337462_71152176')) {function content_5d053201337462_71152176($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/user01/data/www/cscart410.parserok.pp.ua/app/functions/smarty_plugins/function.style.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('administration_panel','backend_google_auth.login_page.help','backend_google_auth.login_page.btn'));
?>
<?php if (fn_backend_google_auth_is_configured()&&@constant('ACCOUNT_TYPE')=="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/backend_google_auth/styles.css"),$_smarty_tpl);?>


    <div class="modal signin-modal">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="main_login_form" class="">
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_query_remove(fn_url($_REQUEST['return_url'],"A","rel"),"return_url"), ENT_QUOTES, 'UTF-8');?>
">
            <div class="modal-header">
                <h4><?php echo $_smarty_tpl->__("administration_panel");?>
</h4>
            </div>
            <div class="modal-body">
                <p class="login-notice"><?php echo $_smarty_tpl->__("backend_google_auth.login_page.help");?>
</p>
                <button class="login-btn login-btn-blue" name="dispatch[auth.login]">
                    <div class="login-btn--content-wrapper">
                        <div class="login-btn--icon">
                            <div class="login-btn--icon-image">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                     viewBox="0 0 48 48" class="login-btnSvg">
                                    <g>
                                        <path fill="#EA4335"
                                              d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                        <path fill="#4285F4"
                                              d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                        <path fill="#FBBC05"
                                              d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                        <path fill="#34A853"
                                              d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                        <path fill="none" d="M0 0h48v48H0z"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <span class="login-btn--contents"><span><?php echo $_smarty_tpl->__("backend_google_auth.login_page.btn");?>
</span></span>
                    </div>
                </button>
            </div>
        </form>
    </div>
<?php }?><?php }} ?>
