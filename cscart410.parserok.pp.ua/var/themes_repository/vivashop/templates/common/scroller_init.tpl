{script src="design/themes/vivashop/js/owl.carousel.min.js"}
<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_{$block.block_id}');

        var item = {$block.properties.item_quantity|default:5},
            // default setting of carousel
            itemsDesktop = 4,
            itemsDesktopSmall = 3;
            itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }
        
        function loadImage(){
            var check_delay={$block.properties.speed|default:400}+100;
            setTimeout(function() {
                check_animate();
            },check_delay)                
        }


        if (elm.length) {
            elm.owlCarousel({
				direction: '{$language_direction}',
                items: {$block.properties.item_quantity|default:5},
            {if $vs_subcateg_scroller}
                itemsDesktop: [1247, 5],
                itemsDesktopSmall: [1008, 4],
                itemsTablet: [768, 3],
                itemsMobile: [479, 1],
                autoPlay: false,
            {else}
                itemsDesktop: [1247, itemsDesktopSmall],
                itemsDesktopSmall: [1008, 3],
                itemsTablet: [768, 2],
                itemsMobile: [320, 1],
                {if $block.properties.scroll_per_page == "Y"}
                scrollPerPage: true,
                {/if}
                {if $block.properties.not_scroll_automatically == "Y" }
                autoPlay: false,
                {else}
                autoPlay: '{$block.properties.pause_delay * 1000|default:0}',
                {/if}
            {/if}
                slideSpeed: {$block.properties.speed|default:400},
                rewindSpeed: {$block.properties.speed|default:400},
                stopOnHover: true,
                navigation: true,
                navigationText: ['', ''],
                pagination: false,
                startDragging: loadImage,
                afterMove: loadImage,
                lazyLoad : true,
                lazyEffect: false,
            });

            $('.owl-next, .owl-prev').click(loadImage);
        }
    });
}(Tygh, Tygh.$));
</script>