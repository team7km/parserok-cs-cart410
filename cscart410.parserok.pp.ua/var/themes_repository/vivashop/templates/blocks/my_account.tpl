{** block-description:my_account **}

{capture name="title"}
<a class="ty-account-info__title" href="{"profiles.update"|fn_url}">
    <i class="vs-icon-menu-my-account"></i>
    <span class="vs-my-account-text ty-account-info__title-txt" {live_edit name="block:name:{$block.block_id}"}>{__("my_account")}</span>
</a>
{/capture}

<div id="account_info_{$block.snapping_id}" class="vs-my-account">
    {assign var="return_current_url" value=$config.current_url|escape:url}
    <ul class="ty-account-info">
    {hook name="profiles:my_account_menu"}
        {if $auth.user_id}
            {if $user_info.firstname || $user_info.lastname}
                    <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item">{$user_info.firstname} {$user_info.lastname}</li>
            {else}
                        <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name">{$user_info.email}</li>
            {/if}
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="{"profiles.update"|fn_url}" rel="nofollow" >{__("profile_details")}</a></li>
                {if $settings.General.enable_edp == "Y"}
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="{"orders.downloads"|fn_url}" rel="nofollow">{__("downloads")}</a></li>
                {/if}
        {elseif $user_data.firstname || $user_data.lastname}
                <li class="ty-account-info__item  ty-dropdown-box__item ty-account-info__name">{$user_data.firstname} {$user_data.lastname}</li>
            {elseif $user_data.email}
                <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name">{$user_data.email}</li>
        {/if}
            <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="{"orders.search"|fn_url}" rel="nofollow">{__("orders")}</a></li>
        {if $settings.General.enable_compare_products == 'Y'}
            {assign var="compared_products" value=""|fn_get_comparison_products}
            <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="{"product_features.compare"|fn_url}" rel="nofollow">{__("view_comparison_list")}{if $compared_products} ({$compared_products|count}){/if}</a></li>
        {/if}
    {/hook}

    </ul>

    {if $settings.Appearance.display_track_orders == 'Y'}
        <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_{$block.snapping_id}">
            <form action="{""|fn_url}" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
    <input type="hidden" name="result_ids" value="track_orders_block_*" />
    <input type="hidden" name="return_url" value="{$smarty.request.return_url|default:$config.current_url}" />

                <div class="ty-account-info__orders-txt">{__("track_my_order")}</div>

                <div class="ty-account-info__orders-input ty-control-group ty-input-append">
        <label for="track_order_item{$block.snapping_id}" class="cm-required hidden">{__("track_my_order")}</label>
                    <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item{$block.snapping_id}" name="track_data" value="{__("order_id")}{if !$auth.user_id}/{__("email")}{/if}" />
                    {if $language_direction == 'rtl'}
                        {include file="buttons/go.tpl" but_name="orders.track_request" alt=__("go") vs_icon_class="vs-icon-arrow-left"}
                    {else}
                        {include file="buttons/go.tpl" but_name="orders.track_request" alt=__("go") vs_icon_class="vs-icon-arrow-right"}
                    {/if}
        {include file="common/image_verification.tpl" option="track_orders" align="left" sidebox=true}
    </div>

    </form>

    <!--track_orders_block_{$block.snapping_id}--></div>
    {/if}
    {if !$auth.user_id}
        {hook name="index:login_buttons"}
        {/hook}
    {/if}

    <div class="ty-account-info__buttons buttons-container">
        {if $auth.user_id}
            <a href="{"auth.logout?redirect_url=`$return_current_url`"|fn_url}" rel="nofollow" class="ty-btn ty-btn__primary">{__("sign_out")}</a>
        {else}
            <a href="{if $runtime.controller == "auth" && $runtime.mode == "login_form"}{$config.current_url|fn_url}{else}{"auth.login_form?return_url=`$return_current_url`"|fn_url}{/if}" {if $settings.Security.secure_storefront != "partial"} data-ca-target-id="login_block{$block.snapping_id}" class="cm-dialog-opener cm-dialog-auto-size account"{else} class="account"{/if} rel="nofollow">{__("sign_in")}</a><span>{__("or")}</span><a href="{"profiles.add"|fn_url}" rel="nofollow" class="account">{__("register")}</a>
            {if $settings.Security.secure_storefront != "partial"}
                <div  id="login_block{$block.snapping_id}" class="hidden" title="{__("sign_in")}">
                    <div class="ty-login-popup">
                        {include file="views/auth/login_form.tpl" style="popup" id="popup`$block.snapping_id`"}
                    </div>
                </div>
            {/if}
        {/if}
    </div>
<!--account_info_{$block.snapping_id}--></div>
