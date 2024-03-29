$(document).ready(function() {
  /* chart colors default */
  var $chrt_border_color = "#efefef";
  var $chrt_grid_color = "#DDD"
  var $chrt_main = "#E24913";     /* red       */
  var $chrt_second = "#6595b4";   /* blue      */
  var $chrt_third = "#FF9F01";    /* orange    */
  var $chrt_fourth = "#7e9d3a";   /* green     */
  var $chrt_fifth = "#BD362F";    /* dark red  */
  var $chrt_mono = "#000";

  if ($('#updating-chart').length) {
    // For the demo we use generated data, but normally it would be coming from the server
    var data = [], totalPoints = 200;

    function getRandomData() {
      if (data.length > 0)
        data = data.slice(1);

      // do a random walk
      while (data.length < totalPoints) {
        var prev = data.length > 0 ? data[data.length - 1] : 5;
        var y = prev + Math.random() * 2 - 1;
        if (y < 0)
          y = 0;
        if (y > 10)
          y = 10;
        data.push(y);
      }

      // zip the generated y values with the x values
      var res = [];

      for (var i = 0; i < data.length; ++i)
        res.push([i, data[i]]);

      return res;
    }

    // setup control widget
    var updateInterval = 1000;

    $("#updating-chart").val(updateInterval).change(function() {
      var v = $(this).val();
      if (v && !isNaN(+v)) {
        updateInterval = +v;

        if (updateInterval < 1)
          updateInterval = 1;
        if (updateInterval > 2000)
          updateInterval = 2000;

        $(this).val("" + updateInterval);
      }
    });

    // setup plot
    var options = {
      yaxis : {
        min : 0,
        max : 10
      },
      xaxis : {
        min : 0,
        max : 100
      },
      colors : [$chrt_fourth],
      series : {
        lines : {
          lineWidth : 1,
          fill : true,
          fillColor : {
            colors : [{
              opacity : 0.4
            }, {
              opacity : 0
            }]
          },
          steps : false

        }
      }
    };

    var plot = $.plot($("#updating-chart"), [getRandomData()], options);

    function update() {
      plot.setData([getRandomData()]);
      // since the axes don't change, we don't need to call plot.setupGrid()
      plot.draw();
      setTimeout(update, updateInterval);
    }

    update();
  }
});
