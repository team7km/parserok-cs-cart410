{if !$config.tweaks.disable_dhtml}
    {assign var="ajax_class" value="cm-ajax cm-ajax-full-render"}
{/if}

{if  !$hide_compare_list_button && $show_vs_icon_buttons}
	{$c_url = $redirect_url|default:$config.current_url|escape:url}
	{include file="buttons/button.tpl" 
		but_text=__("add_to_comparison_list") 
		but_href="product_features.add_product?product_id=$product_id&redirect_url=$c_url" 
		but_role="vs_icon" 
		but_target_id="comparison_list,account_info*" 
		but_meta="ty-add-to-compare $ajax_class" 
		but_rel="nofollow" 
		vs_icon="vs-icon-compare"
		but_extra_class="vs-add-to-compare"}
{elseif  !$hide_compare_list_button}
    {$c_url = $redirect_url|default:$config.current_url|escape:url}
    {include file="buttons/button.tpl" 
    	but_text=__("add_to_compare_list") 
    	but_href="product_features.add_product?product_id=$product_id&redirect_url=$c_url" 
    	but_role="vs_text_w_icon" 
    	but_target_id="comparison_list,account_info*" 
    	but_meta="ty-btn__text ty-add-to-compare $ajax_class"
    	but_rel="nofollow"
    	vs_icon="vs-icon-compare"}

{/if}