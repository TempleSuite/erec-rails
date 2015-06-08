<header>
  <?php render_partial('edit_button', array('title' => 'equipment-information')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Information </h2>
</header>
<!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
      <div class="widget-body no-padding">
        <div class="panel-body well">
          <form action="" id="equipment-information" class="smart-form" novalidate="novalidate">
            <fieldset>
              <div class="row">
                <div class="col-xs-12">
                  <div class="responsive-box-md">
                    <label>Name</label>
                    <label class="input">
                      <input type="text" name="name" placeholder="Basketball">
                    </label>
                  </div>
                  <div class="responsive-box-md">
                    <label>Equipment Category </label>
                    <label>
                      <select id="search-sort" >
                        <option value="Sports Peripherals">Sports Peripherals</option>
                        <option value="Aquatic Centre">Aquatic Centre</option>
                        <option value="Baking">Baking</option>
                        <option value="Dance">Dance</option>
                      </select>
                    </label>
                  </div>
                  <div class="responsive-box-md">
                    <label>Fee / Deposit</label>
                    <label class="input">
                      <i class="icon-prepend fa fa-dollar"></i>
                      <input class="" type="text" name="name" placeholder="10" value="">
                    </label>
                  </div>
                </div>
              </div>
              <!-- Hidden Update Button Row -->
              <?php render_partial('edit_row', array('title' => 'equipment-information')); ?>
              <!-- End Hidden Update Button Row -->
            </fieldset>
          </form>
        </div>
        <!-- end of panel-body -->
      </div>
    <!-- end content -->
  </div>
  <!-- end of widget-body widget-hide-overflow no-padding -->
</div>
<!-- end widget div -->
