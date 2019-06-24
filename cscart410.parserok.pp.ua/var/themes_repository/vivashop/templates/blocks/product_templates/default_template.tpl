{script src="js/tygh/exceptions.js"}
{$vs_show_call_req=true}
{$vs_show_call_req_prod_tpl=true}
<div class="product-main-info vs-product-main-info-responsive ty-product-block ty-product-detail">
<div class="clearfix">
{hook name="products:view_main_info"}

    {if $product}
        {assign var="obj_id" value=$product.product_id}
        {include file="common/product_data.tpl" product=$product separate_buttons=$separate_buttons|default:true but_role="big" but_text=__("add_to_cart") vs_qty_discount=true}

        {assign var="form_open" value="form_open_`$obj_id`"}
        {$smarty.capture.$form_open nofilter}

        <div class="vs-title clearfix">
            {if !$hide_title}<h1 class="ty-mainbox-title" {live_edit name="product:product:{$product.product_id}"}>{$product.product nofilter}</h1>{/if}
            </div>

        <div class="brand-wrapper clearfix">
            <div class="advanced-options-wrapper ty-float-left clearfix">
                {capture name="vs_features"}
                    {include file="views/products/components/product_features_short_list.tpl" features=$product.header_features no_container=true}
                {/capture}
                {if $smarty.capture.vs_features|trim}
                    <div class="ty-control-group product-list-field">
                        <span class="ty-control-group__item">
                            {$smarty.capture.vs_features nofilter}
                       </span>
                    </div>
                {/if}
            </div>

            <div class="advanced-options-wrapper ty-float-left clearfix">                
                {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                {assign var="advanced_options" value="advanced_options_`$obj_id`"}
                {$smarty.capture.$advanced_options nofilter}

                {if $capture_options_vs_qty}{/capture}{/if}
            </div>

            <div class="vs-stock ty-float-left">
                {assign var="product_amount" value="product_amount_`$obj_id`"}
                {$smarty.capture.$product_amount nofilter}
            </div>

            <div class="sku-options-wrapper vs-sku ty-float-left">
                {assign var="sku" value="sku_`$obj_id`"}
                {$smarty.capture.$sku nofilter}
            </div>
        </div>


        <div class="image-wrap ty-float-left clearfix">
            {hook name="products:image_wrap"}
                {if !$no_images}
                    <div class="image-border ty-center cm-reload-{$product.product_id}" id="product_images_{$product.product_id}_update">
                        {assign var="discount_label" value="discount_label_`$obj_prefix``$obj_id`"}
                        {$smarty.capture.$discount_label nofilter}

                        {include file="views/products/components/product_images.tpl" product=$product show_detailed_link="Y" image_width=$settings.Thumbnails.product_details_thumbnail_width image_height=$settings.Thumbnails.product_details_thumbnail_height}
                    <!--product_images_{$product.product_id}_update--></div>
                {/if}
            {/hook}
        </div>
        <div class="product-info">
            {assign var="old_price" value="old_price_`$obj_id`"}
            {assign var="price" value="price_`$obj_id`"}
            {assign var="clean_price" value="clean_price_`$obj_id`"}
            {assign var="list_discount" value="list_discount_`$obj_id`"}
            {assign var="discount_label" value="discount_label_`$obj_id`"}


            <div class="{if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}prices-container {/if}price-wrap clearfix product-detail-price">
                {if $smarty.capture.$old_price|trim || 
                    $smarty.capture.$clean_price|trim || 
                    $smarty.capture.$list_discount|trim}
                    <div class="product-prices">
                {/if}

                {if !$smarty.capture.$old_price|trim || 
                    $details_page}<p class="actual-price">{/if}
                        {$smarty.capture.$price nofilter}<br/>
                        {$smarty.capture.$clean_price nofilter}
                {if !$smarty.capture.$old_price|trim || 
                    $details_page}</p>{/if}

                {if $smarty.capture.$old_price|trim || 
                    $smarty.capture.$clean_price|trim || 
                    $smarty.capture.$list_discount|trim}
                        {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}
                    </div>
                {/if}

            </div>
            <div class="clearfix et-rating-brand">
                {hook name="products:main_info_title"}
                {/hook}
                {capture name="et_brand"}
                    {include file="views/products/components/product_features_short_list.tpl" features=$product.header_features vs_brand_image=true}
                {/capture}
                {if $smarty.capture.et_brand|trim}
                    <div class="et-brand clearfix">
                        {$smarty.capture.et_brand nofilter}
                    </div>
                {/if}
            </div>

            {if $show_descr}
                {assign var="prod_descr" value="prod_descr_`$obj_id`"}
            {/if}            

            {if $product.promo_text|trim || $show_descr}
                <div class="product-note indented">
                    <div class="note-promo">
                        {$product.promo_text nofilter}
                    </div>
                    <div class="note-descr">
                        {$smarty.capture.$prod_descr nofilter}
                    </div>
                </div>
            {/if}


            {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
            <div class="options-wrapper indented {if !$product.product_options || !$show_product_options}hidden{/if}">
                {assign var="product_options" value="product_options_`$obj_id`"}
                {$smarty.capture.$product_options nofilter}
            </div>
            {if $capture_options_vs_qty}{/capture}{/if}

            {assign var="product_edp" value="product_edp_`$obj_id`"}
            {if $smarty.capture.$product_edp|trim}
                <div class="vs-edp">
                    {$smarty.capture.$product_edp nofilter}
                </div>
            {/if}

            {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
            
            <div class="product-fields-wrapper indented vs-qty clearfix">
                    {assign var="min_qty" value="min_qty_`$obj_id`"}
                {assign var="qty" value="qty_`$obj_id`"}
                {$smarty.capture.$min_qty nofilter}
                {if $smarty.capture.vs_features|trim || ($smarty.capture.$qty|trim && $smarty.capture.$qty|trim!="<span></span>")}
                    <div class="product-fields-group vs-qty-wrapper">
                    {$smarty.capture.$qty nofilter}
                    </div>
                {/if}
                <div class="vs-buttons-wrapper">
                    {$vs_buttons="vs_buttons_product"}
                    {$smarty.capture.$vs_buttons nofilter}
                </div>
            </div>
            {if $capture_options_vs_qty}{/capture}{/if}

            {if $capture_buttons}{capture name="buttons"}{/if}
                <div class="buttons-container {if $settings.General.allow_anonymous_shopping != "allow_shopping" && !$auth.user_id}vs-sign-in-buy{/if}">

                    {if $show_details_button}
                        {include file="buttons/button.tpl" but_href="products.view?product_id=`$product.product_id`" but_text=__("view_details") but_role="submit"}
                    {/if}

                    {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                    {$smarty.capture.$add_to_cart nofilter}

                    {assign var="list_buttons" value="list_buttons_`$obj_id`"}
                    {$smarty.capture.$list_buttons nofilter}

                </div>
            {if $capture_buttons}{/capture}{/if}
            
            {if $show_product_tabs}
            {include file="views/tabs/components/product_popup_tabs.tpl"}
            {$smarty.capture.popupsbox_content nofilter}
            {/if}
            <div class="vs-product-social clearfix">
                {hook name="products:product_social"}
                {/hook}
            </div>
        </div>
        {assign var="form_close" value="form_close_`$obj_id`"}
        {$smarty.capture.$form_close nofilter}

        {if $show_product_tabs}
        {$smarty.capture.popupsbox_hidden_content nofilter}
        {/if}
    {/if}

{/hook}
</div>

{if $smarty.capture.hide_form_changed == "Y"}
    {assign var="hide_form" value=$smarty.capture.orig_val_hide_form}
{/if}

{if $show_product_tabs}
        {hook name="products:product_tabs"}
{include file="views/tabs/components/product_tabs.tpl"}

{if $blocks.$tabs_block_id.properties.wrapper}
    {include file=$blocks.$tabs_block_id.properties.wrapper content=$smarty.capture.tabsbox_content title=$blocks.$tabs_block_id.description}
{else}
    {$smarty.capture.tabsbox_content nofilter}
{/if}
        {/hook}
{/if}
</div>

<div class="product-details">
</div>

{capture name="mainbox_title"}{assign var="details_page" value=true}{/capture}
