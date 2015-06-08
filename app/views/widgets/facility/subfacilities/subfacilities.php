<header>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Subfacilities </h2>
</header>
<!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
      <div class="widget-body no-padding">
        <div class="panel-body well">
          <?php render_partial('search_row', array(
            'names'    => array('Dutch Lake Community Centre'),
            'type'     => 'facility',
            'cost'     => '45',
            'rating'   => 4.2,
            'capacity' => 80,
            'keywords' => 'gym classroom'
          ));?>

          <?php render_partial('search_row', array(
            'names'    => array('Dutch Lake Community Centre', 'Gym'),
            'type'     => 'facility',
            'cost'     => '20',
            'rating'   => 4.2,
            'capacity' => 120,
            'keywords' => 'gym fitness hockey indoor soccer'
          ));?>

        </div>
        <!-- end of panel-body -->
      </div>
    <!-- end content -->
  </div>
</div>
<!-- end widget div -->
