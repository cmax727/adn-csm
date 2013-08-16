define(
    ['./chartView'],
    function (ChartBaseView) {

    	var LineChartView = ChartBaseView.extend({

			el: null,

			renderData: function(){
				var _this = this;

				var line = d3.svg.line()
					.x(function(d,i) { return _this.scales.x(i); })
					.y(function(d) { return -1 * _this.scales.y(d); })
	          
				this.svg.append("svg:path").attr("d", line( this.model.get('data') ));

				$.each( this.model.get('data'), function(i, d){
					_this.svg.append("circle")
					.attr("r", 8)
					.attr("cx", _this.scales.x(i))
					.attr("cy", ( -1 * _this.scales.y(d)) ) 
					.attr("class", "chartdots")
				});

			},

		});

        return LineChartView;
    }
);