define(
    [
        './modules/chart',
        './modules/utils',
    ],

    function (chart, utils) {
        return {
            start: function () {
                chart.init();
                utils.init();
            }
        };
    }
);