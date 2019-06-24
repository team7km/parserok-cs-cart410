{if $currencies && $currencies|count > 1}
<div id="currencies_{$block.block_id}" class="vs-currencies">
        <div class="{if $dropdown_limit > 0 && $currencies|count <= $dropdown_limit}hidden-tablet hidden-phone{else}hidden{/if}">
            <div class="ty-currencies">
                {if $text}<div class="ty-currencies__txt">{$text}:</div>{/if}
                {foreach from=$currencies key=code item=currency}
                    <a href="{$config.current_url|fn_link_attach:"currency=`$code`"|fn_url}" rel="nofollow"  class="ty-currencies__item {if $secondary_currency == $code}ty-currencies__active{/if}">{if $format == "name"}{$currency.description}&nbsp;({$currency.symbol nofilter}){else}{$currency.symbol nofilter}{/if}</a>
                {/foreach}
            </div>
        </div>
        <div class="{if $dropdown_limit > 0 && $currencies|count <= $dropdown_limit}hidden-desktop{/if}">
            {if $format == "name"}
                {assign var="key_name" value="description"}
            {else}
                {assign var="key_name" value=""}
            {/if}
            <div class="ty-select-wrapper">{include file="common/select_object.tpl" style="graphic" suffix="currency" link_tpl=$config.current_url|fn_link_attach:"currency=" items=$currencies selected_id=$secondary_currency display_icons=false key_name=$key_name vs_exclude_active=true}</div>
        </div>

<!--currencies_{$block.block_id}--></div>
{/if}