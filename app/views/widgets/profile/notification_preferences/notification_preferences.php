<header>
  <?php render_partial('edit_button', array('title' => 'notification-preferences')); ?>
  <span class="widget-icon"> <i class="fa fa-image txt-color-white"></i> </span>
  <h2> Notification Preferences </h2>
</header>

<!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" id="profile-notification-preferences-form" class="smart-form" novalidate="novalidate">
          <fieldset>
            <div class="row">
              <div class="col-xs-12">
                <label class="label">Send notifications to</label>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox" checked="checked">
                    <i></i>E-mail
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox">
                    <i></i>Phone (SMS)
                  </label>
                </div>
              </div>
            </div>

            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'notification-preferences')); ?>
            <!-- End Hidden Update Button Row -->
          </fieldset>
        </form>
      </div>
    <!-- end of panel-body -->
    </div>
    <!-- end of panel-body -->
  </div>
  <!-- end content -->
</div>
