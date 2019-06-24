{hook name="categories:view"}

<div id="category_products_{$block.block_id}">
{$depth="/"|explode:$category_data.id_path|count}

<div class="vs-category vs-category-level-{$depth}">

<div class="clearfix vs-category-header">
    <div class="vs-category-descr vs-categ-banner">
    {if ($category_data.description && $category_data.description != "") || $runtime.customization_mode.live_editor}
        <div class="ty-wysiwyg-content ty-mb-s vs-categ-descr-box" {live_edit name="category:description:{$category_data.category_id}"}>{$category_data.description nofilter}</div>
    {/if}
    </div>
</div>
<script type="text/javascript">
//<![CDATA[
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var windowWidth = window.innerWidth || document.documentElement.clientWidth;
        //banner
        var banner=$(".category-banner").detach();
        $(".vs-category-descr").prepend(banner);
        {if $depth==1}
            banner.show();
        {/if}

        //scroller
        var scroller=$(".vs-scroller-category-product").detach();

        if (scroller.length){
            scroller.addClass("ty-float-right");
            $(".vs-category-header").append(scroller);
        }

        {if $depth==1}
            if (scroller.length){
                $(".vs-category-descr").addClass("ty-float-left");
                if (windowWidth > 1247){
                    var header_w=$(".vs-category-header").width();
                    var scroller_w=scroller.outerWidth(true);
                    $(".vs-category-descr").css("width",header_w-scroller_w);
                }else{
                    $(".vs-category-descr").css("width","646px");
                }
                scroller.show();
            }
        {/if}
        
        //disabled scroller buttons
        var buttons=$(".subcateg-scroller .owl-controls");
        var buttons_status=buttons.css('display');

        if(buttons_status != "block"){
            $(".owl-buttons div",buttons).addClass("vs-disabled");
            buttons.show();
        }
    });
}(Tygh, Tygh.$));
//]]>
</script>

{if $subcategories}
{math equation="ceil(n/c)" assign="rows" n=$subcategories|count c=$columns|default:"2"}
{split data=$subcategories size=$rows assign="splitted_subcategories"}
<div class="clear-both">
    {if $subcategories|sizeof < 6}
        {$extra_ss_class="disable_buttons"}
    {/if}
    <div id="scroll_list_{$block.block_id}" class="owl-carousel subcateg-scroller {$extra_ss_class}">
    {foreach from=$splitted_subcategories item="ssubcateg"}
        {foreach from=$ssubcateg item=category name="ssubcateg"}
            {if $category}
             <div class="jscroll-item">
                <div class="ty-center scroll-image">
                    <a href="{"categories.view?category_id=`$category.category_id`"|fn_url}">
                        {include file="common/image.tpl"
                            show_detailed_link=false
                            images=$category.main_pair
                            no_ids=true
                            image_id="category_image"
                            image_width=$settings.Thumbnails.category_lists_thumbnail_width
                            image_height=$settings.Thumbnails.category_lists_thumbnail_height 
                            class="animate scale"
                        }
                    </a>
                </div>
                <div class="subcateg-title ty-center">
                    <a href="{"categories.view?category_id=`$category.category_id`"|fn_url}"><span {live_edit name="category:category:{$category.category_id}"}>{$category.category}</span></a>
                </div>
            </div>
            {/if}
        {/foreach}
    {/foreach}
    </div>
    {include file="common/scroller_init.tpl" vs_subcateg_scroller=true}
</div>
{/if}


{if $products}
{assign var="layouts" value=""|fn_get_products_views:false:0}
{if $category_data.product_columns}
    {assign var="product_columns" value=$category_data.product_columns}
{else}
    {assign var="product_columns" value=$settings.Appearance.columns_in_products_list}
{/if}

{if $layouts.$selected_layout.template}
    {include file="`$layouts.$selected_layout.template`" columns=$product_columns}
{/if}

{elseif !$subcategories || $show_no_products_block}
<p class="ty-no-items cm-pagination-container">{__("text_no_products")}</p>
{else}
<div class="cm-pagination-container clear-both"></div>
{/if}
</div>
<!--category_products_{$block.block_id}--></div>

{capture name="mainbox_title"}<span {live_edit name="category:category:{$category_data.category_id}"}>{$category_data.category}</span>{/capture}
{/hook}