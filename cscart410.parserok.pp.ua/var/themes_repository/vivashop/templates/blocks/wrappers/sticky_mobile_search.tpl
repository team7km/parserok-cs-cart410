{if $content|trim}
    {assign var="dropdown_id" value=$block.snapping_id}
    <div class="ty-dropdown-box vs-mobile-search {if $block.user_class} {$block.user_class}{/if}{if $content_alignment == "RIGHT"} ty-float-right{elseif $content_alignment == "LEFT"} ty-float-left{/if} hidden visible-phone">
        <div id="sw_dropdown_{$dropdown_id}" class="ty-dropdown-box__title cm-combination {if $header_class}{$header_class}{/if} clearfix">
            {hook name="wrapper:onclick_dropdown_title"}
            {if $smarty.capture.title|trim}
                {$smarty.capture.title nofilter}
            {else}
                <a><i class="ty-icon-search"></i></a>
            {/if}
            {/hook}
        </div>
        <div id="dropdown_{$dropdown_id}" class="cm-popup-box ty-dropdown-box__content hidden clearfix">
            {$content|default:"&nbsp;" nofilter}
        </div>
    </div>
    <div class="ty-dropdown-box vs-mobile-search {if $block.user_class} {$block.user_class}{/if}{if $content_alignment == "RIGHT"} ty-float-right{elseif $content_alignment == "LEFT"} ty-float-left{/if} hidden visible-tablet">
        {$content|default:"&nbsp;" nofilter}
    </div>
{/if}