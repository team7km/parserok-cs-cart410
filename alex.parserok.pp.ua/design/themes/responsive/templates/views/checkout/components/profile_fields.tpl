{if $profile_fields[$section]}
    {$fields = []}
    {$name_fields = []}
    {$name_field_names = ["firstname", "lastname", "s_firstname", "s_lastname", "b_firstname", "b_lastname"]}

    {foreach $profile_fields[$section] as $field_id => $field}
        {if $exclude && in_array($field.field_name, $exclude) || $include && !in_array($field.field_name, $include)}
            {continue}
        {/if}

        {if in_array($field.field_name, $name_field_names)}
            {$name_fields[$field_id] = $field}
        {else}
            {$fields[$field_id] = $field}
        {/if}
    {/foreach}

    {$prefix = ""}
    {if $section == "ProfileFieldSections::SHIPPING_ADDRESS"|enum}
        {$prefix = "s_"}
    {elseif $section == "ProfileFieldSections::BILLING_ADDRESS"|enum}
        {$prefix = "b_"}
    {/if}

    {$first_and_last_name_exists = $name_fields|count == 2}
    {if $first_and_last_name_exists}
        {$fullname_field = reset($name_fields)}
        {$name_field_id = key($name_fields)}
        {$fullname_field["field_name"] = "`$prefix`fullname"}
        {$fullname_field["description"] = __("{$prefix}fullname")}
        {$fields[$name_field_id] = $fullname_field}
        {$fullname_field_value = "{$user_data["`$prefix`firstname"]} {$user_data["`$prefix`lastname"]}"|trim}
    {else}
        {$fields = $fields + $name_fields}
    {/if}

    {$fields = $fields|sort_by:"#position"}

    {foreach $fields as $field_id => $field}
        {$type = "text"}
        {$input_meta = ""}
        {$label_meta = ""}

        {$field_type_class_postfix = "litecheckout__field--"}

        {if $field.field_type == "ProfileFieldTypes::PHONE"|enum}
            {$type = "tel"}
            {$label_meta = " cm-mask-phone-label"}
            {$input_meta = " cm-mask-phone"}
            {$field_type_class_postfix = "{$field_type_class_postfix}input"}
        {elseif $field.field_type == "ProfileFieldTypes::EMAIL"|enum}
            {$type = "text"}
            {$label_meta = " cm-email"}
            {$field_type_class_postfix = "{$field_type_class_postfix}input"}
        {elseif $field.field_type == "ProfileFieldTypes::CHECKBOX"|enum}
            {$field_type_class_postfix = "{$field_type_class_postfix}checkbox"}
        {elseif $field.field_type == "ProfileFieldTypes::DATE"|enum}
            {$field_type_class_postfix = "{$field_type_class_postfix}date"}
        {elseif $field.field_type == "ProfileFieldTypes::INPUT"|enum}
            {$field_type_class_postfix = "{$field_type_class_postfix}input"}
        {elseif $field.field_type == "ProfileFieldTypes::PASSWORD"|enum}
            {$field_type_class_postfix = "{$field_type_class_postfix}password"}
        {elseif $field.field_type == "ProfileFieldTypes::RADIO"|enum}
            {$field_type_class_postfix = "{$field_type_class_postfix}radio"}
        {elseif $field.field_type == "ProfileFieldTypes::SELECT_BOX"|enum}
            {$field_type_class_postfix = "{$field_type_class_postfix}selectbox"}
        {elseif $field.field_type == "ProfileFieldTypes::TEXT_AREA"|enum}
            {$field_type_class_postfix = "{$field_type_class_postfix}textarea"}
        {elseif $field.field_type == "ProfileFieldTypes::POSTAL_CODE"|enum}
            {$field_type_class_postfix = "{$field_type_class_postfix}input"}
        {elseif $field.field_type == "ProfileFieldTypes::ADDRESS_TYPE"|enum}
            {$field_type_class_postfix = "{$field_type_class_postfix}radio"}
        {/if}

        {* fallback *}
        {if $field_type_class_postfix === "litecheckout__field--"}
            {$field_type_class_postfix = "{$field_type_class_postfix}custom"}
        {/if}

        {if $field.checkout_required == "Y" || $field.checkout_required == "1"}
            {$label_meta = "`$label_meta` cm-required"}
        {/if}

        {if $field.is_default == "YesNo::YES"|enum}
            {$field_name = "user_data[`$field.field_name`]"}
            {$field_value = $user_data[$field.field_name]}
            {$field_name_helper = "user_data.`$field.field_name`"}
        {else}
            {$field_name = "user_data[fields][`$field.field_id`]"}
            {$field_value = $user_data["fields"][$field.field_id]}
            {$field_name_helper = "user_data.fields.`$field.field_id`"}
        {/if}

        {if $field.field_name == "`$prefix`fullname"}
            {$field_value = $fullname_field_value}
        {/if}

        {$wrapper_class = $field.wrapper_class}
        {if !$wrapper_class}
            {$wrapper_class = "litecheckout__field--small"}
            {if $field.field_type == "ProfileFieldTypes::TEXT_AREA"|enum}
                {$wrapper_class = "litecheckout__field--full"}
            {/if}
        {/if}

        {$field_id = "litecheckout_`$field.field_name`"}
        
        <div class="litecheckout__field {$wrapper_class} {$field_type_class_postfix}">
            {if $field.field_type == "ProfileFieldTypes::TEXT_AREA"|enum}
                <textarea class="litecheckout__input{if $field.class} {$field.class}{/if}"
                          id="{$field_id}"
                          autocomplete="{$field.autocomplete}"
                          name="{$field_name}"
                          placeholder=" "
                          data-ca-lite-checkout-field="{$field_name_helper}"
                          data-ca-lite-checkout-auto-save="true"
                          aria-label="{$field.description}"
                          title="{$field.description}"
                >{$field_value}</textarea>
            {elseif $field.field_type == "ProfileFieldTypes::CHECKBOX"|enum}
                <input type="hidden" name="{$field_name}" value="{"YesNo::NO"|enum}" data-ca-lite-checkout-field="{$field_name_helper}" />
                <input class="litecheckout__input{if $field.class} {$field.class}{/if}"
                       id="{$field_id}"
                       type="checkbox"
                       name="{$field_name}"
                       value="{"YesNo::YES"|enum}"
                       data-ca-lite-checkout-field="{$field_name_helper}"
                       data-ca-lite-checkout-auto-save="true"
                       autocomplete="{$field.autocomplete}"
                       aria-label="{$field.description}"
                       title="{$field.description}"
                       {if $field_value == "YesNo::YES"|enum}checked{/if}
                />
            {elseif $field.field_type == "ProfileFieldTypes::DATE"|enum}
                {$extra = "data-ca-lite-checkout-field=`$field_name_helper` data-ca-lite-checkout-auto-save=true data-ca-lite-checkout-auto-save-on-change=true"}
                {$date_meta = "litecheckout__input{if $field.class} {$field.class}{/if}"}
                {include
                    file="common/calendar.tpl"
                    date_id="`$field_id`"
                    date_name=$field_name
                    date_val=$field_value
                    date_meta=$date_meta
                    extra=$extra
                }
            {elseif $field.field_type == "ProfileFieldTypes::RADIO"|enum}
                {foreach $field.values as $value => $name}
                    <label for="{$field_id}_{$value}">
                        <input class="radio litecheckout__input{if $field.class} {$field.class}{/if}"
                           type="radio"
                           id="{$field_id}_{$value}"
                           name="{$field_name}"
                           value="{$value}"
                           data-ca-lite-checkout-field="{$field_name_helper}"
                           data-ca-lite-checkout-auto-save-on-change="true"
                           {if (!$field_value && $name@first) || $field_value == $value}checked{/if}
                        />
                        {$name}
                    </label>
                {/foreach}
            {elseif $field.field_type == "ProfileFieldTypes::SELECT_BOX"|enum}
                <select class="litecheckout__input{if $field.class} {$field.class}{/if}"
                        autocomplete="{$field.autocomplete}"
                        id="{$field_id}"
                        data-ca-lite-checkout-field="{$field_name_helper}"
                        data-ca-lite-checkout-auto-save-on-change="true"
                        aria-label="{$field.description}"
                        title="{$field.description}"
                        name="{$field_name}"
                >
                    {if $field.required == "YesNo::NO"|enum}
                        <option value="">--</option>
                    {/if}
                    {foreach $field.values as $value => $name}
                        <option {if $field_value == $value}selected{/if} value="{$value}">{$name}</option>
                    {/foreach}
                </select>
            {elseif $field.field_type == "ProfileFieldTypes::ADDRESS_TYPE"|enum}
                <label for="{$field_id}_residential">
                    <input class="radio litecheckout__input{if $field.class} {$field.class}{/if}"
                       type="radio"
                       id="{$field_id}_residential"
                       name="{$field_name}"
                       value="residential"
                       data-ca-lite-checkout-field="{$field_name_helper}"
                       data-ca-lite-checkout-auto-save-on-change="true"
                       {if !$field_value || $field_value == "residential"}checked{/if}
                    />
                    {__("address_residential")}
                </label>
                <label for="{$field_id}_commercial">
                    <input class="radio litecheckout__input{if $field.class} {$field.class}{/if}"
                        type="radio"
                        id="{$field_id}_commercial"
                        name="{$field_name}"
                        value="commercial"
                        data-ca-lite-checkout-field="{$field_name_helper}"
                        data-ca-lite-checkout-auto-save-on-change="true"
                        {if $field_value == "commercial"}checked{/if}
                    />
                    {__("address_commercial")}
                </label>
            {else}
                <input class="litecheckout__input{if $field.class} {$field.class}{/if}{$input_meta}"
                       placeholder=" "
                       id="{$field_id}"
                       type="{$type}"
                       name="{$field_name}"
                       value="{$field_value}"
                       data-ca-lite-checkout-field="{$field_name_helper}"
                       data-ca-lite-checkout-auto-save="true"
                       autocomplete="{$field.autocomplete}"
                       aria-label="{$field.description}"
                       title="{$field.description}"
                />
            {/if}
            <label class="litecheckout__label {$label_meta}" for="{$field_id}">{$field.description}</label>
        </div>
    {/foreach}
{/if}