define(
    ['./chart/builder'],
    function (chart_builder) {
       
        return {
            init: function () {

            	var ChartBaseView = Backbone.View.extend({

            		el: null,
            		svg: null,

					render: function() {
						this.scales = {
						    x: this.getXScale(),
						    y: this.getYScale()
						};
						this.renderAxes();
						this.renderData();
					},

					getXScale: function() {
						return d3.scale.linear()
						.domain([0, this.model.get('data').length])
						.range([0 + this.model.get('margin_left'), this.model.get('width') - this.model.get('margin_right')]);
					},

					getYScale: function() {
						return d3.scale.linear()
						.domain([0, d3.max(this.model.get('data'))])
						.range([0 + this.model.get('margin_bottom'), this.model.get('height') - this.model.get('margin_top')]);
					},


					renderAxes: function(){
						var _this = this;

						this.svg.selectAll(".yTicks")
							.data(this.scales.y.ticks(4))
							.enter().append("svg:line")
							.attr("class", "yTicks")
							.attr("y1", function(d) { return -1 * _this.scales.y(d); } )
							.attr("x1", this.scales.x( this.model.get('width') ))
							.attr("y2", function(d) { return -1 * _this.scales.y(d); } )
							.attr("x2", this.scales.x(0))

						this.svg.selectAll(".xLabel")
							.data(this.scales.x.ticks(5))
							.enter().append("svg:text")
							.attr("class", "xLabel")
							.text(String)
							.attr("x", function(d) { return _this.scales.x(d) } )
							.attr("y", 0)
							.attr("text-anchor", "middle")

						this.svg.selectAll(".yLabel")
							.data(this.scales.y.ticks(4))
							.enter().append("svg:text")
							.attr("class", "yLabel")
							.text(String)
							.attr("x", 0)
							.attr("y", function(d) { return -1 * _this.scales.y(d) })
							.attr("text-anchor", "right")
							.attr("dy", 4)
					},

					initialize: function (options) {
					
						var vis = d3.select(this.el)
			                .append("svg:svg")
			                .attr("width", this.model.get('width') )
			                .attr("height", this.model.get('height') );

			            this.svg = vis.append("svg:g")
			                .attr("transform", "translate(0, "+this.model.get('height')+")");

						this.render();
					},

				});


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


				var LineChart = Backbone.Model.extend({
				});

    			var mychart = new LineChart({ 
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

				//mychartView.render();



            }
        };
    }
);