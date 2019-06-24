{if !$hide_form && $addons.call_requests.buy_now_with_one_click == "Y" && $vs_show_call_req == true && ($auth.user_id || $settings.General.allow_anonymous_shopping == "allow_shopping")}

{$id = "call_request_{$obj_prefix}{$product.product_id}"}
	<a id="opener_{$id}" class="cm-dialog-opener cm-dialog-auto-size {if !$runtime.customization_mode.live_editor}cm-tooltip{/if} vs-call-request vs-button ty-cr-product-button" title="{if !$runtime.customization_mode.live_editor}{__("call_requests.buy_now_with_one_click")}{/if}" data-ca-target-id="content_{$id}"  rel="nofollow">
	    <i class="vs-icon-call-request"></i>
	</a>

{/if}
