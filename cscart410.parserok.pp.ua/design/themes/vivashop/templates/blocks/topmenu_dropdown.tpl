{hook name="blocks:topmenu_dropdown"}
{if $items}

    <div class="wrap-dropdown-hybrid">
        <!-- level 1 wrapper - horizontal -->
        
        <ul class="dropdown-hybrid clearfix">
            <!-- level 1 items - horizontal -->
            {assign var="page_name" value=$smarty.request.dispatch}


            {hook name="blocks:topmenu_dropdown_top_menu"}

            <li class="">
                <a class="drop item-1" {*}href="{"categories.catalog"|fn_url}"{*}>
                    <i class="vs-icon-menu"></i>
                    <span>{__("all_categories")}</span>
                </a>
                <div class="dropdown-hybrid-column">
                    <!-- level 2 wrapper - vertical -->
                    <ul id="vmenu_{$block.block_id}{$block.grid_id}" class="adropdown adropdown-vertical{if $block.properties.right_to_left_orientation =="Y"} rtl{/if}">
                            {strip}

                            {foreach from=$items item="item1" name="item1"}
                                
                                {assign var="cols" value=0}

                                {if $item1.active || $item1|fn_check_is_active_menu_item:$block.type}
                                    {assign var="item_1_class" value="active"}
                                {else}
                                    {assign var="item_1_class" value=""}
                                {/if}

                                {if !$smarty.foreach.item1.last}
                                    {assign var="item_1_class" value="$item_1_class b-border "}
                                {/if}

                                {if $item1.$childs}
                                    {assign var="item_1_class" value="$item_1_class dir"}
                                {/if}

                                <!-- level 2 items - vertical -->
                                <li class="{$item_1_class} adropdown-vertical_li">
                                    {assign var="item1_url" value=$item1|fn_form_dropdown_object_link:$block.type}

                                    {if $item1.$childs}
                                        
                                        <a{if $item1_url} href="{$item1_url}"{/if} {if $item1.new_window}target="_blank"{/if} class="item-1">
                                            <span>{$item1.$name}</span>
                                            {if $language_direction == 'rtl'}
                                                <i class="vs-icon-arrow-left"></i>
                                            {else}
                                                <i class="vs-icon-arrow-right"></i>
                                            {/if}
                                        </a>
                                        <div class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_vs_box_{$item1.category_id}{$item1.param_id}{$block.grid_id}000">
                                            <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                            <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                        </div>
                                        {capture name="dropdown_image"}
                                            {hook name="blocks:menu_category_image"}
                                            {/hook}
                                        {/capture}

                                        {capture name="dropdown_image_custom_menu"}
                                            {hook name="blocks:menu_category_custom_menu"}
                                            {/hook}
                                        {/capture}
                                        {$et_dd_cols_viva=true}

                                        {capture name="dropdown_image_custom_menu_cols"}
                                            {hook name="blocks:menu_category_custom_menu_cols"}
                                            {/hook}
                                        {/capture}


                                        {if $smarty.capture.dropdown_image_custom_menu|trim}
                                            {assign var="dd_menu" value=$smarty.capture.dropdown_image_custom_menu|trim}
                                        {else}
                                            {assign var="dd_menu" value=""}
                                        {/if}

                                        {if $smarty.capture.dropdown_image|trim}
                                            {$cols = 5}

                                            {if $smarty.capture.dropdown_image_custom_menu_cols|trim}
                                                {$cols = $smarty.capture.dropdown_image_custom_menu_cols|trim}
                                            {/if}
                                            {assign var="dd_img_class" value="dd-img"}
                                        {else}
                                            {$cols = 5}
                                            {assign var="dd_img_class" value="no-dd-img"}
                                        {/if}
                                        <!-- level 3 wrapper - horizontal -->
                                        <div class="adropdown-fullwidth {$dd_img_class}" style="{$dd_menu}" id="vs_box_{$item1.category_id}{$item1.param_id}{$block.grid_id}000">
                                            
                                            <div class="main-categ-title">
                                                <a{if $item1_url} href="{$item1_url}"{/if} {if $item1.new_window}target="_blank"{/if}>
                                                    {$item1.$name}
                                                </a>
                                            </div>
                                            {if $smarty.capture.dropdown_image|trim}
                                                {$smarty.capture.dropdown_image nofilter}
                                            {/if}
     
                                            {foreach from=$item1.$childs item="item2" name="item2"}

                                                {if $smarty.foreach.item2.index % $cols == 0 || $smarty.foreach.item2.first} 
                                                    {assign var="item_2_class" value="firstcolumn"} 
                                                {elseif $smarty.foreach.item2.index % $cols == ($cols - 1) || $smarty.foreach.item2.last} 
                                                    {assign var="item_2_class" value="lastcolumn"}
                                                {else}
                                                    {assign var="item_2_class" value=""} 
                                                {/if}
                                                <!-- level 2 item - horizontal -->
                                                <div class="col-1 {$item_2_class}">
                                                    {assign var="item2_url" value=$item2|fn_form_dropdown_object_link:$block.type}

                                                    <h3{if $item2.active || $item1|fn_check_is_active_menu_item:$block.type} class="active"{/if}>
                                                        <a{if $item2_url} href="{$item2_url}"{/if}>
                                                            {$item2.$name}
                                                            {if $item2.$childs}
                                                            <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_vs_box_{$item2.category_id}{$item2.param_id}{$block.grid_id}000">
                                                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                                            </span>
                                                            {/if}
                                                        </a>
                                                    </h3>
                                                    {if $item2.category_id}
                                                        {$cat_id=$item2.category_id}
                                                    {elseif strpos($item2.href,"category_id")}
                                                        {$cat_id=substr($item2.href,strpos($item2.href,"category_id=")+12)}
                                                    {/if}
                                                    {assign var="cat_image" value=$cat_id|fn_get_image_pairs:'category':'M':true:true}

                                                        <div style="" class="vs-sub-categ-img">
                                                            <a{if $item2_url} href="{$item2_url}"{/if} class="vs-sub-categ-img-link">
                                                                {include file="common/image.tpl" images=$cat_image.detailed image_width=139 image_height=139 vs_lazy_additional=true}
                                                            </a>
                                                        </div>


                                                    {if $item2.$childs}
                                                        <!-- level 3 wrapper - vertical -->
                                                        <ul id="vs_box_{$item2.category_id}{$item2.param_id}{$block.grid_id}000">
                                                            {hook name="blocks:topmenu_dropdown_2levels_col_elements"}

                                                            {$limit=$block.properties.dropdown_third_level_elements}
                                                            {$count_child=$item2.category_id|fn_get_categories_tree|count}

                                                            {foreach from=$item2.$childs item="item3" name="item3"}
                                                                {if $smarty.foreach.item3.index < $limit}
                                                                    {assign var="item3_url" value=$item3|fn_form_dropdown_object_link:$block.type}

                                                                    <!-- level 3 item - vertical -->
                                                                    <li{if $item3.active || $item3|fn_check_is_active_menu_item:$block.type} class="active"{/if}>
                                                                        <a{if $item3_url} href="{$item3_url}"{/if}>
                                                                            {$item3.$name}
                                                                        </a>
                                                                    </li>
                                                                {/if}

                                                            {/foreach}{*end item 3*}

                                                            {if $limit<$count_child}
                                                                <li class="view-more">
                                                                    <a href="{$item2_url}">{__("view_more")}</a>
                                                                </li>
                                                            {/if}
                                                            
                                                            {/hook}
                                                        </ul>
                                                    {/if}
                                                </div>
                                            {/foreach}{*end item 2*}
                                        </div>
                                    {else}
                                        <a{if $item1_url} href="{$item1_url}"{/if} {if $item1.new_window}target="_blank"{/if}>
                                            <span>{$item1.$name}</span>
                                        </a>
                                    {/if}
                                    <!-- end level 2 items - vertical -->
                                </li>
                            {/foreach}{*end item 1*}
                        </ul>
                    </div>
                <!-- end level 1 items - horizontal -->
                </li>
        {/hook}
        </ul>
        <div class="clear"></div>
    </div>
{/if}

{/hook}