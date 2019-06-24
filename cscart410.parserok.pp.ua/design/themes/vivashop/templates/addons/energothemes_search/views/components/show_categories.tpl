{foreach from=$cid|fn_get_subcategories item="cat"}
    <option value="{$cat.category_id}" {if $mode == "search" && $smarty.request.cid == $cat.category_id}selected="selected"{elseif $smarty.request.category_id == $cat.category_id}selected="selected"{/if} title="{$cat.category nofilter}">
            {$spacer nofilter}{$cat.category|truncate:100:"...":true nofilter}
    </option>
    {if $level<$max_level}
        {include file="addons/energothemes_search/views/components/show_categories.tpl" level=$level+1 cid=$cat.category_id spacer="`$spacer``$o_spacer`"}
    {/if}
{/foreach}
