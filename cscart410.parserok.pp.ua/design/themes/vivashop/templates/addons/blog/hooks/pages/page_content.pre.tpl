{if $page.description && $page.page_type == $smarty.const.PAGE_TYPE_BLOG}
    <div class="vs-blog-post-wrapper">
    	<div class="vs-blog-details">
    		{strip}
	    	<div class="ty-blog__author">{__("posted_by")}&nbsp;&nbsp;<i class="vs-icon-user"></i> {$page.author}</div>
	    	<div class="ty-blog__date"><i class="ty-icon-calendar"></i> {$page.timestamp|date_format:"`$settings.Appearance.date_format`"}</div>
    	    {hook name="blog:post"}{/hook}
	    	{/strip}
	    </div>
    	{if $page.main_pair}
    	    <div class="ty-blog__img-block">
    	        {include file="common/image.tpl" image_width="890" image_height="304" obj_id=$page.page_id images=$page.main_pair}
    	    </div>
    	{/if}
    </div>
{/if}
