{if $display_button_block}
    <div class="clear"></div>
    <ul class="social-buttons social-buttons_ul clearfix">
    {foreach from=$provider_settings item="provider_data"}
        {if $provider_data && $provider_data.template && $provider_data.data}
        <li class="social-buttons_li clearfix ty-float-left vs-product-social-{$provider_data.template|replace:".tpl":""}">{include file="addons/social_buttons/providers/`$provider_data.template`"}
        	</li>
        {/if}
    {/foreach}
    </ul>
{/if}
