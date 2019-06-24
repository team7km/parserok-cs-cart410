{style src="addons/energothemes_search/styles.less"}
{assign var="custom_width" value=$addons.energothemes_search.custom_width|default:"204"}
<style type="text/css">
	.energo-searchbox{ldelim}
		width: {math equation="a-b" a=$custom_width b=1}px;
	{rdelim}
	.energo-searchbox+.ty-search-block__input{ldelim}
		padding-left: {math equation="a+b" a=$custom_width b=5}px;
	{rdelim}
</style>