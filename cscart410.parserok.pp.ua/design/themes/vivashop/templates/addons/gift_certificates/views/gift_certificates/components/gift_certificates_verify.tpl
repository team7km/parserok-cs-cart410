<div class="ty-gift-certificate-validate gift-validate vs-sidebox">
    <form name="gift_certificate_verification_form" class="cm-ajax cm-form-dialog-opener cm-dialog-auto-size" action="{""|fn_url}">
        <input type="hidden" name="result_ids" value="gift_cert_verify" />
        <h2 class="ty-gift-certificate-validate__title vs-sidebox-title">{__("certificate_verification")}</h3>
        <div class="ty-input-append">
            {strip}
                <div class="ty-float-left">
                    <i class="ty-gift-certificate__icon ty-icon-gift"></i>
                </div>
                <div class="vs-gift-verify-wrapper">
                    <label for="id_verify_code" class="hidden cm-required">{__("gift_cert_code")}</label>
                    <input type="text" name="verify_code" id="id_verify_code" value="{__("enter_code")}" class="ty-input-text cm-hint" />
                    {include file="buttons/go.tpl" but_name="gift_certificates.verify" alt=__("apply") but_text=__("apply")}
                </div>
            {/strip}
        </div>
    </form>
</div>

<div title="{__("gift_certificate_verification")}" id="gift_cert_verify">
<!--gift_cert_verify--></div>
{script src="js/tygh/tabs.js"}
