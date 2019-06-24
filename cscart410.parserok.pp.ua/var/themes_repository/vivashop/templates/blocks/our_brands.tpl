{assign var="obj_prefix" value="`$block.block_id`000"}

    <div id="scroll_list_{$block.block_id}" class="owl-carousel">
        {foreach from=$brands item="brand" name="for_brands"}
            <div class="jscroll-item animate scale">
                {assign var="obj_id" value="scr_`$block.block_id`000`$brand.variant_id`"}
                {include file="common/image.tpl" assign="object_img" class="ty-grayscale" image_width=$block.properties.thumbnail_width image_height=$block.properties.thumbnail_width images=$brand.image_pair no_ids=true vs_lazy=true}
                <div class="ty-center">
                    <a href="{"product_features.view?variant_id=`$brand.variant_id`"|fn_url}">{$object_img nofilter}</a>
                </div>
            </div>
        {/foreach}
    </div>

{include file="common/scroller_init.tpl" items=$brands}