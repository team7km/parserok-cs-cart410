{if $content|trim}
<div class="clearfix{if isset($hide_wrapper)} cm-hidden-wrapper{/if}{if $hide_wrapper} hidden{/if}{if $details_page} details-page{/if}{if $content_alignment == "RIGHT"} ty-float-right{elseif $content_alignment == "LEFT"} ty-float-left{/if} vs-main-menu">
    <div class="cm-combination vs-main-menu-title visible-phone visible-tablet clearfix">
        <i class="ty-sidebox__icon-open vs-icon-link"></i>
    </div>
    <div class="cm-popup-box popup-content vs-toggle-body hidden vs-main-menu-content vs-main-menu-icon clearfix">
        {$content nofilter}
    </div>
</div>
{/if}
