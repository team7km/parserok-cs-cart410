{if $content|trim}
    {if $anchor}
    <a name="{$anchor}"></a>
    {/if}
    <div class="vs-sidebox clearfix{if isset($hide_wrapper)} cm-hidden-wrapper{/if}{if $hide_wrapper} hidden{/if}{if $details_page} details-page{/if}{if $block.user_class} {$block.user_class}{/if}{if $content_alignment == "RIGHT"} ty-float-right{elseif $content_alignment == "LEFT"} ty-float-left{/if} vs-sidebox-icon">
        {if $title || $smarty.capture.title|trim}
            <h2 class="vs-sidebox-title clearfix">
                <i class="vs-icon-justify"></i><span class="vs-sidebox-name">{$title nofilter}</span>

                <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_sidebox_{$block.block_id}">
                    <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                    <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                </span>

            </h2>
        {/if}
        <div class="vs-sidebox-body vs-toggle-body clearfix" id="sidebox_{$block.block_id}">{$content nofilter}</div>
    </div>
{/if}