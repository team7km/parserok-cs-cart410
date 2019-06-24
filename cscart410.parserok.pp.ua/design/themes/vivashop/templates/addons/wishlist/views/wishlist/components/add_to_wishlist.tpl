{if $show_vs_icon_buttons}
	{include file="buttons/button.tpl" 
		but_text=__("add_to_wishlist") 
		but_href=$but_href
		but_role="vs_icon" 
		but_id=$but_id 
		but_name=$but_name 
		but_onclick=$but_onclick 
		vs_icon="vs-icon-wishlist"
		but_extra_class="vs-add-to-wishlist"}
{else}
	{include file="buttons/button.tpl" 
		but_id=$but_id 
		but_meta="wish-link nowrap ty-btn__text ty-add-to-wish" 
		but_name=$but_name 
		but_text=__("add_to_wishlist") 
		but_role="vs_text_w_icon" 
		but_onclick=$but_onclick 
		but_href=$but_href
		vs_icon="vs-icon-wishlist"}
{/if}