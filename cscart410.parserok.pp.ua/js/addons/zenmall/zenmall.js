var url_zm = fn_url('zenmall.export');
var zenmall_reg_link = "http://accounts.zenmall.ru";
var zenmall_manage_link = "http://accounts.zenmall.ru/#/catalog";

$(document).ready(function(){
    $('#zenmall-export-step3 a.zenmall_reg_link').attr('href',zenmall_reg_link);
    $('#zenmall-export-step3 a.zenmall_manage_link').attr('href',zenmall_manage_link);
});

function ZenMallSetStep(step){
    var container = $('#zenmall-export-step'+parseInt(step));
    $('#zenmall_export_wrapper > .step').hide();
    container.show();
}

function ZenMallStartExport(){
    ZenMallSetStep(2);
    $.ceAjax('request', url_zm, {
            callback: function(resp) {
                if(resp.error){
                    ZenMallSetError(resp.error_message);
                    ZenMallSetStep(1);
                }else{
                    $('#zenmall-export-step3 .zenmall_text_hyperlink').html(resp.export_url);
                    $('#zenmall-export-step3 .zenmall_copy_link').attr('data-clipboard-text',resp.export_url);
                    ZenMallSetStep(3);
                    var client = new ZeroClipboard($("#zenmall-export-step3 .zenmall_copy_link"));
                }
            },
            method: 'POST',
            dataType: 'json',
            data: {is_ajax:1}
        }
    );
}

function ZenMallSetError (text) {
    $('#zenmall_export_wrapper .zenmall_b-error__message').html(zm_errors[text]);
    $('#zenmall_export_wrapper .zenmall_b-error').show();
    setTimeout(function() {$('#zenmall_export_wrapper .zenmall_b-error').hide();}, 5000)
}