import { createPlugin } from "../../core_methods";

function getMultiScripts(arr) {
  var _arr = $.map(arr, function (scr) {
    return $.getScript(scr);
  });

  _arr.push($.Deferred(function (deferred) {
    $(deferred.resolve);
  }));

  return $.when.apply($, _arr);
}

const blockLoaderMethods = {
  load() {
    $('.cm-block-loader').each((i, context) => {
      const { caObjectKey } = $(context).data();

      if (caObjectKey === undefined) {
        return;
      }

      $.ceAjax(
        'request',
        fn_url(`block_manager.render&object_key=${encodeURIComponent(caObjectKey)}`),
        {
          method: 'get',
          callback: blockLoaderMethods.processResponse(context),
          hidden: true
        }
      );
    });
  },

  processResponse(context) {
    return response => {
      const content = $(response.block_content);
      content.toggleClass('cm-block-loaded');

      let scripts = [];
      content.find('script').each((i, script) => {
        script.src ? scripts.push(script.src) : null;
      });

      getMultiScripts(scripts)
        .done(function () {
          content.find('script[src]').remove();

          $('.cm-block-loaded', $(context)).remove();
          $(context).append(content);

          $.commonInit(context);
        });
    };
  },
};

export const ceBlockLoaderInit = function () {
  createPlugin(
    'ceBlockLoader',
    blockLoaderMethods,
    'ce.block_loader'
  )
};