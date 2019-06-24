{assign var="th_size" value=$thumbnails_size|default:66}

{if $product.main_pair.icon || $product.main_pair.detailed}
    {assign var="image_pair_var" value=$product.main_pair}
{elseif $product.option_image_pairs}
    {assign var="image_pair_var" value=$product.option_image_pairs|reset}
{/if}

{if $image_pair_var.image_id}
    {assign var="image_id" value=$image_pair_var.image_id}
{else}
    {assign var="image_id" value=$image_pair_var.detailed_id}    
{/if}

{if !$preview_id}
{assign var="preview_id" value=$product.product_id|uniqid}
{/if}
<div class="clearfix">
    {if $vs_vertical}
        <div class="ty-float-right vs-product-main-image">
    {/if}

    {if !$vs_hide_big_image}
<div class="ty-product-img cm-preview-wrapper">
{include file="common/image.tpl" obj_id="`$preview_id`_`$image_id`" images=$image_pair_var link_class="cm-image-previewer" image_width=$image_width image_height=$image_height image_id="preview[product_images_`$preview_id`]"}

{foreach from=$product.image_pairs item="image_pair"}
    {if $image_pair}
        {if $image_pair.image_id}
            {assign var="img_id" value=$image_pair.image_id}
        {else}
            {assign var="img_id" value=$image_pair.detailed_id}            
        {/if}
        {include file="common/image.tpl" images=$image_pair link_class="cm-image-previewer hidden" obj_id="`$preview_id`_`$img_id`" image_width=$image_width image_height=$image_height image_id="preview[product_images_`$preview_id`]"}
    {/if}
{/foreach}
</div>
    {/if}

    {if $vs_vertical}
        {if $et_social}
            <div class="vs-product-social clearfix">
                {hook name="products:product_social"}
                {/hook}
            </div>
        {/if}
    </div>
    {/if}

{if $product.image_pairs}
    {if $settings.Appearance.thumbnails_gallery == "Y"}
    <input type="hidden" name="no_cache" value="1" />
        {strip}
            {if $vs_vertical}
{* Vertical scroller *}
                {if $product.image_pairs|count>4}
                    {assign var="vert_gallery" value=true}
                {/if}
                {if $vert_gallery}
                    <ul class="product-thumbnails center jcarousel-skin cm-image-gallery ty-float-left clearfix" id="images_preview_{$preview_id}" style="{if $vs_vertical}width: {$th_size+2}px{/if}">
                {else}
                    <div class="cm-image-gallery-wrapper {if $product.image_pairs|count>4}ty-inline-block et-temp-hide{/if} vs-vertical ty-float-left clearfix hidden-phone hidden-tablet" style="width: {$th_size+2}px">
                {/if}
            {strip}
                    {if !$vert_gallery}
                        <div class="ty-product-thumbnails cm-image-gallery clearfix" id="images_preview_{$preview_id}" data-ca-items-count="5" data-ca-items-responsive="1">
                    {/if}
                    {if $image_pair_var}
                            {if !$vert_gallery}
                        <div class="cm-item-gallery ty-float-left">
                            {else}
                                <li class="cm-item-gallery">
                            {/if}
                                <a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$image_id}" class="cm-gallery-item cm-thumbnails-mini active ty-product-thumbnails__item">
                            {include file="common/image.tpl" images=$image_pair_var image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$image_id`_mini"}
                            </a>
                            {if !$vert_gallery}
                        </div>
                            {else}
                                </li>
                            {/if}
                    {/if}
                    {if $product.image_pairs}
                            {foreach from=$product.image_pairs item="image_pair"}{strip}
                            {if $image_pair}
                                    {if !$vert_gallery}
                                <div class="cm-item-gallery ty-float-left">
                                    {else}
                                        <li class="cm-item-gallery">
                                    {/if}
                                    {if $image_pair.image_id}
                                        {assign var="img_id" value=$image_pair.image_id}
                                    {else}
                                        {assign var="img_id" value=$image_pair.detailed_id}
                                    {/if}
                                    <a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$img_id}" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item">
                                    {include file="common/image.tpl" images=$image_pair image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$img_id`_mini"}
                                    </a>
                                    {if !$vert_gallery}
                                </div>
                                    {else}
                                        </li>
                            {/if}
                                {/if}
                            {/strip}{/foreach}
                        {/if}
                        {if !$vert_gallery}
                            </div>
                        {else}
                            </ul>
                        {/if}
                {/strip}
                {if !$vert_gallery}
                    </div>
                {/if}
            {/strip}
            {/if}
{* Horizontal scroller *}
            <div class="clearfix"></div>
            {if $vs_vertical}<div class="hidden-desktop">{/if}
                <div class="cm-image-gallery-wrapper {if $product.image_pairs|count>4}ty-inline-block et-temp-hide{/if} vs-horizontal clearfix">
                {strip}
                    <div class="ty-product-thumbnails cm-image-gallery clearfix {if $language_direction == 'rtl'}is-rtl{/if}" id="images_preview_{$preview_id}" data-ca-items-count="5" data-ca-items-responsive="1">
                        {if $image_pair_var}
                            <div class="cm-item-gallery ty-float-left 1">
                                    <a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$image_id}" class="cm-gallery-item cm-thumbnails-mini active ty-product-thumbnails__item">
                                {include file="common/image.tpl" images=$image_pair_var image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$image_id`_mini"}
                                </a>
                            </div>
                        {/if}
                        {if $product.image_pairs}
                            {foreach from=$product.image_pairs item="image_pair"}{strip}
                                {if $image_pair}
                                    <div class="cm-item-gallery ty-float-left 2">
                                        {if $image_pair.image_id}
                                            {assign var="img_id" value=$image_pair.image_id}
                                        {else}
                                            {assign var="img_id" value=$image_pair.detailed_id}
                                        {/if}
                                        <a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$img_id}" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item">
                                        {include file="common/image.tpl" images=$image_pair image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$img_id`_mini"}
                                        </a>
                                    </div>
                                {/if}
                            {/strip}{/foreach}
                    {/if}
                </div>
            {/strip}
            </div>
            {if $vs_vertical}</div>{/if}
        {/strip}
    {else}
        <div class="ty-product-thumbnails ty-center cm-image-gallery" id="images_preview_{$preview_id}" style="width: {$image_width}px;">
        {strip}            
            {if $image_pair_var}
                <a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$image_id}" class="cm-thumbnails-mini active ty-product-thumbnails__item">
                {include file="common/image.tpl" images=$image_pair_var image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$image_id`_mini"}
            </a>
            {/if}

            {if $product.image_pairs}
                {foreach from=$product.image_pairs item="image_pair"}
                    {if $image_pair}
                            {if $image_pair.image_id == 0}
                                {assign var="img_id" value=$image_pair.detailed_id}
                            {else}
                                {assign var="img_id" value=$image_pair.image_id}
                            {/if}
                                <a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$img_id}" class="cm-thumbnails-mini ty-product-thumbnails__item">
                            {include file="common/image.tpl" images=$image_pair image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$img_id`_mini"}
                            </a>
                    {/if}
                {/foreach}
            {/if}
        {/strip}
        </div>
    {/if}
{/if}
</div>

{include file="common/previewer.tpl"}
{if $vs_vertical}
    {script src="design/themes/{$settings.theme_name}/js/vs-product_image_gallery_vertical.js"}
{else}
    {script src="design/themes/{$settings.theme_name}/js/vs-product_image_gallery.js"}
{/if}
{hook name="products:product_images"}{/hook}