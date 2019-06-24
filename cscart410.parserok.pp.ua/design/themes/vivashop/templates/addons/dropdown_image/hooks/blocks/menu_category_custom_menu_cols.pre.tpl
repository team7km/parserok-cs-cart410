{assign var="dropdown_image" value=$item1.category_id|fn_get_dropdown_image_by_categ:$item1.company_id}
{assign var="cat_image" value=$item1.category_id|fn_get_image_pairs:'category':'M':true:true}
{assign var="et_dd_cols" value="5"}
{if $cat_image.pair_id && $dropdown_image.dd_status == "Y"}
	{if $et_dd_cols_viva}
		{$default_area=901}
		{$area=$default_area}
		{if $dropdown_image.custom_menu_settings == "Y" && $dropdown_image.push_menu_items == "Y"}
			{$area=$dropdown_image.menu_width-$cat_image.detailed.image_x-$dropdown_image.offset_right}
		{elseif $dropdown_image.custom_menu_settings == "Y"}
			{$area=$dropdown_image.menu_width}
		{elseif $dropdown_image.push_menu_items == "Y"}
			{$area=$default_area-$cat_image.detailed.image_x-$dropdown_image.offset_right}
		{/if}
		{if ($area >= 703) && ($area < 883)}
			{assign var="et_dd_cols" value="4"}
		{elseif ($area >= 523) && ($area < 703)}
			{assign var="et_dd_cols" value="3"}
		{elseif ($area >= 343) && ($area < 523)}
			{assign var="et_dd_cols" value="2"}
		{elseif $area < 343}
			{assign var="et_dd_cols" value="1"}
		{/if}
	{else}
		{if ($dropdown_image.menu_width >= 473) && ($dropdown_image.menu_width < 637)}
			{assign var="et_dd_cols" value="3"}
		{elseif ($dropdown_image.menu_width >= 309) && ($dropdown_image.menu_width < 473)}
			{assign var="et_dd_cols" value="2"}
		{elseif $dropdown_image.menu_width < 309}
			{assign var="et_dd_cols" value="1"}
		{/if}
	{/if}
{/if}
{$et_dd_cols}