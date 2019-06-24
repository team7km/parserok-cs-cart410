{assign var="c_url" value=$config.current_url|fn_url}
{if $runtime.company_data.company}
    {$name = $runtime.company_data.company}
{else}
    {$name = $settings.Company.company_name}
{/if}

{inline_script}
<script type="text/javascript">
(function(_, $) {
    $(document).ready(function() {

        $(_.doc).on('click', '#off_minimize_block', function() {
            $('#tygh_container').removeClass('ty-top-panel-padding');
        });

        $(_.doc).on('click', '#on_minimize_block', function() {
            $('#tygh_container').addClass('ty-top-panel-padding');
        });

        var open = $.cookie.get('minimize_block');
        if (open) {
            $('#tygh_container').removeClass('ty-top-panel-padding');
        } else {
            $('#tygh_container').addClass('ty-top-panel-padding');
        }
    });
}(Tygh, Tygh.$));
</script>
{/inline_script}

{strip}
    <div class="ty-top-panel">
        <div id="minimize_block" class="ty-top-panel__wrapper {if $smarty.cookies.minimize_block}hidden{/if}">
            <div class="ty-top-panel__header">
                <div class="ty-top-panel__logo">
                    <a href="{fn_url("", "A")}" class="ty-top-panel__logo-link"><i class="ty-top-panel__icon-basket ty-icon-basket"></i></a>
                </div>
                <h4 class="ty-top-panel__title">
                    {$name}
                </h4>
            </div>
            <div class="ty-top-panel-action">
                <span class="ty-top-panel-action_item">
                    <a href="{fn_url("", "A")}" class="ty-top-panel-btn cm-no-ajax">
                        {__("demo_panel.go_admin_panel")}
                    </a>
                    {if "MULTIVENDOR"|fn_allowed_for}
                        <a href="{fn_url("", "V")}" class="ty-top-panel-btn cm-no-ajax">
                            {__("demo_panel.go_vendor_panel")}
                        </a>
                    {/if}
                </span>

                {if $config.demo_mode}
                    <a href="{$c_url|fn_link_attach:"demo_customize_theme=Y"}"
                       id="settings_theme_editor"
                       class="ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip {if $runtime.customization_mode.theme_editor}active{/if}"
                       title="{__("demo_panel.theme_editor.enable", ["[product]" => $smarty.const.PRODUCT_NAME])|escape:html}"
                    >
                        <i class="ty-top-panel-action__icon-setting ty-icon-wrench"></i>
                    </a>

                    <a href="{$c_url|fn_link_attach:"demo_block_manager=Y"}"
                       id="setting_block_manager"
                       class="ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip {if $runtime.customization_mode.block_manager}active{/if}"
                       title="{__("demo_panel.block_manager.enable", ["[product]" => $smarty.const.PRODUCT_NAME])|escape:html}"
                    >
                        <i class="ty-top-panel-action__icon-setting ty-icon-products-without-options ty-top-panel-action__icon-setting--block-manager"></i>
                    </a>
                {else}
                    {if fn_check_permissions("customization", "update_mode", "admin", "", ["type" => "live_editor"], $smarty.const.AREA, $auth.user_id)}
                        <a href="{fn_url("customization.update_mode?type=live_editor&status=enable&return_url={$c_url|urlencode}")}"
                           id="settings_live_editor"
                           class="cm-no-ajax ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip {if $runtime.customization_mode.live_editor}active{/if}"
                           title="{__("administration_panel.live_editor.enable", ["[product]" => $smarty.const.PRODUCT_NAME])|escape:html}"
                        >
                            <i class="ty-top-panel-action__icon-setting ty-icon-live-edit" style="top: 7px; font-size: 26px;"></i>
                        </a>
                    {/if}

                    {if fn_check_permissions("customization", "update_mode", "admin", "", ["type" => "theme_editor"], $smarty.const.AREA, $auth.user_id)}
                        <a href="{fn_url("customization.update_mode?type=theme_editor&status=enable&return_url={$c_url|urlencode}")}"
                           id="settings_theme_editor"
                           class="cm-no-ajax ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip {if $runtime.customization_mode.theme_editor}active{/if}"
                           title="{__("administration_panel.theme_editor.enable", ["[product]" => $smarty.const.PRODUCT_NAME])|escape:html}"
                        >
                            <i class="ty-top-panel-action__icon-setting ty-icon-wrench"></i>
                        </a>
                    {/if}

                    {if fn_check_permissions("customization", "update_mode", "admin", "", ["type" => "block_manager"], $smarty.const.AREA, $auth.user_id)}
                        <a href="{fn_url("customization.update_mode?type=block_manager&status=enable&return_url={$c_url|urlencode}")}"
                           id="settings_block_manager"
                           class="cm-no-ajax ty-top-panel-action__setting ty-top-panel-action_item cm-tooltip {if $runtime.customization_mode.block_manager}active{/if}"
                           title="{__("administration_panel.block_manager.enable", ["[product]" => $smarty.const.PRODUCT_NAME])|escape:html}"
                        >
                            <i class="ty-top-panel-action__icon-setting ty-icon-products-without-options ty-top-panel-action__icon-setting--block-manager"></i>
                        </a>
                    {/if}
                {/if}

                <a id="off_minimize_block" class="ty-top-panel__close ty-top-panel-action_item cm-combination-panel cm-save-state cm-ss-reverse"><i class="ty-icon-cancel"></i></a>
            </div>
        </div>
        <a id="on_minimize_block" class="minimize-label cm-combination-panel cm-save-state cm-ss-reverse{if !$smarty.cookies.minimize_block} hidden{/if}">
            <i class="minimize-label__icon ty-icon-down-open"></i>
        </a>
    </div>
{/strip}
