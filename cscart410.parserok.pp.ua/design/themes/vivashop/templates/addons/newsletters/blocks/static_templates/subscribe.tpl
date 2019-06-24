{** block-description:tmpl_subscription **}
{if $addons.newsletters}
<div class="subscribe-block ty-footer-form-block">
    <form action="{""|fn_url}" method="post" name="subscribe_form">
        <input type="hidden" name="redirect_url" value="{$config.current_url}" />
        <input type="hidden" name="newsletter_format" value="2" />
        <div class="clearfix">
            <p class="subscribe-notice ty-float-left">{__("stay_connected_notice")}</p>
            <div class="control-group input-append subscribe ty-float-left vs-subscribe">

                <label class="cm-required cm-email hidden" for="subscr_email{$block.block_id}">{__("email")}</label>
                <input type="text" name="subscribe_email" id="subscr_email{$block.block_id}" size="20" value="{__("enter_email")}" class="cm-hint ty-input-text vs-subscribe-email " />
                
                <button title="{__("go")}" class="ty-btn-go vs-subscribe-button" type="submit">{__("subscribe")}</button>
                <input type="hidden" name="dispatch" value="newsletters.add_subscriber" />

            </div>
        </div>
    </form>
</div>
{/if}