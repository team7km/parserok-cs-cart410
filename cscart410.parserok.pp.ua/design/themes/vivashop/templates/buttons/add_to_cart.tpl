{hook name="buttons:add_to_cart"}
    {assign var="c_url" value=$config.current_url|escape:url}
    {if ($settings.General.allow_anonymous_shopping == "allow_shopping" || $auth.user_id) && $show_vs_icon_buttons}
        {if ($product.avail_since > $smarty.const.TIME)}
        {*Product coming soon with add to cart*}
            {assign var="date" value=$product.avail_since|date_format:$settings.Appearance.date_format}
            {assign var="vs_coming_soon" value=__("product_coming_soon_add", ["[avail_date]" => $date])}
            {include file="buttons/button.tpl" 
                but_text=$but_text|default:$vs_coming_soon
                but_id=$but_id 
                but_href=$but_href 
                but_role="vs_icon"
                but_target=$but_target 
                but_name=$but_name 
                but_onclick=$but_onclick 
                vs_icon="vs-icon-coming-soon"
                but_extra_class="vs-add-to-cart"}
        {else}
            {include file="buttons/button.tpl" 
                but_text=$but_text|default:__("add_to_cart") 
                but_id=$but_id 
                but_href=$but_href 
                but_role="vs_icon"
                but_target=$but_target 
                but_name=$but_name 
                but_onclick=$but_onclick 
                vs_icon="vs-icon-grid-add-to-cart"
                but_extra_class="vs-add-to-cart"}
        {/if}

    {elseif $settings.General.allow_anonymous_shopping == "allow_shopping" || $auth.user_id}
        {if $details_page || $show_vs_atc}
            {include file="buttons/button.tpl" 
                but_id=$but_id 
                but_text=$but_text|default:__("add_to_cart") 
                but_name=$but_name 
                but_onclick=$but_onclick 
                but_href=$but_href 
                but_target=$but_target
                but_meta="vs-atc" 
                vs_icon="vs-icon-top-cart"
                but_role="vs_text_w_icon_submit"}
        {else}
            {include file="buttons/button.tpl" but_id=$but_id but_text=$but_text|default:__("add_to_cart") but_name=$but_name but_onclick=$but_onclick but_href=$but_href but_target=$but_target but_role=$but_role|default:"text" but_meta="ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer"}

        {/if}
    {else}

        {if $runtime.controller == "auth" && $runtime.mode == "login_form"}
            {assign var="login_url" value=$config.current_url}
        {else}
            {assign var="login_url" value="auth.login_form?return_url=`$c_url`"}
        {/if}
        
        {if $show_vs_icon_buttons}
            {include file="buttons/button.tpl" 
                but_id=$but_id 
                but_text=__("sign_in_to_buy")
                but_role="vs_icon"
                but_href=$login_url
                vs_icon="vs-icon-user"
                but_extra_class="vs-add-to-cart"}
        {else}
            {include file="buttons/button.tpl" 
                but_id=$but_id 
                but_text=__("sign_in_to_buy")
                but_name=$but_name 
                but_onclick=$but_onclick 
                but_href=$login_url
                but_target=$but_target
                but_meta="vs-atc" 
                vs_icon="vs-icon-user"
                but_role="vs_text_w_icon"}
        {/if}
    {/if}
{/hook}
