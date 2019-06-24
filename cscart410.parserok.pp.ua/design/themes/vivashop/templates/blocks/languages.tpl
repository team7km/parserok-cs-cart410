{if $languages && $languages|count > 1}
<div id="languages_{$block.block_id}" class="vs-languages {if $languages|count <= $dropdown_limit || $dropdown_limit == 0}vs-languages-dropdown{/if}">
        <div class="{if $dropdown_limit > 0 && $languages|count <= $dropdown_limit}hidden-tablet hidden-phone{else}hidden{/if}">
            <div class="ty-select-wrap ty-languages clearfix">
                {if $text}<span class="text">{$text}:</span>{/if}
                {foreach from=$languages key=code item=language}
                    <a href="{$config.current_url|fn_link_attach:"sl=`$language.lang_code`"}" title="{__("change_language")}" class="ty-languages__item{if $format == "icon"} ty-languages__icon-link{/if}{if $smarty.const.DESCR_SL == $code} ty-languages__active{/if}"><i class="ty-flag ty-flag-{$language.country_code|lower}"></i>{if $format == "name"}{$language.name}{/if}</a>
                {/foreach}
            </div>
        </div>
        <div class="{if $dropdown_limit > 0 && $languages|count <= $dropdown_limit}hidden-desktop{/if}">

            {if $format == "name"}
                {assign var="key_name" value="name"}
            {else}
                {assign var="key_name" value=""}
            {/if}
            <div class="ty-select-wrap">{include file="common/select_object.tpl" style="graphic" suffix="language" link_tpl=$config.current_url|fn_link_attach:"sl=" items=$languages selected_id=$smarty.const.CART_LANGUAGE display_icons=true key_name=$key_name language_var_name="sl" vs_exclude_active=true}</div>
        </div>
    
<!--languages_{$block.block_id}--></div>
{/if}
