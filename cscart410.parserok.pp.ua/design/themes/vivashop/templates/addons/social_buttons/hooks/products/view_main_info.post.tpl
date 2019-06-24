{if $display_button_block}
    {foreach from=$provider_settings item="provider_data"}
        {if $provider_data && $provider_data.template=="email.tpl"}
	        {include file="addons/social_buttons/providers/email_content.tpl"}
        {/if}
    {/foreach}
{/if}
