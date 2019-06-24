<div class="ty-search-block">
<form action="{""|fn_url}" name="search_form" method="get">
<input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
<input type="hidden" name="pshort" value="Y" />
<input type="hidden" name="pfull" value="Y" />
<input type="hidden" name="pname" value="Y" />
<input type="hidden" name="pkeywords" value="Y" />
<input type="hidden" name="search_performed" value="Y" />

{hook name="search:additional_fields"}{/hook}
{hook name="search:et_additional_fields"}{/hook}


{strip}
    {if $settings.General.search_objects}
        {assign var="search_title" value=__("search")}
    {else}
        {assign var="search_title" value=__("search_products")}
    {/if}
            <input type="text" name="q" value="{$search.q}" id="search_input{$smarty.capture.search_input_id}" title="{$search_title}" class="ty-search-block__input cm-hint" />
    {if $settings.General.search_objects}
        {assign var="submit_name" value="search.results"}
    {else}
        {assign var="submit_name" value="products.search"}
    {/if}

    <input type="hidden" name="dispatch" value="{$submit_name}">
    <input class="vs-flat-submit hidden-phone" type="submit" value="{__("search")}">
    <button title="Search" class="ty-search-magnifier hidden-tablet hidden-desktop vs-top-search-submit" type="submit"><i class="ty-icon-search"></i></button>

{/strip}

        {capture name="search_input_id"}{$block.snapping_id}{/capture}
</form>
</div>
