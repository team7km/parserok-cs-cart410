{styles use_scheme=true reflect_less=$reflect_less}
{hook name="index:styles"}

    {style src="styles.less"}
    {style src="tygh/responsive.less"}

    {if $language_direction == 'rtl'}
        {style src="tygh/rtl.less"}
    {/if}

    {style src="vs-icons.less"}
    {style src="vs.less"}
    {style src="vs-responsive.less"}
    
    {* Translation mode *}
    {if $runtime.customization_mode.live_editor || $runtime.customization_mode.design}
        {style src="tygh/design_mode.css" area="A"}
    {/if}

    {* Theme editor mode *}
    {if $runtime.customization_mode.theme_editor}
        {style src="tygh/theme_editor.less"}
    {/if}

{/hook}
{/styles}
