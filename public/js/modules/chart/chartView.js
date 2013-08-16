var ChartBase = Backbone.View.extend({

  defaults: {
    xAttr: "x",
    yAttr: "y",
    margin: {...}
  },

  render: function() {

    this.scales = {
        x: this.getXScale(),
        y: this.getYScale()
    };
    this.renderAxes();
    this.renderData();

    return this;
  }

});