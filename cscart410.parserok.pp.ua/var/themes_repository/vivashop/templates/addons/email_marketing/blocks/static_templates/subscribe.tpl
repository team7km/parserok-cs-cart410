{** block-description:email_marketing.tmpl_subscription **}
{if $addons.email_marketing}
<div class="subscribe-block ty-footer-form-block">
    <form action="{""|fn_url}" method="post" name="subscribe_form">
        <input type="hidden" name="redirect_url" value="{$config.current_url}" />

        <div class="clearfix">
            <p class="subscribe-notice ty-float-left">{__("stay_connected_notice")}</p>
            <div class="control-group input-append subscribe ty-float-left vs-subscribe">

                <label class="cm-required cm-email hidden" for="elm_subscr_email{$block.block_id}">{__("email")}</label>
                <input type="text" name="subscribe_email" id="elm_subscr_email{$block.block_id}" size="20" value="{__("enter_email")}" class="cm-hint ty-input-text vs-subscribe-email " />
                
                <button title="{__("go")}" class="ty-btn-go vs-subscribe-button" type="submit">{__("subscribe")}</button>
                <input type="hidden" name="dispatch" value="em_subscribers.update" />

            </div>
        </div>
    </form>
</div>
{/if}