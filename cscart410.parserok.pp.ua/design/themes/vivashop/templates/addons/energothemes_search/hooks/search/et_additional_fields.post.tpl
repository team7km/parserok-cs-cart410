{assign var="o_spacer" value=$addons.energothemes_search.o_spacer|default:""}
{assign var="max_level" value=$addons.energothemes_search.max_levels|default:"2"}

<select name="cid" class="energo-searchbox">
    <option value="0">{__("all_categories")}</option>
    {include file="addons/energothemes_search/views/components/show_categories.tpl" level=1 cid=0 spacer="`$o_spacer`"}
</select>