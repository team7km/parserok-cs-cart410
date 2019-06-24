{if $product}
{assign var="obj_id" value=$obj_id|default:$product.product_id}

{include file="common/product_data.tpl" obj_id=$obj_id product=$product show_name=true}
<div class="product-container clearfix">
    {assign var="form_open" value="form_open_`$obj_id`"}
    {$smarty.capture.$form_open nofilter}
        {if $item_number == "Y"}<strong>{$smarty.foreach.products.iteration}.&nbsp;</strong>{/if}
        <div class="title-wrapper">
            {assign var="name" value="name_$obj_id"}
            <div class="title-wrapper-inner">{$smarty.capture.$name nofilter}</div>
        </div>
        <div class="price-wrapper {if $settings.Appearance.show_prices_taxed_clean=="Y"}vs-grid-tax{/if}">
            {if !$hide_price}
            <div class="prices-container clearfix">

            {if $show_old_price || $show_clean_price || $show_list_discount}
                <div class="clearfix product-prices">
                {assign var="old_price" value="old_price_`$obj_id`"}
            {/if}

            {if !$smarty.capture.$old_price|trim || $details_page}
                <p>
            {else}
                <div class="ty-float-left">
            {/if}
                    {assign var="price" value="price_`$obj_id`"}
                    {$smarty.capture.$price nofilter}<br/>

            {if !$smarty.capture.$old_price|trim || $details_page}
                </p>
            {else}
                </div>
            {/if}

            {if $show_old_price || $show_clean_price || $show_list_discount}
                <div class="ty-float-right">
                    {if $smarty.capture.$old_price|trim}
                        {$smarty.capture.$old_price nofilter}
                    {/if}
            {/if}

            {if $show_old_price || $show_clean_price || $show_list_discount}
                        
                        {assign var="list_discount" value="list_discount_`$obj_id`"}
                        {$smarty.capture.$list_discount nofilter}
                    </div>
                </div>
            {/if}
            {assign var="clean_price" value="clean_price_`$obj_id`"}
            {$smarty.capture.$clean_price nofilter}


            
            {if $show_discount_label}
                <div class="ty-float-left">
                    {assign var="discount_label" value="discount_label_`$obj_prefix``$obj_id`"}
                    {$smarty.capture.$discount_label nofilter}
                </div>
            {/if}
            </div>
            {/if}
        </div>

        {if $capture_options_vs_qty}{capture name="product_options"}{/if}
        {assign var="product_amount" value="product_amount_`$obj_id`"}
        {$smarty.capture.$product_amount nofilter}
        
        {assign var="product_options" value="product_options_`$obj_id`"}
        {$smarty.capture.$product_options nofilter}
        
        {if !$hide_qty}
            {assign var="qty" value="qty_`$obj_id`"}
            {$smarty.capture.$qty nofilter}
        {/if}
        
        {assign var="advanced_options" value="advanced_options_`$obj_id`"}
        {$smarty.capture.$advanced_options nofilter}
        {if $capture_options_vs_qty}{/capture}{/if}
        
        {assign var="min_qty" value="min_qty_`$obj_id`"}
        {$smarty.capture.$min_qty nofilter}
        
        {assign var="product_edp" value="product_edp_`$obj_id`"}
        {$smarty.capture.$product_edp nofilter}

        {if $capture_buttons}{capture name="buttons"}{/if}

        <div class="rating-buttons clearfix">
            <div class="ty-float-left vs-rating">
                {assign var="rating" value="rating_`$obj_id`"}
                {$smarty.capture.$rating nofilter}
            </div>
            <div class="ty-float-right vs-buttons clearfix">
                {if $show_add_to_cart}
                    {if isset($block.properties.enable_quick_view) && $block.properties.enable_quick_view == "Y"}
                        {include file="views/products/components/quick_view_link.tpl" quick_nav_ids=$quick_nav_ids}
                    {/if}
                    {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                    {$smarty.capture.$add_to_cart nofilter}
                {/if}
            </div>
        </div>
        {if $capture_buttons}{/capture}{/if}
    {assign var="form_close" value="form_close_`$obj_id`"}
    {$smarty.capture.$form_close nofilter}
</div>

{/if}