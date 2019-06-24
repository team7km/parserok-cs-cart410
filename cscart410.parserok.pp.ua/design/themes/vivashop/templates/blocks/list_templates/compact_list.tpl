{if $products}

{script src="js/tygh/exceptions.js"}

{if !$no_pagination}
    {include file="common/pagination.tpl"}
{/if}

{if !$no_sorting}
    {include file="views/products/components/sorting.tpl"}
{/if}


<div class="ty-compact-list vs-compact-list">    

{foreach from=$products item="product" key="key" name="products"}
    {assign var="obj_id" value=$product.product_id}
    {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
    {include file="common/product_data.tpl" product=$product show_vs_atc=true}
    {hook name="products:product_compact_list"}
    <div class="ty-compact-list__item">
<form {if !$config.tweaks.disable_dhtml}class="cm-ajax cm-ajax-full-render"{/if} action="{""|fn_url}" method="post" name="short_list_form{$obj_prefix}">
                        <input type="hidden" name="result_ids" value="cart_status*,wish_list*,account_info*" />
<input type="hidden" name="redirect_url" value="{$config.current_url}" />
        <div class="ty-compact-list__image product-image">
            <a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="{if !empty($product.main_pair)}vs-image-auto-scroller{/if}">
                {assign var="discount_label" value="discount_label_`$obj_prefix``$obj_id`"}
                {$smarty.capture.$discount_label nofilter}
                
                {include file="common/image.tpl" image_width="80" image_height="80" images=$product.main_pair obj_id=$obj_id_prefix class="primary active"}
                {assign var="additional_images" value=$product.product_id|fn_get_image_pairs:'product':'A':true:true}
                {foreach from=$additional_images item="image"}
                    {include file="common/image.tpl" images=$image image_width="80" image_height="80" no_ids=true class="additional" vs_lazy_additional=true}
                {/foreach}
            </a>
        </div>
        <div class="ty-compact-list__content">
            <div class="ty-compact-list__title">
            {assign var="name" value="name_$obj_id"}{$smarty.capture.$name nofilter}

            <br/>
            {if $show_sku}
                {$sku = "sku_`$obj_id`"}
                <span class="sku">{$smarty.capture.$sku nofilter}</span>
                <br/>
            {/if}
            {strip}
            {assign var="price" value="price_`$obj_id`"}{$smarty.capture.$price nofilter}
            {/strip}
            {strip}
            {assign var="clean_price" value="clean_price_`$obj_id`"}{$smarty.capture.$clean_price nofilter}
            {/strip}

            {assign var="old_price" value="old_price_`$obj_id`"}
            {if $smarty.capture.$old_price|trim} {$smarty.capture.$old_price nofilter}{/if}
            </div>
        </div>

        {if $show_add_to_cart}
        <div class="ty-compact-list__controls">

            {if !$smarty.capture.capt_options_vs_qty}
            {assign var="product_options" value="product_options_`$obj_id`"}
            {$smarty.capture.$product_options nofilter}
            
            {assign var="qty" value="qty_`$obj_id`"}
            {$smarty.capture.$qty nofilter}
            {/if}
            

            {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}{$smarty.capture.$add_to_cart nofilter}
        </div>
        {/if}
</form>
    </div>
    {/hook}
{/foreach}
</div>



{if !$no_pagination}
    {include file="common/pagination.tpl" force_ajax=$force_ajax}
{/if}

{/if}