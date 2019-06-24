{if $content|trim}
<div class="{if $block.user_class} {$block.user_class}{/if}{if $content_alignment == "RIGHT"} ty-float-right{elseif $content_alignment == "LEFT"} ty-float-left{/if}">

    <div class="vs-menu-toggle cm-combination visible-phone visible-tablet clearfix" id="sw_vs-menu_{$block.block_id}">
        <i class="vs-icon-justify"></i>
    </div>
    <div class="vs-menu-toggle-body clearfix" id="vs-menu_{$block.block_id}">
        {$content|default:"&nbsp;" nofilter}
    </div>
</div>
{/if}