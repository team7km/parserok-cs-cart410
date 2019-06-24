{script src="js/tygh/checkout.js"} {* legacy checkout functionality *}
{script src="js/tygh/checkout/lite_checkout.js"} {* lite checkout functionality *}
{script src="js/tygh/checkout/pickup_selector.js"}
{script src="js/tygh/checkout/pickup_search.js"}

{* login popup *}
{if !$auth.user_id}
    {if $settings.Security.secure_storefront != "partial"}
        <div id="litecheckout_login_block" class="hidden" title="{__("sign_in")}">
            <div class="ty-login-popup">
                {include file="views/auth/login_form.tpl"
                style="popup"
                id="litecheckout_login_block_inner"
                }
            </div>
        </div>
    {/if}
{/if}

<div class="litecheckout litecheckout__form" id="litecheckout_form">
    <h1 class="litecheckout__page-title">{__('checkout')}</h1>
    <div data-ca-lite-checkout-element="form">
        <form name="litechekout_payments_form"
              id="litechekout_payments_form"
              action="{"checkout.place_order"|fn_url}"
              method="post"
              data-ca-lite-checkout-element="checkout-form"
              data-ca-lite-checkout-ready-for-checkout="false"
              class="litecheckout__payment-methods"
        >
            <div
                class="litecheckout__group"
                {if $runtime.customization_mode.block_manager && $location_data.is_frontend_editing_allowed}
                    data-ca-block-manager-grid-id="{$grid.grid_id}"
                {/if}
            >
                {$content nofilter}
            </div>

            <div class="litecheckout__group litecheckout__submit-order" id="litecheckout_final_section">
                {include file="views/checkout/components/final_section.tpl"
                    is_payment_step=true
                    suffix=$payment.payment_id
                }
            <!--litecheckout_final_section--></div>
        <!--litechekout_payments_form--></form>
    </div>
<!--litecheckout_form--></div>
