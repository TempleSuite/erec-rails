// donut
$(document).ready(function() {
  if ($('#donut-graph').length) {
    Morris.Donut({
      element: 'donut-graph',
      data: [
        {value: 27, label: 'Excellent'},
        {value: 59, label: 'Good'},
        {value: 12, label: 'Fair'},
        {value: 2, label: 'Poor'}
      ],
      formatter: function (x) { return x + "%"; }
    });
  }
});
