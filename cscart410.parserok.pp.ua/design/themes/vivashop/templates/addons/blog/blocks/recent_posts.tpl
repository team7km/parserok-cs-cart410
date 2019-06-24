{** block-description:blog.recent_posts **}

{if $items}

<div class="ty-blog-sidebox vs-blog-sidebar">
    <ul class="ty-blog-sidebox__list">
{foreach from=$items item="page"}
        <li class="ty-blog-sidebox__item clearfix">
        	{$data=$page.page_id|fn_get_page_data}
        	{if $data.main_pair}
        	    <div class="ty-blog__img-block ty-float-left">
        	    	<a href="{"pages.view?page_id=`$page.page_id`"|fn_url}">
        	        {include file="common/image.tpl" 
        	        	image_width="52" 
        	        	image_height="38"
        	        	obj_id=$data.page_id images=$data.main_pair}
        	        </a>
        	    </div>
        	{/if}
        	<div class="ty-float-left vs-blog-text-wrapper">
	            <a class="vs-blog-title" href="{"pages.view?page_id=`$page.page_id`"|fn_url}">{$page.page}</a>
	            {strip}
	            <div class="blog_sidebar_recent">
					<div class="ty-blog__date"><i class="ty-icon-calendar"></i> {$page.timestamp|date_format:"`$settings.Appearance.date_format`"}</div>
	            	{hook name="blog:sidebar"}{/hook}
	            </div>
		    	{/strip}
	    	</div>
        </li>
{/foreach}
    </ul>
</div>

{/if}