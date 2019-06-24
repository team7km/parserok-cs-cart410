{if $vs_select_menu}
    {foreach from=$categ_id|fn_get_categories_tree item=item name=item}
        <option value="{"categories.view?category_id=`$item.category_id`"|fn_url}" title="{$item.category}">{$spacer}{$item.category}
        </option>
        
        {if $item.subcategories}
            {include file="common/subcateg_list.tpl" categ_id=$item.category_id vs_select_menu=true spacer="`$spacer`¦    "}
        {/if}
    {/foreach}
{else}
    <ul>
    {foreach from=$categ_id|fn_get_categories_tree item=item name=item}
        {assign var="categ_path" value="/"|explode:$category_data.id_path}
        {assign var="item_path" value="/"|explode:$item.id_path}
        {assign var="level" value=$item.level}

        {if $categ_path.$level == $item_path.$level}
            {assign var="current" value=true}
        {else}
            {assign var="current" value=false}
        {/if}
        <li>

            <a href="{if $vendor_categs}{"companies.products?category_id=`$item.category_id`&company_id=$company_id"|fn_url}{else}{"categories.view?category_id=`$item.category_id`"|fn_url}{/if}" class="{if $current}active{/if}">
                <i class="ty-icon-right-dir"></i>{$item.category}
            </a>
            {if $item.subcategories && $current && $item.level<=$limit}
                {include file="common/subcateg_list.tpl" categ_id=$item.category_id limit=$limit vendor_categs=$vendor_categs}
            {/if}
        </li>
    {/foreach}
    </ul>
{/if}