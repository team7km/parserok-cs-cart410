<div id="breadcrumbs_{$block.block_id}">

{if $breadcrumbs && $breadcrumbs|@sizeof > 1}
    <div class="ty-breadcrumbs clearfix">
        {strip}
            {if $language_direction == 'rtl'}
                {$breadcrumbs=array_reverse($breadcrumbs)}
            {/if}
            {foreach from=$breadcrumbs item="bc" name="bcn" key="key"}
                {if $key != "0"}
                    {if $language_direction == 'rtl'}
                        <i class="vs-icon-arrow-left"></i>
                    {else}
                        <i class="vs-icon-arrow-right"></i>
                    {/if}
                {/if}
                {if $bc.link}
                    <a href="{$bc.link|fn_url}" class="ty-breadcrumbs__a{if $additional_class} {$additional_class}{/if}"{if $bc.nofollow} rel="nofollow"{/if}>{$bc.title|strip_tags|escape:"html" nofilter}</a>
                {else}
                    <span class="ty-breadcrumbs__current">{$bc.title|strip_tags|escape:"html" nofilter}</span>
                {/if}
            {/foreach}
            {include file="common/view_tools.tpl"}
        {/strip}
    </div>
{/if}

<!--breadcrumbs_{$block.block_id}--></div>
