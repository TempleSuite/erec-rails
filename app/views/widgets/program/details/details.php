<header>
  <?php render_partial('edit_button', array('title' => 'program-details')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Details </h2>
</header>

<!-- widget div-->
<div role="content">
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" class="smart-form">
          <fieldset>
            <div class="row" style="margin-left: 0px;">
              <div class="col-xs-12">
                <div class="responsive-box-xl details" style="padding-right: 5px;">
                  <div class="row">
                    <div class="col-xs-12 ">
                      <div class="responsive-box-xl id-number" >
                        <label class="input" >Subject:</label>
                        <label class="input" style="margin-left:25px;">
                          <input type="text" name="program-subject" placeholder="Aquatics Program">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="margin-left: 0px; margin-right: 0px;">
              <div class="responsive-box-lg details" style="padding-right: 5px; padding-top: 0px;">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="responsive-box-xl id-number">
                      <label class="label">Program ID:</label>
                      <label class="input">
                        <input type="text" id="program-id" name="program-id" placeholder="4738265" disabled="disabled">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="responsive-box-xl id-number">
                      <div class="form-group has-success">
                        <label class="col-md-3 control-label">Status:</label>
                        <div class="col-md-6">
                          <div class="input-group">
                            <input class="form-control" type="text" name="status" placeholder="Published" disabled="disabled">
                            <span class="input-group-addon"><i class="fa fa-check"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="responsive-box-xl lean-right" style="max-width: 400px;">
                <div class="row">
                  <div class="col-xs-12" >
                    <label class="textarea">
                      <textarea rows="10" col="40" name="class-desc" placeholder="Program Description" style="margin-top:0px;"></textarea>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'program-details')); ?>
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
