{capture name="mainbox"}
    {$found_icon = "<span class=\"text-success\"><i class=\"icon-ok-circle\" style=\"font-size: 20px;vertical-align: middle;margin-right: 5px;\"></i></span>"}
    {$not_found_icon = "<span class=\"text-info\"><i class=\"icon-plus-sign\" style=\"font-size: 20px;vertical-align: middle;margin-right: 5px;\"></i></span>"}

    {if $data_exists}
        <form action="{""|fn_url}" cname="product_variations_converter_form" id="product_variations_converter_form" class="cm-ajax cm-comet form-edit form-horizontal cm-disable-check-changes" method="post">
            {foreach $product_ids as $product_id}
                <input type="hidden" name="product_ids[]" value="{$product_id}">
            {/foreach}

            <input type="hidden" name="by_variations" value="{$by_variations|intval}">
            <input type="hidden" name="by_combinations" value="{$by_combinations|intval}">
        </form>

        <div class="well">
            {if $configurable_products_count}
                <div class="row-fluid">
                    <div class="span4">{__("product_variations.converter.view.configurable_products_count")}</div>
                    <div class="span2">{$configurable_products_count|intval}</div>
                </div>
            {/if}
            {if $variations_products_count}
                <div class="row-fluid">
                    <div class="span4">{__("product_variations.converter.view.variations_count")}</div>
                    <div class="span2">{$variations_products_count|intval}</div>
                </div>
            {/if}
            {if $products_with_combinations_count}
                <div class="row-fluid">
                    <div class="span4">{__("product_variations.converter.view.products_with_combinations_count")}</div>
                    <div class="span2">{$products_with_combinations_count|intval}</div>
                </div>
            {/if}
            {if $combinations_count}
                <div class="row-fluid">
                    <div class="span4">{__("product_variations.converter.view.combinations_count")}</div>
                    <div class="span2">{$combinations_count|intval}</div>
                </div>
            {/if}
        </div>

        <h4>{__("product_variations.converter.view.options.title")}</h4>
        <p>{__("product_variations.converter.view.options.hint")}</p>
        <p>{__("product_variations.converter.view.options.legend.title")}</p>
        <ul class="list-unstyled">
            <li>{$found_icon nofilter} - {__("product_variations.converter.view.options.legend.found_icon")}</li>
            <li>{$not_found_icon nofilter} - {__("product_variations.converter.view.options.legend.not_found_icon")}</li>
        </ul>

        {include file="common/pagination.tpl" save_current_page=true div_id="product_variations_converter_options"}


        <div class="table-responsive-wrapper">

            <table width="100%" class="table table-middle" data-ca-main-content>
                <thead>
                <tr>
                    <th width="2%">&nbsp;</th>
                    <th width="20%" class="nowrap" colspan="2"><span>{__("option_name")}</span></th>
                    <th width="40%" class="nowrap" colspan="2"><span>{__("status")}</span></th>
                    <th width="25%" class="nowrap"><span>{__("product_name")}</span></th>
                </tr>
                </thead>
                {foreach $options as $option}
                    <tbody>
                        <tr>
                            <td>
                                {if $option.feature_id}
                                    <button alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" id="sw_option_{$option.option_id}" class="cm-combinations cm-product-variations__collapse product-variations__collapse-btn product-variations__collapse-btn--collapsed" type="button">
                                        <span class="icon-caret-down hidden" data-ca-switch-id="option_{$option.option_id}"> </span>
                                        <span class="icon-caret-right" data-ca-switch-id="option_{$option.option_id}"> </span>
                                    </button>
                                {/if}
                            </td>
                            <td colspan="2">
                                <a href="{"products.update?product_id={$option.product_id}&selected_section=options#group_product_option_{$option.option_id}"|fn_url}" target="_blank">
                                    {$option.option_name}{if $option.option_inner_name}/{$option.option_inner_name}{/if}
                                </a>
                            </td>
                            <td colspan="2">
                                {if $option.feature_id}
                                    {$found_icon nofilter}
                                    <a href="{"product_features.update?feature_id={$option.feature_id}"|fn_url}" target="_blank">
                                        {$option.feature_name}
                                    </a>
                                {else}
                                    {$not_found_icon nofilter}
                                {/if}
                            </td>
                            <td><a href="{"products.update?product_id={$option.product_id}"|fn_url}" target="_blank">{$option.product_name}</a></td>
                        </tr>
                    </tbody>

                    {if $option.feature_id}
                    <tbody data-ca-switch-id="option_{$option.option_id}" class="hidden">
                        {foreach $option.variants as $variant}
                            <tr>
                                <td width="2%"></td>
                                <td width="2%"></td>
                                <td>{$variant.variant}</td>
                                <td>
                                    {if $variant.feature_variant_id}
                                        {$found_icon nofilter}
                                    {else}
                                        {$not_found_icon nofilter}
                                    {/if}
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        {/foreach}
                    </tbody>
                    {/if}
                {/foreach}
            </table>
        </div>

        {include file="common/pagination.tpl" div_id="product_variations_converter_options"}
    {else}
        <p class="no-items">{__("product_variations.converter.view.no_data")}</p>
    {/if}
{/capture}

{capture name="buttons"}
    {if $data_exists}
        {include file="buttons/button.tpl"
            but_text=__("start")
            but_role="submit-link"
            but_name="dispatch[product_variations_converter.process]"
            but_target_form="product_variations_converter_form"
            but_meta="btn-primary cm-ajax cm-comet cm-confirm"
            but_method="POST"
            allow_href=true
        }
    {/if}
{/capture}
{include file="common/mainbox.tpl" title=__("product_variations.converter.view.title") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}
