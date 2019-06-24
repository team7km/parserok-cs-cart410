{function name="subcateg" categ_id=$categ_id limit=$limit vendor_categs=$vendor_categs}
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
        
        {$cid=$item.category_id}
        {$show=false}
        {foreach from=$vendor_categs item=i key=k}
            {if ($i['category_id']==$cid)}
                {$show=$i}
            {/if}
        {/foreach}

        {if $show!==false}
            <li>
                <a href="{"companies.products?category_id=`$item.category_id`&company_id=$company_id"|fn_url}" class="{if $current}active{/if}">
                    <i class="ty-icon-right-dir"></i>{$item.category}
                </a>
                {if $show.subcategories && $current && $item.level<=$limit}
                    {subcateg categ_id=$item.category_id limit=$limit vendor_categs=$show.subcategories}
                {/if}
            </li>
        {/if}
    {/foreach}
    </ul>
{/function}


{math equation="ceil(n/c)" assign="rows" n=$subcategories|count c=$columns|default:"2"}
{split data=$subcategories size=$rows assign="splitted_subcategories"}

{assign var="root_categ" value=$category_data.id_path|regex_replace:"/\/(.*)/":""}

<div class="vs-sidebox clearfix">
    <h2 class="vs-sidebox-title">

            <span>{$title}</span>
            <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_sidebox_{$block.block_id}">
                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
            </span>
    </h2>
    <div class="vs-toggle-body vs-sidebox-body vs-side-subcateg clearfix" id="sidebox_{$block.block_id}">
        {$params.company_ids = $company_id}
        {$get_vendor_categs=fn_get_vendor_categories($params)}
        {$vendor_categs=$get_vendor_categs.0}

        {foreach from=0|fn_get_categories_tree item=item1 name=item1}
            {assign var="categ_path" value="/"|explode:$category_data.id_path}
            {assign var="item_path" value="/"|explode:$item1.id_path}
            {assign var="level" value=$item1.level}

            {if $categ_path.$level == $item_path.$level}
                {assign var="current" value=true}
            {else}
                {assign var="current" value=false}
            {/if}

            {$cid=$item1.category_id}
            {$show=false}

            {foreach from=$vendor_categs item=i key=k}
                {if ($i['category_id']==$cid)}
                    {$show=$i}
                {/if}
            {/foreach}

            {if $show!==false}
                <div class="item1-wrapper">
                    <a href="{"companies.products?category_id=`$item1.category_id`&company_id=$company_id"|fn_url}" class="item1 {if $current}active{/if}">
                        {$item1.category}
                    </a>
                    {if $show.subcategories && $current}
                        {subcateg categ_id=$item1.category_id limit=10 vendor_categs=$show.subcategories}
                    {/if}
                </div>
            {/if}
        {/foreach}

    </div>
</div>