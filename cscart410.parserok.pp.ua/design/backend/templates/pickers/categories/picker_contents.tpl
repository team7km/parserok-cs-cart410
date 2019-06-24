{if $language_direction == "rtl"}
    {$direction = "right"}
{else}
    {$direction = "left"}
{/if}

{$form_id = "cat_form_{0|rand:1024}"}

{if !$smarty.request.extra}
<script type="text/javascript">
(function(_, $) {
    _.tr('text_items_added', '{__("text_items_added")|escape:"javascript"}');
    var display_type = '{$smarty.request.display|escape:javascript nofilter}';

    $.ceEvent('on', 'ce.formpost_categories_form', function(frm, elm) {
        var categories = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                if (display_type != 'radio') {
                    categories[id] = {
                        category: $('#category_' + id).text(),
                        path_items: ''
                    };
                    var parent = $(this).closest('.table-tree').parent().prev('.table-tree');
                    while (parent.length > 0) {
                        var path_id = $('.cm-item', parent).first().val();
                        if (path_id) {
                            var path_name = $('#category_' + path_id).text();
                            categories[id]['path_items'] =
                                '<a class="ty-breadcrumbs__a" target="_blank" href="{"categories.update&category_id="|fn_url}'+path_id+'">'+path_name+'</a> / ' +
                                    categories[id]['path_items'];
                        }
                        parent = parent.parent().prev('.table-tree');
                    }
                }
                else {
                    categories[id] = $('#category_' + id).text()
                }
            });

            if (display_type != 'radio') {
                {literal}
                $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                    '{category_id}': '%id',
                    '{category}': '%item.category',
                    '{path_items}': '%item.path_items'
                });
                {/literal}
            } else {
                {literal}
                $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                    '{category_id}': '%id',
                    '{category}': '%item'
                });
                {/literal}
            }


            if (display_type != 'radio') {
                $.ceNotification('show', {
                    type: 'N', 
                    title: _.tr('notice'), 
                    message: _.tr('text_items_added'), 
                    message_state: 'I'
                });
            }
        }

        return false;
    });

    $('#{$form_id}').on('click', '.cm-click-and-close', function (e) {
        if (e.metaKey || e.ctrlKey) {
            let { caTargetCheckbox } = $(this).data();

            if (caTargetCheckbox && !$(caTargetCheckbox).is(e.target)) {
                let _target = $(caTargetCheckbox);
                _target.prop('checked', !_target.prop('checked'));
            }

            setTimeout(() => $('#{$form_id} .cm-process-items.cm-dialog-closer').click(), 300);

            if (caTargetCheckbox && !$(caTargetCheckbox).is(e.target)) {
                e.preventDefault();
                return false;
            }
        }
    });

    $.ceEvent('on', 'ce.commoninit', function (context) {
        const { href } = location;

        if (!/dispatch\=products\.[update,manage]/.test(location.href)) {
            $('.quick-select-protip', context).hide();
        }
    });
}(Tygh, Tygh.$));
</script>
{/if}

<form id="{$form_id}" action="{$smarty.request.extra|fn_url}" data-ca-result-id="{$smarty.request.data_id}" method="post" name="categories_form">

<div class="items-container multi-level">
    {if $categories_tree}
        {include file="views/categories/components/categories_tree_simple.tpl"
            header=true
            checkbox_name=$smarty.request.checkbox_name|default:"categories_ids"
            parent_id=$category_id display=$smarty.request.display
            direction=$direction
        }
    {else}
        <p class="no-items center">
            {__("no_categories_available")}
            {if "ULTIMATE"|fn_allowed_for}
                <a href="{"categories.manage"|fn_url}">{__("manage_categories")}.</a>
            {/if}
        </p>
    {/if}

    <br />
    <p class="text-center mobile-hide quick-select-protip">{__("tip.quick_select_and_close_category_selector")}</p>
</div>

<div class="buttons-container buttons-container--hidden-cancel">
    {if $smarty.request.display == "radio"}
        {$but_close_text = __("choose")}
    {else}
        {$but_close_text = __("add_categories")}
    {/if}
    {include file="buttons/add_close.tpl" is_js=$smarty.request.extra|fn_is_empty}
</div>

</form>
