<header>
  <?php render_partial('edit_button', array('title' => 'gallery-header')); ?>
  <span class="widget-icon"> <i class="glyphicon glyphicon-picture txt-color-white"></i> </span>
  <h2>Gallery</h2>
</header>

<!-- widget div-->
<div role="content">
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <div id="myCarousel-2" class="carousel fade">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel-2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel-2" data-slide-to="1"></li>
            <li data-target="#myCarousel-2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <?php foreach(array(
              array(
                'id' => '0',
                'src' => '/img/superbox/superbox-full-6.jpg',
                'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam.',
                'active' => true
              ),
              array(
                'id' => '1',
                'src' => '/img/superbox/superbox-full-24.jpg',
                'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam.'
              ),
              array(
                'id' => '2',
                'src' => '/img/superbox/superbox-full-14.jpg',
                'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam.'
              )
            ) as $slide) {
              $this->partial('item', array('locals' => $slide));
            } ?>
          </div>

          <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
          <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>

          <a class="carousel-delete" href="#myCarousel-2"><i class="fa fa-trash-o txt-color-white"></i></a>
        </div>

        <form action="" id="gallery-form" class="smart-form" novalidate="novalidate">
          <fieldset>
            <!-- Hidden Update Button Row -->
            <div class="row hidden-button hidden" id="testme" data-row="gallery-header">
              <footer>
                <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary btn-sm update-button carousel-button" data-update="gallery-header">
                    Add Image      </button>
                </div>
              </footer>
            </div>
            <!-- End Hidden Update Button Row -->
          </fieldset>
        </form>

      </div>
    </div>
  </div>

</div>
