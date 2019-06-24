{** block-description:original **}
{foreach from=$items item="banner" key="key"}
    {if $banner.type == "G" && $banner.main_pair.image_id}
    <div class="ad-container center ty-banner__image-wrapper">
        {if $banner.url != ""}<a href="{$banner.url|fn_url}" {if $banner.target == "B"}target="_blank"{/if}>{/if}
            {if $block.user_class|strpos:"animate" !== false}
                {assign var="vs_lazy_load" value=true}
            {else}
                {assign var="vs_lazy_load" value=false}
            {/if}
        {include file="common/image.tpl" images=$banner.main_pair vs_lazy_additional=$vs_lazy_load vs_lazy_mobile=$vs_lazy_load}
        {if $banner.url != ""}</a>{/if}
    </div>
    {else}
        <div class="wysiwyg-content ty-wysiwyg-content">
            {$banner.description nofilter}
        </div>
    {/if}
{/foreach}