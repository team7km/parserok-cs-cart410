{hook name="categories:catalog"}
{$param.category_id=0}
{$param.visible=true}
{$param.get_images=true}
{$categories=$param|fn_get_categories}
<div class="clearfix">
    <div class="subcategories all-categories">
    <ul>
    {foreach from=$categories.0 item=category name="ssubcateg"}
        <li class="with-image">
            <a href="{"categories.view?category_id=`$category.category_id`"|fn_url}" style="width:{$settings.Thumbnails.category_lists_thumbnail_width}px;">
                {include file="common/image.tpl"
                    show_detailed_link=false
                    images=$category.main_pair
                    no_ids=true
                    image_id="category_image"
                    image_width=$settings.Thumbnails.category_lists_thumbnail_width
                    image_height=$settings.Thumbnails.category_lists_thumbnail_height
                }
<span>{$category.category}</span>
            </a>
        </li>
    {/foreach}
    </ul>
    </div>
</div>
{/hook}
{capture name="mainbox_title"}{__("all_categories")}{/capture}
