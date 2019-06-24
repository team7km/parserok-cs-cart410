{if $show_city|default:true}
    <div class="litecheckout__field litecheckout__field--fill">
        <input type="text"
               data-ca-lite-checkout-field="user_data.s_city"
               id="litecheckout_city"
               data-ca-lite-checkout-element="city"
               data-ca-lite-checkout-last-value="{$city}"
               placeholder=" "
               value="{$city}"
               class="litecheckout__input"
        />
        <label class="litecheckout__label cm-required" for="litecheckout_city">{__("city")} </label>
    </div>
{/if}

{if $show_city|default:true || $show_state|default:true}
    {include file="views/profiles/components/profiles_scripts.tpl"}
{/if}

{if $show_state|default:true}
    <div class="litecheckout__field litecheckout__field--xsmall">
        <select data-ca-lite-checkout-field="user_data.s_state"
                class="cm-state cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
                data-ca-lite-checkout-element="state"
                data-ca-lite-checkout-is-state-code-container="true"
                data-ca-lite-checkout-last-value="{$state}"
                id="litecheckout_state"
        >
            <option disabled>{__("select_state")}</option>
            {foreach $states[$country] as $country_state}
                <option value="{$country_state.code}"
                        {if $country_state.code === $state}selected{/if}
                >{$country_state.state}</option>
            {/foreach}
        </select>

        <input type="text"
               data-ca-lite-checkout-field="user_data.s_state"
               id="litecheckout_state_d"
               data-ca-lite-checkout-element="state"
               data-ca-lite-checkout-is-state-code-container="false"
               data-ca-lite-checkout-last-value="{$state}"
               placeholder=" "
               value="{$state}"
               class="cm-state cm-location-shipping litecheckout__input hidden"
               disabled
        />

        <label class="litecheckout__label cm-required" for="litecheckout_state">{__("state")} </label>
    </div>
{/if}
