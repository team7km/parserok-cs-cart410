{** block-description:tmpl_scroller **}

{if $settings.Appearance.enable_quick_view == "Y" && $block.properties.enable_quick_view == "Y"}
    {$quick_nav_ids = $items|fn_fields_from_multi_level:"product_id":"product_id"}
{/if}

{if $block.properties.hide_add_to_cart_button == "Y"}
        {assign var="_show_add_to_cart" value=false}
    {else}
        {assign var="_show_add_to_cart" value=true}
    {/if}
    {if $block.properties.show_price == "Y"}
        {assign var="_hide_price" value=false}
    {else}
        {assign var="_hide_price" value=true}
{/if}

{assign var="obj_prefix" value="`$block.block_id`000"}
    <div id="scroll_list_{$block.block_id}" class="owl-carousel">
        {foreach from=$items item="product" name="for_products"}
            {hook name="products:product_scroller_list"}
            <div class="jscroll-item vs-grid">
                {assign var="obj_id" value="scr_`$block.block_id`000`$product.product_id`"}                
                <div class="ty-center scroll-image animate carousel-scroll-animations">
                    {if $product.list_discount_prc || $product.discount_prc}
                        {strip}
                        <div class="thumb-discount-label">
                            {if $language_direction == 'rtl'}
                                <span>-%{if $product.list_discount_prc}{$product.list_discount_prc}{elseif $product.discount_prc}{$product.discount_prc}{/if}</span>
                            {else}
                            <span>-{if $product.list_discount_prc}{$product.list_discount_prc}{elseif $product.discount_prc}{$product.discount_prc}{/if}%</span>
                            {/if}
                        </div>
                        {/strip}
                    {/if}

                    {assign var="additional_images" value=$product.product_id|fn_get_image_pairs:'product':'A':true:true}

                    {include file="common/image.tpl" assign="object_img" images=$product.main_pair image_width=$block.properties.thumbnail_width image_height=$block.properties.thumbnail_width no_ids=true class="primary active" vs_lazy=true}
                    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="{if !empty($product.main_pair)}vs-image-auto-scroller{/if}">
                        {$object_img nofilter}
                        {foreach from=$additional_images item="image"}
                            {include file="common/image.tpl" images=$image image_width=$block.properties.thumbnail_width image_height=$block.properties.thumbnail_width no_ids=true class="additional" vs_lazy_additional=true}
                        {/foreach}
                    </a>
                </div>

                <div class="center compact">
                    {strip}
                        {include file="blocks/list_templates/simple_list.tpl" 
                        product=$product 
                        show_trunc_name=true 
                        show_price=true 
                        show_add_to_cart=$_show_add_to_cart 
                        but_role="action" 
                        hide_price=$_hide_price 
                        hide_qty=true
                        show_rating=true
                        show_clean_price=true
                        show_list_discount=true
                        show_old_price=true
                        show_price_values=true
                        show_list_buttons=true
                        show_vs_icon_buttons=true
                        vs_separate_buttons=true}

                    {/strip}
                </div>
            </div>              
        {/hook}
        {/foreach}
    </div>

{include file="common/scroller_init.tpl"}