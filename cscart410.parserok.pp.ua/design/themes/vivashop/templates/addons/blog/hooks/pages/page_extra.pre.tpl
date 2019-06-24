{if $page.page_type == $smarty.const.PAGE_TYPE_BLOG}

{if $subpages}
    {capture name="mainbox_title"}{__("blog")}{/capture}
    
    {if !$page.description}
    <div class="vs-blog-list-main-image">
        {include file="common/image.tpl" image_width="894" obj_id=$page.page_id images=$page.main_pair}
    </div>
    {/if}

    <div class="ty-blog vs-blog clearfix">
        {include file="common/pagination.tpl"}
        
        {function name="list_blog"}
        {foreach from=$subpages item="subpage"}{strip}
            <div class="ty-blog__item ty-column3">
                {if $subpage.main_pair}
                <a href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}" class="ty-center">
                    <span class="ty-blog__img-block">
                        {include file="common/image.tpl" image_width="330" image_height="112" obj_id=$subpage.page_id images=$subpage.main_pair}
                    </span>
                </a>
                {/if}
                <div class="vs-blog-title">
                    <a href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}">
                        <h2 class="ty-blog__post-title">
                            {$subpage.page}
                        </h2>
                    </a>
                </div>

                <div class="vs-blog-details">
                    {strip}
                    <div class="ty-blog__author"><i class="vs-icon-user"></i> {$subpage.author}</div>
                    <div class="ty-blog__date"><i class="ty-icon-calendar"></i> {$subpage.timestamp|date_format:"`$settings.Appearance.date_format`"}</div>
                    {hook name="blog:list"}{/hook}
                    {/strip}
                </div>

                <div class="ty-blog__description">
                    <div class="ty-wysiwyg-content">
                        <div>{$subpage.spoiler|strip_tags|truncate:200:"..." nofilter}</div>
                    </div>
                    <div class="ty-blog__read-more ty-mt-l">
                        <a class="ty-btn ty-btn__secondary" href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}">{__("blog.read_more")}</a>
                    </div>
                </div>
            </div>{/strip}{/foreach}
        {/function}
        <div class="clearfix">
            {list_blog subpages=$subpages}
        </div>

        {include file="common/pagination.tpl"}
    </div>

{/if}

{if $page.description}
    {capture name="mainbox_title"}<span class="ty-blog__post-title" {live_edit name="page:page:{$page.page_id}"}>{$page.page}</span>{/capture}
{/if}

{/if}