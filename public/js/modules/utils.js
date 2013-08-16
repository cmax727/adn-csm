define(
    [
      './utils/scrollEvents',
      './utils/widgets'
    ],

    function (scrollEvents, widgets) {

        return {
            init: function () {
                
                widgets.init();
                scrollEvents.set();

            }
        };
    }
);