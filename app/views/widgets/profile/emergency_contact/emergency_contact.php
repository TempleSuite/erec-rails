<header>
  <?php render_partial('edit_button', array('title' => 'emergency-information')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Emergency / Medical Information </h2>
</header>

<!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <!-- widget emergency contact accordion -->
        <form action="" id="emergency-contact-form" class="smart-form" novalidate="novalidate">
          <fieldset id="emergency-contact-information">
            <div class="row" style="padding-left: 15px;">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="responsive-box-lg">
                        <label>Contact Name</label>
                        <label class="input">
                          <i class="icon-prepend fa fa-user"></i>
                          <input class="letters-only" type="text" name="name" value="" placeholder="John">
                          <b class="tooltip tooltip-bottom-left">Emergency Contact Name</b>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="responsive-box-lg">
                        <label>Number1</label>
                        <label class="input">
                          <i class="icon-prepend fa fa-phone"></i>
                          <input class="" type="text" name="phone1" value="" placeholder="Phone" data-mask="999-999-9999" data-mask-placeholder= "x">
                          <b class="tooltip tooltip-top-left">Emergency phone 1</b>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="responsive-box-xl lean-right" style="max-width: 400px;">
                  <label class="textarea">
                  <i class="icon-prepend fa fa-comment"></i>
                    <textarea rows="5" cols="40" name="class-desc" placeholder="Comments / Instructions"></textarea>
                  </label>
                </div>
              </div>
            </div>

            <div class="row top-10">
              <div class="col-xs-12 top-10">
                <div class="responsive-box-md">
                   <label>Number2</label>
                   <label class="input">
                      <i class="icon-prepend fa fa-phone"></i>
                      <input class="" type="text" name="phone2" value="" placeholder="Phone" data-mask="999-999-9999" data-mask-placeholder= "x">
                      <b class="tooltip tooltip-top-left">Emergency phone 2</b>
                    </label>
                </div>

                <div class="responsive-box-xl">
                  <label>Email</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-envelope"></i>
                    <input class="" type="email" name="email" value="" placeholder="johndoe@domain.com">
                    <b class="tooltip tooltip-top-left">Emergency email address</b>
                  </label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>Allergies</label>
                  <label class="input">
                    <input class="" type="text" name="allergies" value="" placeholder="Allergies">
                    <b class="tooltip tooltip-top-left">Allergies</b>
                  </label>
                </div>

                <div class="responsive-box-md">
                  <label>Conditions</label>
                  <label class="input">
                    <input class="" type="text" name="conditions" value="" placeholder="Conditions">
                    <b class="tooltip tooltip-top-left">Conditions</b>
                  </label>
                </div>

                <div class="responsive-box-md">
                  <label>Dietary Restrictions</label>
                  <label class="input">
                    <input class="" type="text" name="dietary" value="" placeholder="Dietary Restrictions">
                    <b class="tooltip tooltip-top-left">Dietary Restrictions</b>
                  </label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>Blood Type</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-heart"></i>
                    <input class="" type="text" name="bloodtype" value="" placeholder="B-">
                    <b class="tooltip tooltip-top-left">Blood Type</b>
                  </label>
                </div>

                <div class="responsive-box-lg">
                  <label>Pickup Secret Word (authorization)</label>
                  <label class="input">
                    <input class="" type="text" name="secretword" value="" placeholder="Daisy Flowers">
                    <b class="tooltip tooltip-top-left">Pickup Secret Word (authorization)</b>
                  </label>
                </div>
              </div>
            </div>

            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'emergency-information')); ?>
            <!-- End Hidden Update Button Row -->
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
