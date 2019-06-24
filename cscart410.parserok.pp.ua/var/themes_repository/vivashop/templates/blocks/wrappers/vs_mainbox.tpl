{if $content|trim}
    {if $anchor}
    <a name="{$anchor}"></a>
    {/if}
    <div class="vs-mainbox-general clearfix{if isset($hide_wrapper)} cm-hidden-wrapper{/if}{if $hide_wrapper} hidden{/if}{if $details_page} details-page{/if}{if $block.user_class} {$block.user_class}{/if}{if $content_alignment == "RIGHT"} ty-float-right{elseif $content_alignment == "LEFT"} ty-float-left{/if}">
        {if $title || $smarty.capture.title|trim}
            <h1 class="vs-mainbox-title clearfix">
                <span>{$title nofilter}</span>
            </h1>
        {/if}
        <div class="vs-mainbox-body clearfix">{$content nofilter}</div>
    </div>
{/if}