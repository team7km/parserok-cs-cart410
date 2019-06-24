{if $product.master_product_id && $product.company_id}
    {$product_detail_view_url = fn_link_attach(fn_url("products.view?product_id={$product.master_product_id}"), "vendor_id=`$product.company_id`") scope="parent"}
{/if}