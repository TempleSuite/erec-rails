<header>
  <?php render_partial('edit_button', array('title' => 'class-information')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Information </h2>
</header>
 <!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
      <div class="widget-body no-padding">
        <div class="panel-body well">
          <div class="row">
            <div class="col-xs-12">
              <form action="" id="class-information-form" class="smart-form" novalidate="novalidate">
                <fieldset id="class-information">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="responsive-box-md">
                        <label>Base Program</label>
                        <label>
                          <select name="class-program" id="class-program">
                            <option value="Swimming Program">Swimming Program</option>
                            <option value="Aquatic Centre">Aquatic Centre</option>
                            <option value="Baking">Baking</option>
                            <option value="Dance">Dance</option>
                          </select> <i></i>
                        </label>
                      </div>
                      <div class="responsive-box-sm">
                        <label>Min Age</label><br/>
                        <label class="small-list">
                          <select name="class-min-age" id="class-min-age">
                            <option value="18"selected>18</option>
                            <option value="0" >20</option>
                            <option value="10">25</option>
                            <option value="15">30</option>

                          </select> <i></i>
                        </label>
                      </div>
                      <div class="responsive-box-sm">
                        <label>Max Age</label><br/>
                        <label class="small-list">
                          <select name="class-min-age" id="class-min-age">
                            <option value="99" selected>99+</option>
                            <option value="50">50+</option>
                            <option value="20">20+</option>
                          </select> <i></i>
                        </label>
                      </div>
                      <div class="responsive-box-sm">
                        <label>Gender Limits</label>
                        <label>
                          <select name="class-min-age" id="class-min-age">
                            <option value="All" selected>All</option>
                            <option value="Male">Male only</option>
                            <option value="Female">Female only</option>
                          </select> <i></i>
                        </label>
                      </div>
                      <div class="responsive-box-sm">
                        <label>Max Capacity</label>
                        <label class="small-list">
                          <select name="class-min-age" id="class-min-age">
                            <option value="18" selected>18</option>
                            <option value="8">8</option>
                            <option value="5">5</option>
                          </select> <i></i>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <p>Relevancy Tags</p>
                      <div class="form-group">
                        <input class="form-control tagsinput" value="Aquatic,Access Ramp,Indoors" data-role="tags-late-load" style="display: none;">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <p>Restriction Tags</p>
                      <div class="form-group">
                        <input class="form-control tagsinput" value="Adult-only,Female-only" data-role="tags-late-load" style="display: none;">
                      </div>
                    </div>
                  </div>
                  <!-- Hidden Update Button Row -->
                  <?php render_partial('edit_row', array('title' => 'class-information')); ?>
                  <!-- End Hidden Update Button Row -->
                </fieldset>
              </form>
            </div>
          </div>
        </div>
        <!-- end of panel-body -->
      </div>
    <!-- end content -->
  </div>
</div>
<!-- end widget div -->
