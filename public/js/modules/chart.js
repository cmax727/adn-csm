define(
    [
    './chart/lineChartModel',
    './chart/lineChartView'
    ],
    function (LineChartModel, LineChartView) {
       
        return {

            init: function () {

    			var mychart = new LineChartModel({ 
    				width: 700,
    				height: 260,
    				data: [3, 60, 25, 77, 51, 22, 81],
    				margin_top: 20,
		            margin_left: 40,
		            margin_right: 20,
		            margin_bottom: 40
    			});

				var mychartView = new LineChartView({
					el: "#chart",
					model: mychart
				});

            }
            
        };
    }
);