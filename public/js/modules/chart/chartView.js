define(
    [],
    function () {
       
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
        
        return ChartBaseView;
    }
);

