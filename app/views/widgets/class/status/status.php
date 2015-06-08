<header>
  <?php render_partial('edit_button', array('title' => 'class-status')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Status </h2>
</header>
<!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
      <div class="widget-body no-padding">
        <div class="panel-body well">
          <form action="" id="class-status-form" class="smart-form" novalidate="novalidate">
            <fieldset id="class-status">
              <div class="row">
                <div class="col-xs-12">
                  <label class="label">Current Status</label>
                  <div class="inline-group">
                    <div class="responsive-box-sm" data-toggle="tooltip" data-placement="left" title="Some description here ">
                      <label class="checkbox">
                        <input type="checkbox" name="checkbox-active" checked="checked">
                        <i></i>Active
                      </label>
                    </div>
                    <div class="responsive-box-sm" data-toggle="tooltip" data-placement="left" title="Some description here " style="width:140px;">
                      <label class="checkbox">
                        <input type="checkbox" name="checkbox-online">
                        <i></i>Published Online
                      </label>
                    </div>
                    <div  class="responsive-box-sm" data-toggle="tooltip" data-placement="left" title="Some description here ">
                      <label class="checkbox">
                        <input type="checkbox" name="checkbox-available">
                        <i></i>Available
                      </label>
                    </div>
                    <div class="responsive-box-sm" data-toggle="tooltip" data-placement="left" title="Some description here " style="width:165px;margin-right:-25px;">
                      <label class="checkbox">
                        <input type="checkbox" name="checkbox-online">
                        <i></i>Online Registrable
                      </label>
                    </div>
                    <div class="responsive-box-sm" data-toggle="tooltip" data-placement="left" title="Some description here ">
                      <label class="checkbox">
                        <input type="checkbox" name="checkbox-cancelled">
                        <i></i>Cancelled
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Hidden Update Button Row -->
              <?php render_partial('edit_row', array('title' => 'class-status')); ?>
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
