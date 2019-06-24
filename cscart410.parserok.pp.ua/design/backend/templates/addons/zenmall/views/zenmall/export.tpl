<div id="elm_sidebar" class="sidebar">
    <div class="sidebar-wrapper">
    </div>
</div>
<div class="content ufa">
    <div class="content-wrap">
        <script type="text/javascript">
          var zm_errors = {
            'ZENMALL_EXPORT_ERROR_CATEGORIES_NOT_FOUND'   : "{__('zenmall_export_error_categories_not_found')}",
            'ZENMALL_EXPORT_ERROR_GENERATE'               : "{__('zenmall_export_error_generate')}",
          }
        </script>
        {script src="js/addons/zenmall/zeroclipboard/ZeroClipboard.js"}
        {script src="js/addons/zenmall/zenmall.js"}
        <div id="zenmall_export_wrapper" class="zenmall_OpenSans">
         <div class="zenmall_b-error">
            <span class="zenmall_b-error__message"></span>
          </div>
          <div id="zenmall-export-step1" class="zenmall_b-wrapper step">
            <div class="zenmall_wrapper">
              <a href="https://www.zenmall.ru" target="_blank" class="zenmall_logo"></a>
              <span class="zenmall_underline"></span>
              <div class="zenmall_content">
                <h2 class="zenmall_header">
                  {__("zenmall_export_start_title")}</h2>
                <p class="zenmall_text">
                  {__("zenmall_export_start_description")}</p>
              </div>
              <div class="zenmall_content">
                <a href="javascript: void 7;" onclick="ZenMallStartExport()" class="zenmall_button">{__("zenmall_export_start_button")}</a>
              </div>
              <div class="zenmall_content">
                <p class="zenmall_text zenmall_text_info">
                  {__("zenmall_export_start_info")}</p>
              </div>
            </div>
          </div>
          <div id="zenmall-export-step2" class="zenmall_b-wrapper step" style="display:none">
            <div class="zenmall_wrapper">
              <a href="https://www.zenmall.ru" target="_blank" class="zenmall_logo"></a>
              <span class="zenmall_underline"></span>
              <div class="zenmall_content">
                <h2 class="zenmall_header">
                  {__("zenmall_export_sync_title")}</h2>
                <p class="zenmall_text">
                  {__("zenmall_export_sync_description")}</p>
              </div>
              <div class="zenmall_content">
                <div class="zenmall_text zenmall_text_progress">{__("zenmall_export_sync_status_text_catalog_sctructure")}</div>
              </div>
              <div class="zenmall_content">
                <p class="zenmall_text zenmall_text_info">
                  {__("zenmall_export_sync_info_time")}</p>
              </div>
            </div>
          </div>
          <div id="zenmall-export-step3" class="zenmall_b-wrapper step" style="display:none">
            <div class="zenmall_wrapper">
              <a href="https://www.zenmall.ru" target="_blank" class="zenmall_logo"></a>
              <span class="zenmall_underline"></span>
              <div class="zenmall_content">
                <h2 class="zenmall_header">
                  {__("zenmall_export_finish_title")}</h2>
                <ol class="zenmall_text zenmall_text_listing">
                  <li>
                    <a href="javascript: void 7;" target="_blank" class="zenmall_text zenmall_text_link zenmall_reg_link">{__("zenmall_export_finish_registration")}</a> {__("zenmall_export_finish_your_shop")}</li>
                  <li>
                    {__("zenmall_export_finish_copy_link")}</li>
                  <li>
                    {__("zenmall_export_finish_open_page")}<a href="javascript: void 7;" target="_blank" class="zenmall_text zenmall_text_link zenmall_manage_link">{__("zenmall_export_finish_manage_catalog")}</a> {__("zenmall_export_finish_in_back_office")}</li>
                  <li>
                    {__("zenmall_export_finish_insert_link")}</li>
                </ol>
              </div>
              <div class="zenmall_content">
                <div class="zenmall_text zenmall_text_hyperlink"></div>
              </div>
              <div class="zenmall_content">
                <a href="javascript: void 7;" class="zenmall_button zenmall_copy_link">{__("zenmall_export_finish_button_get_link")}</a>
              </div>
              <div class="zenmall_content">
                <p class="zenmall_text zenmall_text_info">
                  {__("zenmall_export_finish_catalog_will_be_imported")}</p>
              </div>
              <div class="zenmall_content">
                <p class="zenmall_text zenmall_text_info">
                  {__("zenmall_export_finish_recommendation")}</p>
              </div>
            </div>
          </div>
        </div>
        
        
    </div>
</div>

