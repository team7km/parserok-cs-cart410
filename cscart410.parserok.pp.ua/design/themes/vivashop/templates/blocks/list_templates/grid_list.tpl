{if $products}

{script src="js/tygh/exceptions.js"}

{if !$no_pagination}
    {include file="common/pagination.tpl"}
{/if}

{if !$no_sorting}
    {include file="views/products/components/sorting.tpl"}
{/if}

{assign var="columns" value=$vs_columns|default:$columns}

{if !$show_empty}
    {split data=$products size=$columns|default:"2" assign="splitted_products"}
{else}
    {split data=$products size=$columns|default:"2" assign="splitted_products" skip_complete=true}
{/if}

{math equation="100 / x" x=$columns|default:"2" assign="cell_width"}
{if $item_number == "Y"}
    {assign var="cur_number" value=1}
{/if}

{script src="js/tygh/product_image_gallery.js"}

{if $settings.Appearance.enable_quick_view == 'Y'}
{$quick_nav_ids = $products|fn_fields_from_multi_level:"product_id":"product_id"}
{/if}

<div class="grid-list vs-grid-table-wrapper">
{strip}

{foreach from=$splitted_products item="sproducts" name="sprod"}
{foreach from=$sproducts item="product" name="sproducts"}

    <div class="ty-column{$columns}">
    {if $product}
        {assign var="obj_id" value=$product.product_id}
        {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
        {include file="common/product_data.tpl" product=$product show_name=true}
        
        <div class="ty-grid-list__item ty-quick-view-button__wrapper">
        {assign var="form_open" value="form_open_`$obj_id`"}
        {$smarty.capture.$form_open nofilter}
        {hook name="products:product_multicolumns_list"}
            <div class="vs-grid vs-grid-table">
                <div class="preview-image">
                    <div class="ty-center scroll-image animate scale">
                        {assign var="discount_label" value="discount_label_`$obj_prefix``$obj_id`"}
                        {$smarty.capture.$discount_label nofilter}
                        
                        {include file="views/products/components/product_icon.tpl" product=$product show_vs_gallery=true}

                    </div>
                </div>

                <div class="title-wrapper">
                    {if $item_number == "Y"}<span class="item-number">{$cur_number}.&nbsp;</span>{math equation="num + 1" num=$cur_number assign="cur_number"}{/if}
                    {assign var="name" value="name_$obj_id"}
					<div class="title-wrapper-inner">{$smarty.capture.$name nofilter}</div>
                </div>
                <div class="price-wrapper {if $settings.Appearance.show_prices_taxed_clean=="Y"}vs-grid-tax{/if}">
                    <div class="clearfix prices-container">

                        <div class="clearfix">
                            <div class="ty-float-left">
                                {assign var="price" value="price_`$obj_id`"}
                                {$smarty.capture.$price nofilter}<br/>
                            </div>
                            
                            <div class="ty-float-right">
                            {assign var="old_price" value="old_price_`$obj_id`"}
                            {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}
                            </div>

                        </div>
                        {assign var="clean_price" value="clean_price_`$obj_id`"}
                        {$smarty.capture.$clean_price nofilter}
                        

                        {assign var="list_discount" value="list_discount_`$obj_id`"}
                        {$smarty.capture.$list_discount nofilter}


                    </div>
                </div>
                <div class="product-description">
                    <div class="rating-buttons clearfix">
                        <div class="ty-float-left vs-rating">
                            {assign var="rating" value="rating_$obj_id"}
                            {$smarty.capture.$rating nofilter}
                        </div>
                        <div class="ty-float-right vs-buttons clearfix">
                            {if $show_add_to_cart}
                                {if $settings.Appearance.enable_quick_view == 'Y'}
                                    {include file="views/products/components/quick_view_link.tpl" quick_nav_ids=$quick_nav_ids}
                                {/if}
                                {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                                {$smarty.capture.$add_to_cart nofilter}
                            {/if}
                        </div>
                    </div>
                </div>                
            </div>
        {/hook}
        {assign var="form_close" value="form_close_`$obj_id`"}
        {$smarty.capture.$form_close nofilter}
        </div>
    {/if}
    </div>
{/foreach}
{if $show_empty && $smarty.foreach.sprod.last}
    {assign var="iteration" value=$smarty.foreach.sproducts.iteration}
    {capture name="iteration"}{$iteration}{/capture}
    {hook name="products:products_multicolumns_extra"}
    {/hook}
    {assign var="iteration" value=$smarty.capture.iteration}
{/if}
{/foreach}
{/strip}
</div>

{if !$no_pagination}
    {include file="common/pagination.tpl"}
{/if}

{/if}

{capture name="mainbox_title"}{$title}{/capture}