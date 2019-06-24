{if $content|trim}
    {if $anchor}
    <a name="{$anchor}"></a>
    {/if}
    <div class="vs-blog-scroller-container vs-scroller-container clearfix{if isset($hide_wrapper)} cm-hidden-wrapper{/if}{if $hide_wrapper} hidden{/if}{if $details_page} details-page{/if}{if $block.user_class} {$block.user_class}{/if}{if $content_alignment == "RIGHT"} ty-float-right{elseif $content_alignment == "LEFT"} ty-float-left{/if}">
        {if $title || $smarty.capture.title|trim}
            <h2 class="vs-mainbox-title clearfix">
                <i class="vs-icon-blog"></i><span>{$title nofilter}</span>
            </h2>
        {/if}
        <div class="vs-mainbox-body clearfix">{$content nofilter}</div>
    </div>
{/if}