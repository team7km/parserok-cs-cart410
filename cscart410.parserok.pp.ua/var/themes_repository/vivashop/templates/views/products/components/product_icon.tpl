{capture name="product_detail_view_url"}
{** Sets product detail view link *}
{hook name="products:product_detail_view_url"}
{"products.view?product_id=`$product.product_id`"}
{/hook}
{/capture}

{$product_detail_view_url = $smarty.capture.product_detail_view_url|trim}

{capture name="main_icon"}
    <a href="{"$product_detail_view_url"|fn_url}">
        {include file="common/image.tpl" obj_id=$obj_id_prefix images=$product.main_pair image_width=$settings.Thumbnails.product_lists_thumbnail_width image_height=$settings.Thumbnails.product_lists_thumbnail_height vs_lazy_mobile=true}
    </a>
{/capture}

{if $product.image_pairs && $show_gallery}
<div class="ty-center-block">
    <div class="ty-thumbs-wrapper cm-image-gallery" data-ca-items-count="1" data-ca-items-responsive="true" id="icons_{$obj_id_prefix}">
        {if $product.main_pair}
            <div class="cm-gallery-item cm-item-gallery">
                {$smarty.capture.main_icon nofilter}
            </div>
        {/if}
        {foreach from=$product.image_pairs item="image_pair"}
            {if $image_pair}
                <div class="cm-gallery-item cm-item-gallery">
                    <a href="{"$product_detail_view_url"|fn_url}">
                        {include file="common/image.tpl" no_ids=true images=$image_pair image_width=$settings.Thumbnails.product_lists_thumbnail_width image_height=$settings.Thumbnails.product_lists_thumbnail_height lazy_load=true}
                    </a>
                </div>
            {/if}
        {/foreach}
    </div>
</div>
{elseif $product.image_pairs && $show_vs_gallery}
    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="vs-image-auto-scroller">
        {include file="common/image.tpl" obj_id=$obj_id_prefix images=$product.main_pair image_width=$settings.Thumbnails.product_lists_thumbnail_width image_height=$settings.Thumbnails.product_lists_thumbnail_height class="primary active" vs_lazy_mobile=true}
        {foreach from=$product.image_pairs item="image_pair"}
            {include file="common/image.tpl" obj_id="`$obj_id_prefix`_`$image_pair.pair_id`" images=$image_pair image_width=$settings.Thumbnails.product_lists_thumbnail_width image_height=$settings.Thumbnails.product_lists_thumbnail_height class="additional" vs_lazy_additional=true}
        {/foreach}
    </a>
{else}
    {$smarty.capture.main_icon nofilter}
{/if}