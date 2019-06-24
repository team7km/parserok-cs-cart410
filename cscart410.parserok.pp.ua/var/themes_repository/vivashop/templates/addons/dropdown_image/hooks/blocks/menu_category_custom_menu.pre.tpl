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

{assign var="dropdown_image" value=$category_id|fn_get_dropdown_image_by_categ:$company_id}
{assign var="cat_image" value=$category_id|fn_get_image_pairs:'category':'M':true:true}

{if $cat_image.pair_id && $dropdown_image.custom_menu_settings == "Y" && $dropdown_image.dd_status == "Y"}
	{assign var="et_dd_menu" value="width:`$dropdown_image.menu_width`px; min-height:`$dropdown_image.menu_min_height`px;"}
{else}
	{assign var="et_dd_menu" value=""}
{/if}
{$et_dd_menu}