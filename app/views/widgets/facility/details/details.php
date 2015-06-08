<header>
  <?php render_partial('edit_button', array('title' => 'facility-details')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Details </h2>
</header>

<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" id="facility-details-form" class="smart-form" novalidate="novalidate">
          <fieldset id="facility-details-fields">
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-lg details">
                  <img src="/img/superbox/maple-ridge-pool.jpg" alt="Maple Ridge Pool" class="icon-lg" id="photo">
                  <img src="img/edit.png" class="edit-image hidden-xs" data-expands="#facility-edit-image">
                  <label class="label"><strong>Maple Ridge Pool</strong></label>

                  <div class="id-number">
                    <label class="label"><strong>Facility ID:</strong></label>
                    <label class="label txt-color-red"> 27865456</label>
                  </div>

                  <label class="label"><strong>Location:</strong> Greg Moore Centre </label>
                  <label class="label"><strong>Capacity:</strong> 50</label>

                  <?php $this->partial('edit_image'); ?>
                </div>

                <div class="responsive-box-xl lean-right" style="max-width: 400px;">
                  <label class="textarea">
                    <textarea rows="10" cols="40" name="class-desc" placeholder="Facility Description"></textarea>
                  </label>
                </div>
              </div>

              <div class="col-xs-12">
                <div class="responsive-box-lg " >
                  <?php render_partial('rating', array('rating' => isset($locals['rating']) ? $locals['rating'] : '3.0')); ?>
                  <a href="#" class="enter-comments" data-expands="#facility-enter-comments">Enter Comments</a>
                  <?php $this->partial('enter_comments'); ?>
                </div>

                <div class="responsive-box-xl lean-right" style="max-width: 400px;">
                  <p>
                    <strong>Operating Hours:</strong>
                    <a href="" class="session-hours" data-expands="#facility-session-hours">Mon-Fri: 8am-6pm, Sat 10am-6pm</a>
                  </p>
                </div>

                <?php $this->partial('session_hours'); ?>
              </div>
            </div>
            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'facility-details')); ?>
            <!-- End Hidden Update Button Row -->
          </fieldset>
        </form>
      </div>
      <!-- end of panel-body -->
    </div>
    <!-- end content -->
  </div>
</div>
<!-- end widget div -->
