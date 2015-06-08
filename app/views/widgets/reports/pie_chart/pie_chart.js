$(document).ready(function() {
  if ($('#pie-chart').length) {
    var data_pie = [];
    var series = 6;

    for (var i = 0; i < series; i++) {
      switch (i) {
        case 0:
          var labelName = "Active Kids";
          break;
        case 1:
          var labelName = "Arts";
          break;
        case 2:
          var labelName = "Birthdays";
          break;
        case 3:
          var labelName = "Day Camps";
          break;
        case 4:
          var labelName = "Fitness";
          break;
        case 5:
          var labelName = "Sports";
          break;
        default:
          var labelName = "Sport";
      }

      data_pie[i] = {
        label: labelName,
        data: Math.floor(Math.random() * 50) + 5
      };
    }

    $.plot($("#pie-chart"), data_pie, {
      series : {
        pie : {
          show : true,
          innerRadius : 0.5,
          radius : 1,
          label : {
            show : false,
            radius : 2 / 3,
            formatter : function(label, series) {
              return '<div style="font-size:11px;text-align:center;padding:4px;color:white;">' + label + '<br/>' + Math.round(series.percent) + '%</div>';
            },
            threshold : 0.1
          }
        }
      },
      legend : {
        show : true,
        noColumns : 1, // number of colums in legend table
        labelFormatter : null, // fn: string -> string
        labelBoxBorderColor : "#000", // border color for the little label boxes
        container : null, // container (as jQuery object) to put legend in, null means default on top of graph
        position : "ne", // position of default legend container within plot
        margin : [5, 10], // distance from grid edge to default legend container within plot
        backgroundColor : "#efefef", // null means auto-detect
        backgroundOpacity : 1 // set to 0 to avoid background
      },
      grid : {
        hoverable : true,
        clickable : true
      },
    });
  }
});
