{strip}

{if $capture_image}
    {capture name="image"}
{/if}

{if !$obj_id}
    {math equation="rand()" assign="obj_id"}
{/if}

{$image_data=$images|fn_image_to_display:$image_width:$image_height}

{$generate_image=$image_data.generate_image && !$external}


{if $show_detailed_link}
    <a id="det_img_link_{$obj_id}" {if $image_data.detailed_image_path && $image_id}data-ca-image-id="{$image_id}"{/if} class="{$link_class} {if $image_data.detailed_image_path}cm-previewer ty-previewer{/if}" data-ca-image-width="{$images.detailed.image_x}" data-ca-image-height="{$images.detailed.image_y}" {if $image_data.detailed_image_path}href="{$image_data.detailed_image_path}" title="{$images.detailed.alt}"{/if}>
{/if}
{if $image_data.image_path}
    {capture name="product_image_object"}
    {** Sets image displayed in product list **}
    {hook name="products:product_image_object"}
    <img class="ty-pict {$valign} {$class} {if $generate_image}ty-spinner{/if} {if $vs_lazy==true || $vs_lazy_owl==true}lazyOwl{/if} {if $vs_lazy_additional==true}vs_lazy_additional{/if}{if $vs_lazy_mobile==true} vs_lazy_mobile{/if}" {if $obj_id && !$no_ids}id="det_img_{$obj_id}"{/if} {if $generate_image}data-ca-image-path="{$image_data.image_path}"{/if} {if $vs_lazy==true || $vs_lazy_additional==true || $vs_lazy_banner==true || $vs_lazy_mobile==true}src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="{if $generate_image}{$images_dir}/icons/spacer.gif{else}{$image_data.image_path}{/if}" style="max-height:{$image_data.height}px; {$vs_style}" {else}src="{if $generate_image}{$images_dir}/icons/spacer.gif{else}{$image_data.image_path}{/if}" {if $vs_style}style="{$vs_style}"{/if}{/if} width="{$image_data.width}" height="{$image_data.height}" alt="{$image_data.alt}" title="{$image_data.alt}" {if $image_onclick}onclick="{$image_onclick}"{/if} />

    {if $vs_lazy_additional==true || $vs_lazy==true || $vs_lazy_banner==true}
        <noscript>
            <img class="{$valign} {$class} {if $generate_image}spinner cm-generate-image{/if}" {if $vs_style}style="{$vs_style}"{/if} {if $generate_image}data-ca-image-path="{$image_data.image_path}"{/if} src="{if $generate_image}{$images_dir}/icons/spacer.gif{else}{$image_data.image_path}{/if}" width="{$image_data.width}" height="{$image_data.height}" alt="{$image_data.alt}" title="{$image_data.alt}" {if $image_onclick}onclick="{$image_onclick}"{/if} />
        </noscript>
    {/if}
    {/hook}
    {/capture}
    {$smarty.capture.product_image_object nofilter}

{else}
    <span class="ty-no-image" style="height: {$image_height|default:$image_width}px; width: {$image_width|default:$image_height}px; "><i class="ty-no-image__icon ty-icon-image" title="{__("no_image")}"></i></span>
{/if}
{if $show_detailed_link}
    {if $images.detailed_id}
        <span class="ty-previewer__icon hidden-phone"></span>
    {/if}
</a>
{/if}

{if $capture_image}
    {/capture}
    {capture name="icon_image_path"}
        {$image_data.image_path}
    {/capture}
    {capture name="detailed_image_path"}
        {$image_data.detailed_image_path}
    {/capture}
{/if}

{/strip}
