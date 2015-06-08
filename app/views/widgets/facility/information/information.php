<header>
  <?php render_partial('edit_button', array('title' => 'facility-information')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Information </h2>
</header>

<!-- widget div-->
<div role="content">
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" id="facility-information-form" class="smart-form" >
          <fieldset id="facility-information">
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-lg">
                  <label>Street Address</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-location-arrow"></i>
                    <input class="" type="text" name="address" value="" placeholder="Address">
                  </label>
                </div>
                <div class="responsive-box-xs">
                  <label>Unit</label>
                  <label class="input">
                    <input type="text" name="unit" placeholder="Unit">
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label>City</label>
                  <label class="input">
                    <input class="letters-only" type="text" name="city" placeholder="City">
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label>State/Province</label>
                  <label class="input">
                    <label class="input">
                      <select name="state">
                        <option value=" " >Please select your state</option>
                        <option value="AB">Alberta</option>
                        <option value="BC">British Columbia</option>
                        <option value="MB">Manitoba</option>
                        <option value="NB">New Brunswick</option>
                        <option value="NL">Newfoundland and Labrador</option>
                        <option value="NS">Nova Scotia</option>
                        <option value="ON">Ontario</option>
                        <option value="PE">Prince Edward Island</option>
                        <option value="QC">Quebec</option>
                        <option value="SK">Saskatchewan</option>
                        <option value="NT">Northwest Territories</option>
                        <option value="NU">Nunavut</option>
                        <option value="YT">Yukon</option>
                      </select>
                    </label>
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>Country</label>
                  <label class="input">
                    <input class="letters-only" type="text" name="country" placeholder="Country">
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label>ZIP / Postal Code</label>
                  <label class="input">
                    <input type="text" name="code" placeholder="Postal Code">
                  </label>
                </div>
                <div class="responsive-box-lg" >
                  <label>E-mail</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-envelope"></i>
                    <input class="" type="email" name="email" value="" placeholder="Email" >
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>Booking Phone</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-phone"></i>
                    <input class="" type="text" name="bookingphone" value="" placeholder="123-456-7890"  data-mask="999-999-9999" data-mask-placeholder="x">
                  </label>
                </div>
                <div class="responsive-box-md"></div>
                <div class="responsive-box-md">
                  <label>Facility Category</label>
                  <label>
                    <select id="facility-cat" style="min-width:188px;">
                      <option value="Aquatic Centre">Aquatic Centre</option>
                      <option value="Swimming">Swimming</option>
                      <option value="Baking">Baking</option>
                      <option value="Dance">Dance</option>
                    </select>
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>Capacity</label>
                  <label class="input">
                    <input class="" type="text" name="capacity" value="" placeholder="50">
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label>Security Deposit</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-dollar"></i>
                    <input class="" type="text" name="deposit" value="" placeholder="500">
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
            <br/>
            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'facility-information')); ?>
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
