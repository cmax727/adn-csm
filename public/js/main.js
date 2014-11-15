define(
    [
        './modules/chart',
        './modules/utils',
        './modules/map',
    ],

    function (chart, utils, map) {
        return {
            start: function () {
                chart.init();
                utils.init();
                map.init();
            }
        };
    }
);