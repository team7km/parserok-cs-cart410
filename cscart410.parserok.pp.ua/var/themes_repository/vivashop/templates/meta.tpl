{hook name="index:meta"}
{if $display_base_href}
<base href="{$config.current_location}/" />
{/if}

<meta http-equiv="Content-Type" content="text/html; charset={$smarty.const.CHARSET}" />

<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width" />

{hook name="index:meta_description"}
<meta name="description" content="{$meta_description|html_entity_decode:$smarty.const.ENT_COMPAT:"UTF-8"|default:$location_data.meta_description}" />
{/hook}
<meta name="keywords" content="{$meta_keywords|default:$location_data.meta_keywords}" />
{/hook}
{$location_data.custom_html nofilter}
<link rel="apple-touch-icon" href="{$logos.favicon.image.image_path|fn_query_remove:'t'}">