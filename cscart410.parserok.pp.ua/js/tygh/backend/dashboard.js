(function (_, $) {
    $(_.doc).ready(function () {
        $.ceAjax('request', fn_url('index.index'), {
            result_ids: 'dashboard_content',
            hidden: true
        });
    });
})(Tygh, Tygh.$);
