
<!DOCTYPE html>
<html {hook name="index:html_tag"}{/hook} lang="{$smarty.const.CART_LANGUAGE}" dir="{$language_direction}">
<head>
{capture name="page_title"}
{hook name="index:title"}
{if $page_title}
    {$page_title}
{else}
    {foreach from=$breadcrumbs item=i name="bkt"}
        {if $language_direction == 'rtl'}
            {if !$smarty.foreach.bkt.last}{if !$smarty.foreach.bkt.last && !$smarty.foreach.bkt.first} :: {/if}{$i.title|strip_tags}{/if}
        {else}
        {if !$smarty.foreach.bkt.first}{$i.title|strip_tags}{if !$smarty.foreach.bkt.last} :: {/if}{/if}
        {/if}
    {/foreach}
    {if !$skip_page_title && $location_data.title}{if $breadcrumbs|count > 1} - {/if}{$location_data.title}{/if}
{/if}
{/hook}
{/capture}
<title>{$smarty.capture.page_title|strip|trim nofilter}</title>
{include file="meta.tpl"}
{hook name="index:links"}
    <link href="{$logos.favicon.image.image_path|fn_query_remove:'t'}" rel="shortcut icon" type="{$logos.favicon.image.absolute_path|fn_get_mime_content_type}" />
{/hook}
{include file="common/styles.tpl" include_dropdown=true}
{if "DEVELOPMENT"|defined && $smarty.const.DEVELOPMENT == true}
<script type="text/javascript" data-no-defer>
window.jsErrors = [];
window.onerror = function(errorMessage) {
    document.write('<div data-ca-debug="1" style="border: 2px solid red; margin: 2px;">' + errorMessage + '</div>');
};
</script>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.1.9/es5-shim.min.js"></script><![endif]-->
{/if}
{hook name="index:head_scripts"}{/hook}
</head>

<body>
    {hook name="index:body"}
        {if $runtime.customization_mode.design}
            {include file="common/toolbar.tpl" title=__("on_site_template_editing") href="customization.disable_mode?type=design"}
        {/if}
        {if $runtime.customization_mode.live_editor}
            {include file="common/toolbar.tpl" title=__("on_site_live_editing") href="customization.disable_mode?type=live_editor"}
        {/if}
        {if "THEMES_PANEL"|defined && !$runtime.customization_mode.live_editor}
            {include file="demo_theme_selector.tpl"}
        {/if}

        <div class="ty-tygh {if $runtime.customization_mode.theme_editor}te-mode{/if} {if $runtime.customization_mode.live_editor || $runtime.customization_mode.design || $smarty.const.THEMES_PANEL}ty-top-panel-padding{/if}" id="tygh_container">

        {include file="common/loading_box.tpl"}
        {include file="common/notification.tpl"}

        <div class="ty-helper-container" id="tygh_main_container">
            {hook name="index:content"}
                {hook name="index:et_content"}{/hook}
            {/hook}
        <!--tygh_main_container--></div>

        {hook name="index:footer"}{/hook}
        <!--tygh_container--></div>

        {include file="common/scripts.tpl"}

        {if $runtime.customization_mode.design}
            {include file="backend:common/template_editor.tpl"}
        {/if}
        {if $runtime.customization_mode.theme_editor}
            {include file="backend:common/theme_editor.tpl"}
        {/if}
    {/hook}
</body>

</html>
