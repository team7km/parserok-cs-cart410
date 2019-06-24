{assign var="date" value=$avail_date|date_format:$settings.Appearance.date_format}
{if $show_vs_icon_buttons}
    {if $add_to_cart == "N"}
    	{assign var="vs_coming_soon" value=__("product_coming_soon", ["[avail_date]" => $date])}
    	{include file="buttons/button.tpl" 
    	    but_id="out_of_stock_info_{$obj_prefix}{$obj_id}" 
    	    but_text=$vs_coming_soon
    	    but_role="vs_icon"
    	    vs_icon="vs-icon-coming-soon"
    	    but_extra_class="vs-add-to-cart"}
    {else}
    	{assign var="vs_coming_soon" value=__("product_coming_soon_add", ["[avail_date]" => $date])}
    {/if}

{else}
	<div class="ty-product-coming-soon">
    	{if $add_to_cart == "N"}{__("product_coming_soon", ["[avail_date]" => $date])}{else}{__("product_coming_soon_add", ["[avail_date]" => $date])}{/if}
	</div>
{/if}
