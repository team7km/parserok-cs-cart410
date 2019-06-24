{if $display_button_block && !$subpages}
    <div class="ty-social-buttons clearfix">
    	<div class="social-buttons social-buttons_blocks clearfix ty-float-right">
    	{foreach from=$provider_settings item="provider_data"}
    	    {if $provider_data && $provider_data.template && $provider_data.data}
    	    	<div class="ty-social-buttons__inline social-buttons_wrap vs-page-social-{$provider_data.template|replace:".tpl":""}">{include file="addons/social_buttons/providers/`$provider_data.template`"}</div>
	            {if $provider_data.template=="email.tpl"}
	    	        {include file="addons/social_buttons/providers/email_content.tpl"}
	            {/if}
    	    {/if}
    	{/foreach}
    	</div>
    </div>
{/if}
