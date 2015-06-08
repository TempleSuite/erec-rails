<header>
  <?php render_partial('edit_button', array('title' => 'program-status')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Status</h2>
</header>

<!-- widget div-->
<div role="content">
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" id="program-status-form" class="smart-form" novalidate="novalidate">
          <fieldset>
            <div class="row">
              <div class="col-xs-12">
                <section>
                  <label class="label">Current Status</label>
                  <div class="inline-group">
                    <div class="responsive-box-md" data-toggle="tooltip" data-placement="left" title="Some description here ">
                      <label class="checkbox">
                        <input type="checkbox" name="checkbox-active" checked="checked" >
                        <i></i>Active (enabled)
                      </label>
                    </div>
                    <div class="responsive-box-md" data-toggle="tooltip" data-placement="left" title="Some description here ">
                      <label class="checkbox">
                        <input type="checkbox" name="checkbox-published" >
                        <i></i>Published online
                      </label>
                    </div>
                    <div class="responsive-box-lg" data-toggle="tooltip" data-placement="left" title="Some description here ">
                      <label class="checkbox">
                        <input type="checkbox" name="checkbox-available">
                        <i></i>Available (operational)
                      </label>
                    </div>
                  </div>
                </section>
              </div>
            </div>
            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'program-status')); ?>
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
