<ul class="template-small-item">
{foreach from=$products item="product" name="products"}
    {assign var="obj_id" value=$product.product_id}
    {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
    {include file="common/product_data.tpl" product=$product vs_rating_scroll_link=false}
	{hook name="products:product_small_item"}
    <li class="clearfix">
        {assign var="form_open" value="form_open_`$obj_id`"}
        {$smarty.capture.$form_open nofilter}
            <div class="item-image product-item-image animate scale">
                {if $product.list_discount_prc || $product.discount_prc}
                    {strip}
                    <div class="thumb-discount-label">
                        <span>-{if $product.list_discount_prc}{$product.list_discount_prc}{elseif $product.discount_prc}{$product.discount_prc}{/if}%</span>
                    </div>
                    {/strip}
                {/if}

                <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{include file="common/image.tpl" image_width="60" image_height="60" images=$product.main_pair obj_id=$obj_id_prefix no_ids=true vs_lazy_additional=true vs_lazy_mobile=true}</a>
            </div>
            <div class="item-description">
                {if $block.properties.item_number == "Y"}{$smarty.foreach.products.iteration}.&nbsp;{/if}
                {assign var="name" value="name_$obj_id"}{$smarty.capture.$name nofilter}
                
                <div class="rating-wrapper">
                    {assign var="rating" value="rating_$obj_id"}
                    {$smarty.capture.$rating nofilter}
                </div>

                <div>
                    {assign var="price" value="price_`$obj_id`"}
                    {$smarty.capture.$price nofilter}&nbsp;

                    {assign var="old_price" value="old_price_`$obj_id`"}
                    {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}

                </div>

                {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                {if $smarty.capture.$add_to_cart|trim}<p>{$smarty.capture.$add_to_cart nofilter}</p>{/if}
            </div>
        {assign var="form_close" value="form_close_`$obj_id`"}
        {$smarty.capture.$form_close nofilter}
    </li>
    {/hook}
    {if !$smarty.foreach.products.last}
    {/if}
{/foreach}
</ul>