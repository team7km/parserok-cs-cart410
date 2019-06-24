<p class="nowrap stars">
{if $link}
	{if ($runtime.controller == "products" || $runtime.controller == "companies") && $runtime.mode == "view" && $vs_scroll_link}
            {if $product.average_rating}
                <a href="{$link|fn_url}">
            {else}
                <a class="cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion">
            {/if}
        {else}
            <a href="{$link|fn_url}">
        {/if}
{/if}
{section name="full_star" loop=$stars.full}<i class="ty-icon-star"></i>{/section}
{if $stars.part}<i class="ty-icon-star-half"></i>{/if}
{section name="full_star" loop=$stars.empty}<i class="ty-icon-star-empty"></i>{/section}
{if $link}</a>{/if}
</p>