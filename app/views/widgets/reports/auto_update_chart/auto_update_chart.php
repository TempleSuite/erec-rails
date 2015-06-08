<?php
  // TODO: We need a proper dependency manager to only load these files once.
  $this->injectJs('js/plugin/dygraphs/dygraph-combined.min.js', true);
  $this->injectJs('js/plugin/flot/jquery.flot.cust.min.js', true);
  $this->injectJs('js/plugin/flot/jquery.flot.resize.min.js', true);
  $this->injectJs('js/plugin/flot/jquery.flot.fillbetween.min.js', true);
  $this->injectJs('js/plugin/flot/jquery.flot.orderBar.min.js', true);
  $this->injectJs('js/plugin/flot/jquery.flot.pie.min.js', true);
  $this->injectJs('js/plugin/flot/jquery.flot.tooltip.min.js', true);
  $this->injectJs('js/plugin/morris/raphael.min.js', true);
  $this->injectJs('js/plugin/morris/morris.min.js', true);
?>

<header>
  <span class="widget-icon"> <i class="fa fa-bar-chart-o"></i> </span>
  <h2> Live Registration </h2>
</header>

<!-- widget div-->
<div>
  <!-- widget edit box -->
  <div class="jarviswidget-editbox">
    <!-- This area used as dropdown edit box -->
  </div>
  <!-- end widget edit box -->

  <!-- widget content -->
  <div class="widget-body no-padding">
    <div id="updating-chart" class="chart"></div>
  </div>
  <!-- end widget content -->
</div>
