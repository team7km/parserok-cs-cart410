{if !$show_profiles_on_checkout}
    <div class="litecheckout__container">
        <div class="litecheckout__group" id="litecheckout_step_location">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title">{$block_title|default:__("lite_checkout.deliver_to")}</h2>
                </div>

                {hook name="checkout:location_city"}
                {if $city_autocomplete && $show_city|default:true && $show_state|default:true}
                    {include file = "views/checkout/components/shippings/city_autocomplete.tpl"
                        city = $user_data.s_city
                        state_descr = $user_data.s_state_descr
                        state = $user_data.s_state
                        zipcode = $user_data.s_zipcode
                        country = $user_data.s_country
                        states = $states
                        city_autocomplete = $city_autocomplete
                    }
                {else}
                    {include file = "views/checkout/components/shippings/city_plain.tpl"
                        city = $user_data.s_city
                        state_descr = $user_data.s_state_descr
                        state = $user_data.s_state
                        country = $user_data.s_country
                        states = $states
                    }
                {/if}
                {/hook}

                {hook name="checkout:location_country"}
                {if $show_country|default:true}
                    <div class="litecheckout__field litecheckout__field--auto">
                        <select data-ca-lite-checkout-field="user_data.s_country"
                                class="cm-country cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
                                data-ca-lite-checkout-element="country"
                                required
                                id="litecheckout_country"
                        >
                            <option disabled>{__("select_country")}</option>
                            {foreach $countries as $code => $country}
                                <option value="{$code}"
                                        {if $user_data.s_country == $code}selected="selected"{/if}
                                >{$country}</option>
                            {/foreach}
                        </select>

                        <label class="litecheckout__label cm-required" for="litecheckout_country">{__("country")}: </label>
                    </div>
                {/if}
                {/hook}
            </div>

            <div id="litecheckout_autocomplete_dropdown" class="litecheckout__autocomplete-dropdown"></div>
        <!--litecheckout_step_location--></div>
    </div>
{/if}
