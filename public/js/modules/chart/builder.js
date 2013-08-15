define(
    [],

    function () {
       var  chart_container = "#chart",
            data = [3, 60, 25, 77, 51, 22, 81],
            w = 700,
            h = 260,
            margin_top = 20,
            margin_left = 40,
            margin_right = 20,
            margin_bottom = 40,

            y = d3.scale.linear().domain([0, d3.max(data)]).range([0 + margin_bottom, h - margin_top]),
            x = d3.scale.linear().domain([0, data.length]).range([0 + margin_left, w - margin_right]);

        var drawChartBg = function(g){
              /*g.append("svg:line")
                  .attr("x1", x(0))
                  .attr("y1", -1 * y(0))
                  .attr("x2", x(w))
                  .attr("y2", -1 * y(0))

              g.append("svg:line")
                  .attr("x1", x(0))
                  .attr("y1", -1 * y(0))
                  .attr("x2", x(0))
                  .attr("y2", -1 * y(d3.max(data)))

              g.selectAll(".xTicks")
                  .data(x.ticks(5))
                  .enter().append("svg:line")
                  .attr("class", "xTicks")
                  .attr("x1", function(d) { return x(d); })
                  .attr("y1", -1 * y(0))
                  .attr("x2", function(d) { return x(d); })
                  .attr("y2", -1 * y(d3.max(data)))*/

              g.selectAll(".yTicks")
                  .data(y.ticks(4))
                  .enter().append("svg:line")
                  .attr("class", "yTicks")
                  .attr("y1", function(d) { return -1 * y(d); })
                  .attr("x1", x(w))
                  .attr("y2", function(d) { return -1 * y(d); })
                  .attr("x2", x(0))
        }

        var setLabels = function(g){
            g.selectAll(".xLabel")
                .data(x.ticks(5))
                .enter().append("svg:text")
                .attr("class", "xLabel")
                .text(String)
                .attr("x", function(d) { return x(d) })
                .attr("y", 0)
                .attr("text-anchor", "middle")

            g.selectAll(".yLabel")
                .data(y.ticks(4))
                .enter().append("svg:text")
                .attr("class", "yLabel")
                .text(String)
                .attr("x", 0)
                .attr("y", function(d) { return -1 * y(d) })
                .attr("text-anchor", "right")
                .attr("dy", 4)
        }

        return {
            init: function () {

              var vis = d3.select(chart_container)
                  .append("svg:svg")
                  .attr("width", w)
                  .attr("height", h)

              var g = vis.append("svg:g")
                  .attr("transform", "translate(0, "+h+")");
              
              drawChartBg(g);
              setLabels(g);

              var line = d3.svg.line()
                  .x(function(d,i) { return x(i); })
                  .y(function(d) { return -1 * y(d); })
              
              g.append("svg:path").attr("d", line(data));

              $.each( data, function(i, d){
                
                g.append("circle")
                  .attr("r", 8)
                  .attr("cx", x(i))
                  .attr("cy", ( -1 * y(d)) ) 
                  .attr("class", "chartdots")
              });

            }
        };
    }
);