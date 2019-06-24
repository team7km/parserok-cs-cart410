{if is_array($providers_list)}
	{capture name="hybrid_auth"}
	{strip}
		<input type="hidden" name="redirect_url" value="{$redirect_url}" />
		{foreach from=$providers_list item="provider_data"}
			{if $provider_data.status == 'A'}
				<a class="cm-login-provider vs-login-{$provider_data.provider}" data-idp="{$provider_data.provider}">
					{__("login_with_`$provider_data.provider`")}
				</a>
			{/if}
		{/foreach}
	{/strip}
	{/capture}
	
	{if $smarty.capture.hybrid_auth}
		<div class="vs-social-login">
			{if $style == "checkout" }
				<a href="#" class="vs-social-toggle">
					{__("hybrid_auth.social_login")}:
				</a>
			{else}
				<div class="center space-top vs-social-text ty-center">{__("hybrid_auth.social_login")}</div>
			{/if}
	
			<div class="vs-auth {if $style == "checkout"}hidden{/if} social-login">
				{$smarty.capture.hybrid_auth nofilter}
			</div>
		</div>
	{/if}
{/if}