{if $content|trim}
    {if $anchor}
    <a name="{$anchor}"></a>
    {/if}
    <div class="vs-footerbox clearfix{if isset($hide_wrapper)} cm-hidden-wrapper{/if}{if $hide_wrapper} hidden{/if}{if $details_page} details-page{/if}{if $block.user_class} {$block.user_class}{/if}{if $content_alignment == "RIGHT"} ty-float-right{elseif $content_alignment == "LEFT"} ty-float-left{/if}">
        {if $title || $smarty.capture.title|trim}
            <h4 class="vs-footerbox-title clearfix">
                <span>{$title nofilter}</span>
                <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_vs_box_{$block.block_id}">
                    <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                    <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                </span>
            </h4>
        {/if}
        <div class="vs-footerbox-body vs-toggle-body clearfix" id="vs_box_{$block.block_id}">
            {$content nofilter}
        </div>
    </div>
{/if}