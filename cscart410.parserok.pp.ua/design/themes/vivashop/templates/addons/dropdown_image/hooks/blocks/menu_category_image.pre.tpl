{if $item1.category_id}
	{assign var="category_id" value=$item1.category_id}
{elseif $item2.category_id}
	{assign var="category_id" value=$item2.category_id}
{else}
	{assign var="category_id" value=$item2.href|regex_replace:"/(.*)category_id=/":""}
{/if}

{if $item1.company_id}
	{assign var="company_id" value=$item1.company_id}
{elseif $item2.company_id}
	{assign var="company_id" value=$item2.company_id}
{else}
	{assign var="company_id" value="1"}
{/if}

{assign var="cat_image" value=$category_id|fn_get_image_pairs:'category':'M':true:true}

{assign var="dropdown_image" value=$category_id|fn_get_dropdown_image_by_categ:$company_id}

{if $cat_image.pair_id}
	{if $dropdown_image.custom_menu_settings == "Y"}
		{if $language_direction == 'rtl'}
			{assign var="offset" value="left:`$dropdown_image.offset_right`px; bottom:`$dropdown_image.offset_bottom`px;"}
		{else}
		{assign var="offset" value="right:`$dropdown_image.offset_right`px; bottom:`$dropdown_image.offset_bottom`px;"}
		{/if}
	{else}
		{if $language_direction == 'rtl'}
			{assign var="offset" value="left:0px; bottom:0px;"}
		{else}
		{assign var="offset" value="right:0px; bottom:0px;"}
    {/if}
	{/if}

	{if $dropdown_image.dd_status == "Y"}
		<div class="dropdown-image">
			<div style="position: absolute;{$offset}">
			{if isset($dropdown_image.url)}
				<a href="{$dropdown_image.url}">
			{/if}
				{if $dropdown_image.image_width == 0}
					{assign var="image_width" value=""}
				{else}
					{assign var="image_width" value=$dropdown_image.image_width}
				{/if}

				{if $dropdown_image.image_height == 0}
					{assign var="image_height" value=""}
				{else}
					{assign var="image_height" value=$dropdown_image.image_height}
				{/if}

			    {include file="common/image.tpl" images=$cat_image.detailed image_width=$image_width image_height=$image_height vs_lazy_additional=true}

			{if isset($dropdown_image.url)}
		    	</a>
		    {/if}
		    </div>
		</div>
	{/if}

{/if}