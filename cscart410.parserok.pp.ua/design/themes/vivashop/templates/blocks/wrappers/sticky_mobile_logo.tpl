{if $content|trim}
    {assign var="dropdown_id" value=$block.snapping_id}
    <div class="vs-mobile-logo {if $block.user_class} {$block.user_class}{/if}{if $content_alignment == "RIGHT"} ty-float-right{elseif $content_alignment == "LEFT"} ty-float-left{/if}">
            {$content|default:"&nbsp;" nofilter}
    </div>
{/if}