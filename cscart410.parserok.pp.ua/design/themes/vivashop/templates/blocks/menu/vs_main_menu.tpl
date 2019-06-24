{** block-description:vs_main_menu **}
{if $items}
    <div class="cm-combination vs-main-menu-title visible-phone visible-tablet">
        <i class="ty-sidebox__icon-open vs-icon-link"></i>
    </div>
    <div class="cm-popup-box popup-content vs-toggle-body hidden vs-main-menu-content"> 
        <ul class="ty-text-links ty-text-links_show_inline">
            {foreach from=$items item="menu" name="vs_menu"}
                <li class="level-{$menu.level|default:0}{if $menu.active} active{/if}">
                    <a {if $menu.href}href="{$menu.href|fn_url}"{/if} class="item-{$smarty.foreach.vs_menu.index}">{$menu.item}</a> 
                </li>
            {/foreach}
        </ul>
    </div>
{/if}

