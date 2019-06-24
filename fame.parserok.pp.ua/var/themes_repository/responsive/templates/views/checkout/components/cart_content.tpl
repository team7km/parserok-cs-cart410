{assign var="result_ids" value="cart*,checkout*"}

<form name="checkout_form" class="cm-check-changes" action="{""|fn_url}" method="post" enctype="multipart/form-data" id="checkout_form">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="{$result_ids}" />

<h1 class="ty-mainbox-title">{__("cart_contents")}</h1>

<div class="buttons-container ty-cart-content__top-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        {include file="buttons/continue_shopping.tpl" but_href=$continue_url|fn_url }
        {include file="buttons/clear_cart.tpl" but_href="checkout.clear" but_role="text" but_meta="cm-confirm ty-cart-content__clear-button"}
    </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        {include file="buttons/update_cart.tpl"
                 but_id="button_cart"
                 but_extra="data-ca-target-url=dispatch[checkout.update]"
                 but_meta="ty-btn--recalculate-cart cm-ajax-send-form cm-post cm-ajax cm-ajax-full-render hidden hidden-phone hidden-tablet"
                 but_href="checkout.update"|fn_url
                 but_target_form="#checkout_form"
        }
        {if $payment_methods}
            {include file="buttons/proceed_to_checkout.tpl"}
        {/if}
    </div>
</div>

{include file="views/checkout/components/cart_items.tpl" disable_ids="button_cart"}

<!--checkout_form--></form>

{include file="views/checkout/components/checkout_totals.tpl" location="cart"}

<div class="buttons-container ty-cart-content__bottom-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        {include file="buttons/continue_shopping.tpl" but_href=$continue_url|fn_url}
    </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        {if $payment_methods}
            {assign var="link_href" value="checkout.checkout"}
            {include file="buttons/proceed_to_checkout.tpl"}
        {/if}
    </div>
</div>
{if $checkout_add_buttons}
    <div class="ty-cart-content__payment-methods payment-methods" id="payment-methods">
        <span class="ty-cart-content__payment-methods-title payment-metgods-or">{__("or_use")}</span>
        <table class="ty-cart-content__payment-methods-block">
            <tr>
                {foreach from=$checkout_add_buttons item="checkout_add_button"}
                    <td class="ty-cart-content__payment-methods-item">{$checkout_add_button nofilter}</td>
                {/foreach}
            </tr>
    </table>
    <!--payment-methods--></div>
{/if}
