{assign var="dropdown_id" value=$block.snapping_id}
{assign var="r_url" value=$config.current_url|escape:url}


{hook name="checkout:cart_content"}
<div class="ty-dropdown-box" id="cart_status_{$dropdown_id}">
    <a href="{"checkout.cart"|fn_url}" id="sw_dropdown_{$dropdown_id}" class="ty-dropdown-box__title cm-combination">
        {hook name="checkout:dropdown_title"}
            {if $smarty.session.cart.amount}
                <span class="minicart-title hand">{__("my_cart")}</span>
                <span class="cart-content">{$smarty.session.cart.amount}&nbsp;{__("items")}<span class="vs-cart-price">&nbsp;-&nbsp;{include file="common/price.tpl" value=$smarty.session.cart.display_subtotal}</span></span><i class="vs-icon-top-cart"></i>
            {else}
                <span class="minicart-title empty-cart hand">{__("my_cart")}</span>
                <span class="cart-content">0&nbsp;{__("items")}<span class="vs-cart-price">&nbsp;-&nbsp;{include file="common/price.tpl" value=$smarty.session.cart.display_subtotal}</span></span><i class="vs-icon-top-cart"></i>
            {/if}        
        {/hook}
        {strip}
        <div class="vs-cart-content hidden-desktop">
            <span class="vs-cart-content-nr">
                {if $smarty.session.cart.amount}
                    {$smarty.session.cart.amount}
                {else}
                    0
                {/if}
            </span>
        </div>
        {/strip}
    </a>
    <div id="dropdown_{$dropdown_id}" class="cm-popup-box ty-dropdown-box__content hidden">
        {hook name="checkout:minicart"}
            <i class="ty-icon-up-dir"></i>
            <div class="cm-cart-content {if $block.properties.products_links_type == "thumb"}cm-cart-content-thumb{/if} {if $block.properties.display_delete_icons == "Y"}cm-cart-content-delete{/if}">
                    <div class="ty-cart-items">
                        {if $smarty.session.cart.amount}
                            <ul class="ty-cart-items__list">
                                {hook name="index:cart_status"}
                                    {assign var="_cart_products" value=$smarty.session.cart.products|array_reverse:true}
                                    {foreach from=$_cart_products key="key" item="product" name="cart_products"}
                                        {hook name="checkout:minicart_product"}
                                        {if !$product.extra.parent}
                                            <li class="ty-cart-items__list-item clearfix">
                                                {hook name="checkout:minicart_product_info"}
                                                {if $block.properties.products_links_type == "thumb"}
                                                    <div class="ty-cart-items__list-item-image">
                                                        <a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="vs-cart-product-image">
                                                            {include file="common/image.tpl" image_width="60" image_height="60" images=$product.main_pair no_ids=true}
                                                        </a>
                                                    </div>
                                                {/if}
                                                <div class="ty-cart-items__list-item-desc">
                                                    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="vs-cart-product-title">{$product.product_id|fn_get_product_name nofilter}</a>
                                                <p class="vs-cart-product-qty">
                                                    <span>{$product.amount}</span><span>&nbsp;x&nbsp;</span>{include file="common/price.tpl" value=$product.display_price span_id="price_`$key`_`$dropdown_id`" class="top-cart-price"}
                                                </p>
                                                </div>
                                                {if $block.properties.display_delete_icons == "Y"}
                                                    <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
                                                        {if (!$runtime.checkout || $force_items_deletion) && !$product.extra.exclude_from_calculate}
                                                            {include file="buttons/button.tpl" but_href="checkout.delete.from_status?cart_id=`$key`&redirect_url=`$r_url`" but_meta="cm-ajax cm-ajax-full-render" but_target_id="cart_status*" but_role="delete" but_name="delete_cart_item"}
                                                        {/if}
                                                    </div>
                                                {/if}
                                                {/hook}
                                            </li>
                                        {/if}
                                        {/hook}
                                    {/foreach}
                                {/hook}
                            </ul>                            
                        {else}
                            <p class="ty-center vs-cart-empty-text">{__("cart_is_empty")}</p>
                        {/if}
                    </div>

                    {if $block.properties.display_bottom_buttons == "Y"}
                    <div class="cm-cart-buttons ty-cart-content__buttons buttons-container{if $smarty.session.cart.amount} full-cart{else} hidden{/if}">
                        <div class="ty-float-left view-cart-button">
                            <a href="{"checkout.cart"|fn_url}" rel="nofollow" class="view-cart">{__("view_cart")}</a>
                        </div>
                        {if $settings.General.checkout_redirect != "Y"}
                        <div class="ty-float-right">
                                <a href="{"checkout.checkout"|fn_url}" rel="nofollow" class="ty-btn ty-btn__primary">{__("checkout")}</a>
                        </div>
                        {/if}
                    </div>
                    {/if}

            </div>
        {/hook}
    </div>
<!--cart_status_{$dropdown_id}--></div>
{/hook}
