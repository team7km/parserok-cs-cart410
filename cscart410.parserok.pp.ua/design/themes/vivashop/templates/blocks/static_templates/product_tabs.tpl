{if $product.product_id}{assign var="obj_id" value=$product.product_id}{/if}
<div class="product-main-info et-separate-tabs">
	{hook name="products:product_tabs"}
        {include file="views/tabs/components/product_tabs.tpl" product_details_in_tab="Y"}

        {if $blocks.$tabs_block_id.properties.wrapper}
            {include file=$blocks.$tabs_block_id.properties.wrapper content=$smarty.capture.tabsbox_content title=$blocks.$tabs_block_id.description}
        {else}
            {$smarty.capture.tabsbox_content nofilter}
        {/if}
    {/hook}
</div>