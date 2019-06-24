{include file="common/subheader.tpl" title=__("et_dd_image") target="#et_dd_setting"}
{assign var=array_name value='category_data'}
{assign var=all_disabled value=""}
{assign var=menu_disabled value=""}

{if $category_data.main_pair}
    {assign var="current_image_width" value="(Current image width: `$category_data.main_pair.detailed.image_x` px)"}
    {assign var="current_image_height" value="(Current image height: `$category_data.main_pair.detailed.image_y` px)"}
{/if}

{if $et_dd_image.dd_status != "Y"}
    {assign var=all_disabled value="disabled"}
{elseif $et_dd_image.custom_menu_settings != "Y"}
    {assign var=menu_disabled value="disabled"}
{/if}

<fieldset>
    <div id="et_dd_setting" class="in collapse">
        <input type="hidden" name="{$array_name}[et_dd_id]" value="{$et_dd_image.dropdown_image_id}">

<!-- Activate settings -->
        <div class="control-group">
            <label class="control-label" for="et_dd_active">
                {__("active")}:
            </label>
            <div class="controls">
                <input type="hidden" name="{$array_name}[et_dd_active]" value="N" />
                <input type="checkbox" name="{$array_name}[et_dd_active]" id="et_dd_active" value="Y" {if $et_dd_image.dd_status == "Y"}checked="checked"{/if} onclick="Tygh.$.disable_elms(['et_dd_image_width','et_dd_image_height','et_dd_url','et_dd_push_menu_items','et_dd_custom_menu_settings'], !this.checked); Tygh.$.disable_elms(['et_dd_offset_right','et_dd_offset_bottom','et_dd_menu_width','et_dd_menu_min_height'], ((!document.getElementById('et_dd_custom_menu_settings').checked && !document.getElementById('et_dd_custom_menu_settings').disabled)) || !this.checked);" >
            </div>
        </div>

<!-- Image settings -->
        <div class="control-group">
            <label for="et_dd_image_width" class="control-label">
                {__("et_dd_image_width")}:
            </label>
            <div class="controls">
                <input type="text" id="et_dd_image_width" name="{$array_name}[et_dd_image_width]" size="10" maxlength="4" value="{$et_dd_image.image_width|default:"0"}" class="input-micro" {$all_disabled}>
                <span> &nbsp; px {if $current_image_width}{$current_image_width}{/if}</span>
            </div>
        </div>
        <div class="control-group">
            <label for="image_height" class="control-label">
                {__("et_dd_image_height")}:
            </label>
            <div class="controls">
                <input type="text" id="et_dd_image_height" name="{$array_name}[et_dd_image_height]" size="10" maxlength="4" value="{$et_dd_image.image_height|default:"0"}" class="input-micro" {$all_disabled}>
                <span> &nbsp; px {if $current_image_height}{$current_image_height}{/if}</span>
            </div>
        </div>

<!-- URL -->
        <div class="control-group">
            <label for="et_dd_url" class="control-label">
                {__("et_dd_url")}:
            </label>
            <div class="controls">
                <input type="text" id="et_dd_url" name="{$array_name}[et_dd_url]" size="10" value="{$et_dd_image.url|default:""}" class="input-large" {$all_disabled}>
            </div>
        </div>
<!-- Push menu items -->
        <div class="control-group">
            <label class="control-label" for="et_dd_push_menu_items">
                {__("et_dd_push_menu_items")}:
            </label>
            <div class="controls">
                <input type="hidden" name="{$array_name}[et_dd_push_menu_items]" value="N" />
                <input type="checkbox" name="{$array_name}[et_dd_push_menu_items]" id="et_dd_push_menu_items" value="Y" {if $et_dd_image.push_menu_items == "Y"}checked="checked"{/if} {$all_disabled}>
            </div>
        </div>

<!-- Custom menu settings -->
        <div class="control-group">
            <label class="control-label" for="et_dd_custom_menu_settings">
                {__("et_dd_custom_menu_settings")}:
            </label>
            <div class="controls">
                <input type="hidden" name="{$array_name}[et_dd_custom_menu_settings]" value="N" />
                <input type="checkbox" name="{$array_name}[et_dd_custom_menu_settings]" id="et_dd_custom_menu_settings" value="Y" {if $et_dd_image.custom_menu_settings == "Y"}checked="checked"{/if} onclick="Tygh.$.disable_elms(['et_dd_offset_right','et_dd_offset_bottom','et_dd_menu_width','et_dd_menu_min_height'], !this.checked); " {$all_disabled}>
            </div>
        </div>

<!-- Offset Image settings -->
        <div class="control-group">
            <label for="et_dd_offset_right" class="control-label">
                {__("et_dd_offset_right")}:
            </label>
            <div class="controls">
                <input type="text" id="et_dd_offset_right" name="{$array_name}[et_dd_offset_right]" size="10" maxlength="4" value="{$et_dd_image.offset_right|default:"0"}" class="input-micro" {$all_disabled} {$menu_disabled}>
                <span> &nbsp; px</span>
            </div>
        </div>
        <div class="control-group">
            <label for="image_height" class="control-label">
                {__("et_dd_offset_bottom")}:
            </label>
            <div class="controls">
                <input type="text" id="et_dd_offset_bottom" name="{$array_name}[et_dd_offset_bottom]" size="10" maxlength="4" value="{$et_dd_image.offset_bottom|default:"0"}" class="input-micro" {$all_disabled} {$menu_disabled}>
                <span> &nbsp; px</span>
            </div>
        </div>

<!-- Menu width settings -->
        <div class="control-group">
            <label for="et_dd_menu_width" class="control-label">
                {__("et_dd_menu_width")}:
            </label>
            <div class="controls">
                <input type="text" id="et_dd_menu_width" name="{$array_name}[et_dd_menu_width]" size="10" maxlength="4" value="{$et_dd_image.menu_width|default:"0"}" class="input-micro" {$all_disabled} {$menu_disabled}>
                <span> &nbsp; px</span>
            </div>
        </div>
        
<!-- Menu min height settings -->
        <div class="control-group">
            <label for="et_dd_menu_min_height" class="control-label">
                {__("et_dd_min_menu_height")}:
            </label>
            <div class="controls">
                <input type="text" id="et_dd_menu_min_height" name="{$array_name}[et_dd_min_menu_height]" size="10" maxlength="4" value="{$et_dd_image.menu_min_height|default:"0"}" class="input-micro" {$all_disabled} {$menu_disabled}>
                <span> &nbsp; px</span>
            </div>
        </div>
    </div>
</fieldset>