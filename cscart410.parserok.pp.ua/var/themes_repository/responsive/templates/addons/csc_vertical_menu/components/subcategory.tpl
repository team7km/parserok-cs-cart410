{strip}
    {assign var="foreach_name" value="item_`$iid`"}

    {foreach from=$items item="item"}
        <li class="ty-menu__item cm-menu-item-responsive {if $level > 0}hidden_ico sub_{$root_category_id}{/if}" style="background-color: {$addons.csc_vertical_menu.background_submenu_elements};">
            {assign var="item_url" value="categories.view&category_id=`$item.category_id`"|fn_url}
            <div class="ty-menu__submenu-item-header">
                {if $level == 0}
                    {assign var="background" value=$addons.csc_vertical_menu.background_elements}
                    {assign var="text_color" value=$addons.csc_vertical_menu.color_text_elements}
                {else}
                    {assign var="background" value=$addons.csc_vertical_menu.background_submenu_elements}
                    {assign var="text_color" value=$addons.csc_vertical_menu.submenu_color_text_elements}
                {/if}
                <a{if $item_url} href="{$item_url}"{/if} {if $item.new_window}target="_blank"{/if} class="ty-menu__item-link" style="background-color:{$background};color:{$text_color};margin-left: {$level * 20}px;">{$item.$name}</a>
                <div class="open_ico">
                    {if $addons.csc_vertical_menu.show_product_count}<div class="products_count">&nbsp;{$item.category_id|fn_get_category_product_count}&nbsp;</div>{/if}
                    {if $item.$childs}<span id="open_ico_{$item.category_id}" onclick="fn_toggle_category({$item.category_id})">+</span>{/if}
                </div>
            </div>
            {if $item.$childs}
                <ul class="subcat">
                    {include file="addons/csc_vertical_menu/components/subcategory.tpl" items=$item.$childs separated=true submenu=false name="category" item_id="category_id" childs="subcategories" level=$level+1 root_category_id=$item.category_id}
                </ul>
            {/if}
        </li>
    {/foreach}
{/strip}
