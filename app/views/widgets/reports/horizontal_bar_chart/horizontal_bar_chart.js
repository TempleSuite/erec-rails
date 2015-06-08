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

  if ($("#bar-chart-h").length) {
    //Display horizontal graph
    var d1_h = [];
    for (var i = 0; i <= 3; i += 1)
      d1_h.push([parseInt(Math.random() * 3000), i]);

    var d2_h = [];
    for (var i = 0; i <= 3; i += 1)
      d2_h.push([parseInt(Math.random() * 3000), i]);

    var d3_h = [];
    for (var i = 0; i <= 3; i += 1)
      d3_h.push([parseInt(Math.random() * 3000), i]);

    var ds_h = [];
    ds_h.push({
      data : d1_h,
      bars : {
        horizontal : true,
        show : true,
        barWidth : 0.2,
        order : 1,
      }
    });
    ds_h.push({
      data : d2_h,
      bars : {
        horizontal : true,
        show : true,
        barWidth : 0.2,
        order : 2
      }
    });
    ds_h.push({
      data : d3_h,
      bars : {
        horizontal : true,
        show : true,
        barWidth : 0.2,
        order : 3
      }
    });

    // display graph
    $.plot($("#bar-chart-h"), ds_h, {
      colors : [$chrt_second, $chrt_fourth, "#666", "#BBB"],
      grid : {
        show : true,
        hoverable : true,
        clickable : true,
        tickColor : $chrt_border_color,
        borderWidth : 0,
        borderColor : $chrt_border_color,
      },
      legend : true,
      tooltip : true,
      tooltipOpts : {
        content : "<b>%x</b> = <span>%y</span>",
        defaultTheme : false
      }
    });
  }
});
