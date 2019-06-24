{$show_city = false}
{$show_state = false}
{$show_country = false}

{foreach $items["ProfileFieldSections::SHIPPING_ADDRESS"|enum] as $profile_field}
    {if $profile_field.field_name == "s_city"}
        {$show_city = true}
    {elseif $profile_field.field_name == "s_state"}
        {$show_state = true}
    {elseif $profile_field.field_name == "s_country"}
        {$show_country = true}
    {/if}
{/foreach}

{include
    file="views/checkout/components/customer/location.tpl"
    show_city=$show_city
    show_state=$show_state
    show_country=$show_country
    block_title=$block.name
}
