<div class="ty-menu ty-menu-vertical">
    <ul id="vmenu_{$block.block_id}" class="ty-menu__items cm-responsive-menu{if $block.properties.right_to_left_orientation =="Y"} rtl{/if}">
        <li class="ty-menu__item ty-menu__menu-btn visible-phone">
            <a class="ty-menu__item-link">
                <i class="ty-icon-short-list"></i>
                <span>{__("menu")}</span>
            </a>
        </li>
        {strip}
            {assign var="foreach_name" value="item_`$iid`"}

            {include file="addons/csc_vertical_menu/components/subcategory.tpl" items=$items separated=true submenu=false name="category" item_id="category_id" childs="subcategories"}
        {/strip}

        <style>
            .open_ico {
                float: right;
                color: white;
                left: -22px;
                top: -35px;
                position: relative;
                font-size: 18px;
                margin-bottom: -24px;
                cursor: pointer;
            }
            .hidden_ico {
                display:none !important;
            }
            .products_count {
                float: left;
                background-color: {$addons.csc_vertical_menu.color_text_elements};
                color: {$addons.csc_vertical_menu.background_elements};
                margin-top: 3px;
                margin-right: 4px;
                border-radius: 7px;
            }
        </style>

        <script>
            function fn_toggle_category(category_id)
            {
                if ($('.sub_' + category_id).is(':visible'))
                {
                    $('.sub_' + category_id).addClass('hidden_ico');
                    $('#open_ico_' + category_id).html('+');
                }
                else
                {
                    $('.sub_' + category_id).removeClass('hidden_ico');
                    $('#open_ico_' + category_id).html('&nbsp-');
                }
            }
        </script>
    </ul>
</div>