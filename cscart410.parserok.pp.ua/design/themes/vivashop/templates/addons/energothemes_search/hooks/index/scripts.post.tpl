{script src="design/themes/{$settings.theme_name}/js/et-search.js"}

<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
		if ($('.energo-searchbox').data("rendered") == true){
	    	{if $language_direction == 'rtl'}
	    		$('.energo-searchbox-span').append('<i class="ty-icon-left-open"></i>');
	    	{else}
	    		$('.energo-searchbox-span').append('<i class="ty-icon-right-open"></i>');
	    	{/if}
	    }
    });
}(Tygh, Tygh.$));
</script>