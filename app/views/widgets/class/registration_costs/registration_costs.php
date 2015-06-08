<header>
  <?php render_partial('edit_button', array('title' => 'registration-costs')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Registration &amp; Costs </h2>
</header>

<!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" id="class-registration-costs-form" class="smart-form" novalidate="novalidate">
          <fieldset id="class-registration-costs">
            <div class="row">
              <div class="col-xs-12">
                <div class="inline-group">
                  <div class="responsive-box-sm" data-toggle="tooltip" data-placement="left" title="Some description here ">
                    <label class="checkbox">
                      <input type="checkbox" name="checkbox-refundable" checked="checked">
                      <i></i> Refundable
                    </label>
                  </div>
                  <div class="responsive-box-md" data-toggle="tooltip" data-placement="left" title="Some description here ">
                    <label class="checkbox">
                      <input type="checkbox" name="checkbox-session-based" checked="checked">
                      <i></i> Session-Based
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>Class Price</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-dollar"></i>
                    <input class="" type="text" name="classPrice" placeholder="350" value="">
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label>Per-Session Price</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-dollar"></i>
                    <input class="" type="text" name="perSessionPrice" placeholder="32" value="">
                  </label>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>Class Cost</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-dollar"></i>
                    <input class="" type="text" name="classCost" placeholder="350" value="">
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label>Per-Session Cost</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-dollar"></i>
                    <input class="" type="text" name="perSessionCost" placeholder="32" value="">
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-sm" style="margin-right:50px;">
                  <label>Max Capacity</label>
                  <label class="small-list">
                    <select name="class-min-age" id="class-min-age">
                      <option value="18" selected>18</option>
                      <option value="8">8</option>
                      <option value="5">5</option>
                    </select> <i></i>
                  </label>
                </div>
                <div class="responsive-box-lg">
                  <label>Minimum Capacity Met Lead time</label>
                  <label>
                    <select name="class-met-lead-time" id="class-met-lead-time">
                      <option value="3days" selected>3 days prior to first session</option>
                      <option value="8days">8 days prior to first session</option>
                      <option value="5days">5 days prior to first session</option>
                    </select> <i></i>
                  </label>
                </div>
                <div class="responsive-box-lg">
                  <label>De-registration Lead time</label>
                  <label>
                    <select name="class-registration-lead-time" id="class-registration-lead-time">
                      <option value="2weeks" selected>2 weeks prior to first session</option>
                      <option value="3weeks">3 weeks prior to first session</option>
                    </select> <i></i>
                  </label>
                </div>

              </div>
            </div>
            <div class="row" <?php if ($_SESSION['udata']['current-role'] != "admin") { echo "style='display: none;'"; } ?>>
              <div class="col-xs-12">
                <div class="responsive-box-md" >
                  <label>Min Capacity</label><br/>
                  <label class="small-list">
                    <select name="minCapacity" id="minCapacity">
                      <option value="00" selected>00</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                    </select> <i></i>
                  </label>
                </div>
                <div class="responsive-box-lg">
                  <label>Capacity Met Lead Time</label>
                  <label >
                    <select name="leadTime" id="leadTime">
                      <option value="03" selected>3 days prior to first session</option>
                      <option value="04">4 Days prior to first session</option>
                      <option value="05">5 Days prior to first session</option>
                      <option value="06">6 Days prior to first session</option>
                      <option value="07">7 Days prior to first session</option>
                    </select> <i></i>
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label>De-reg Lead Time</label>
                  <label >
                    <select name="deRegLeadTime" id="deRegLeadTime">
                      <option value="02" selected>2 weeks prior to first session</option>
                      <option value="03">3 Weeks prior to first session</option>
                      <option value="04">4 Weeks prior to first session</option>
                      <option value="05">5 Weeks prior to first session</option>
                      <option value="06">6 Weeks prior to first session</option>
                    </select> <i></i>
                  </label>
                </div>
              </div>
            </div>
            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'registration-costs')); ?>
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
