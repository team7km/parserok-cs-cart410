{if $but_role == "action" || $but_role == "vs_span_w_icon"}
    {assign var="suffix" value="-action"}
    {assign var="file_prefix" value="action_"}
{elseif $but_role == "act"}
    {assign var="suffix" value="-act"}
    {assign var="file_prefix" value="action_"}
{elseif $but_role == "disabled_big"}
    {assign var="suffix" value="-disabled-big"}
{elseif $but_role == "big"}
    {assign var="suffix" value="-big"}
{elseif $but_role == "delete"}
    {assign var="suffix" value="-delete"}
{elseif $but_role == "tool"}
    {assign var="suffix" value="-tool"}
{else}
    {assign var="suffix" value=""}
{/if}

{if $but_name && $but_role != "text" && $but_role != "act" && $but_role != "delete" && $but_role != "vs_icon" && $but_role != "vs_text_w_icon" && $but_role != "vs_text_w_icon_submit"} {* SUBMIT BUTTON *}
    <button {if $but_id}id="{$but_id}"{/if} class="{$but_meta} ty-btn" type="submit" name="{$but_name}" {if $but_onclick}onclick="{$but_onclick nofilter}"{/if}>{$but_text}</button>

{elseif $but_role == "text" || $but_role == "act" || $but_role == "edit"} {* TEXT STYLE *}
    <a {$but_extra} class="{if !$vs_text_link}ty-btn{/if} {if $but_meta}{$but_meta} {/if}{if $but_name}cm-submit {/if}text-button{$suffix} {if $but_scroll}cm-scroll {/if}"{if $but_id} id="{$but_id}"{/if}{if $but_name} data-ca-dispatch="{$but_name}"{/if}{if $but_href} href="{$but_href|fn_url}"{/if}{if $but_scroll} data-ca-scroll="{$but_scroll}"{/if}{if $but_onclick} onclick="{$but_onclick nofilter} return false;"{/if}{if $but_target} target="{$but_target}"{/if}{if $but_rel} rel="{$but_rel}"{/if}{if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}{if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}{if $but_target_id} data-ca-target-id="{$but_target_id}"{/if}>{if $but_icon}<i class="{$but_icon}"></i>{/if}{$but_text}</a>

{elseif $but_role == "delete"}

    <a {$but_extra} {if $but_id}id="{$but_id}"{/if}{if $but_name} data-ca-dispatch="{$but_name}"{/if} {if $but_href}href="{$but_href|fn_url}"{/if}{if $but_onclick} onclick="{$but_onclick nofilter} return false;"{/if}{if $but_meta} class="{$but_meta}"{/if}{if $but_target} target="{$but_target}"{/if}{if $but_rel} rel="{$but_rel}"{/if}{if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}{if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}{if $but_target_id} data-ca-target-id="{$but_target_id}"{/if}><i title="{__("remove")}" class="vs-icon-delete"></i></a>

{elseif $but_role == "icon"} {* LINK WITH ICON *}
    <a {$but_extra} {if $but_id}id="{$but_id}"{/if}{if $but_href} href="{$but_href|fn_url}"{/if} {if $but_onclick}onclick="{$but_onclick nofilter};{if !$allow_href} return false;{/if}"{/if} {if $but_target}target="{$but_target}"{/if} {if $but_rel} rel="{$but_rel}"{/if}{if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}{if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}{if $but_target_id} data-ca-target-id="{$but_target_id}"{/if} class="ty-btn {if $but_meta}{$but_meta}{/if}">{$but_text}</a>

{elseif $but_role == "vs_icon"} {* VS ICON STYLE *}
    {$class="cm-tooltip vs-button $but_extra_class"}
    {if $but_meta}
        {$class="$class $but_meta"}
    {/if}
    {if $but_name}
        {$class="$class cm-submit"}
    {/if}
    <a {$but_extra} 
        class="{$class}"
        {if $but_id} id="{$but_id}"{/if}
        {if $but_name} data-ca-dispatch="{$but_name}"{/if}
        {if $but_href} href="{$but_href|fn_url}"{/if}
        {if $but_onclick} onclick="{$but_onclick} return false;"{/if}
        {if $but_target} target="{$but_target}"{/if}
        {if $but_rel} rel="{$but_rel}"{/if}
        {if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}
        {if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}
        {if $but_target_id} data-ca-target-id="{$but_target_id}"{/if}
        title="{$but_text}">
            <i class="{$vs_icon}"></i>
    </a>
{elseif $but_role == "vs_text_w_icon"} {* VS Text with icon*}

    <a {$but_extra} class="ty-btn {if $but_meta}{$but_meta} {/if}{if $but_name}cm-submit {/if}text-button{$suffix} vs-text-w-icon {$but_extra_class}"
    {if $but_id} id="{$but_id}"{/if}
    {if $but_name} data-ca-dispatch="{$but_name}"{/if}
    {if $but_href} href="{$but_href|fn_url}"{/if}
    {if $but_onclick} onclick="{$but_onclick} return false;"{/if}
    {if $but_target} target="{$but_target}"{/if}
    {if $but_rel} rel="{$but_rel}"{/if}
    {if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}
    {if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}
    {if $but_target_id} data-ca-target-id="{$but_target_id}"{/if}>
        <i class="{$vs_icon}"></i>{$but_text}
    </a>
{elseif $but_role == "vs_text_w_icon_submit"} {* VS Text with icon submit*}

    <button {$but_extra} class="ty-btn {if $but_meta}{$but_meta} {/if}{if $but_name}cm-submit {/if}text-button{$suffix} vs-text-w-icon {$but_extra_class}"
    {if $but_id} id="{$but_id}"{/if}
    {if $but_name} name="{$but_name}"{/if}
    {if $but_href} href="{$but_href|fn_url}"{/if}
    {if $but_onclick} onclick="{$but_onclick} return false;"{/if}
    {if $but_target} target="{$but_target}"{/if}
    {if $but_rel} rel="{$but_rel}"{/if}
    {if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}
    {if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}
    {if $but_target_id} data-ca-target-id="{$but_target_id}"{/if}>
        <i class="{$vs_icon}"></i>{$but_text}
    </button>

{else} {* BUTTON STYLE *}
    <a {if $but_href}href="{$but_href|fn_url}"{/if}{if $but_onclick} onclick="{$but_onclick nofilter} return false;"{/if} {if $but_target}target="{$but_target}"{/if} class="{if !$vs_text_link}ty-btn{/if} {if $but_meta}{$but_meta} {/if}" {if $but_rel} rel="{$but_rel}"{/if}{if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}{if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}{if $but_target_id} data-ca-target-id="{$but_target_id}"{/if}>{if $but_icon}<i class="{$but_icon}"></i>{/if}{$but_text}</a>
{/if}
