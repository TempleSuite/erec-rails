<header>
  <span class="widget-icon"> <i class="fa fa-image txt-color-white"></i> </span>
  <h2> GL Inquiry </h2>
</header>

<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="well">
      <div class="widget-body no-padding">
        <div class="panel-body">
          <form action="" id="gl-report-form" class="smart-form" novalidate="novalidate">
            <fieldset>
              <div class="row">
                <div class="col-xs-12">
                  <div class="responsive-box-md" style="margin-right: 100px;">
                    <label class="label">Current Account</label>
                    <label class="widget ">
                      <select name="gl-list" id="gl-list">
                        <option>Select GL Account</option>
                        <option value="1-GR-08011-0001">1-GR-08011-0001</option>
                        <option value="1-86-08043-0023">1-86-08043-0023</option>
                        <option value="1-73-16220-0007">1-73-16220-0007</option>
                      </select> <i></i>
                    </label>
                  </div>
                  <div class="responsive-box-md">
                    <label class="label">Start date</label>
                    <div class="input-group">
                      <input type="text" name="start-date" id="gl-start-date" placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                  <div class="responsive-box-md">
                    <label class="label"> End date</label>
                    <div class="input-group">
                      <input type="text" name="end-date" id="gl-end-date" placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gl-details" style="display: none;">
                <div class="col-xs-12">
                  <div class="responsive-box-xl" style="max-width: 100%;">
                    <table class="table table-striped table-hover table-condensed">
                      <thead>
                        <tr>
                          <th>Date &amp; Time</th>
                          <th>Actual</th>
                          <th>Budget</th>
                          <th>Diff</th>
                          <th>Issuer</th>
                          <th>Entity</th>
                          <th>User</th>
                        </tr>
                      </thead>
                      <tbody id="gl-data">
                        <tr>
                          <td>Jan 01, 2015</td>
                          <td>$234.00</td>
                          <td>$0.00</td>
                          <td>$0.00</td>
                          <td>Lisa Jensen</td>
                          <td>Walk/Run Club</td>
                          <td>Steve Smith</td>
                        </tr>
                        <tr>
                          <td>Jan 06, 2015</td>
                          <td>$110.00</td>
                          <td>$0.00</td>
                          <td>$0.00</td>
                          <td>Sabine Cooperman</td>
                          <td>Sit and be Fit</td>
                          <td>Eileen Green</td>
                        </tr>
                        <tr>
                          <td>Feb 19, 2015</td>
                          <td>$516.00</td>
                          <td>$0.00</td>
                          <td>$0.00</td>
                          <td>Chelsea Hindle</td>
                          <td>Dance</td>
                          <td>Sahra Dilmaghanyan</td>
                        </tr>
                        <tr>
                          <td>Feb 23, 2015</td>
                          <td>$160.00</td>
                          <td>$0.00</td>
                          <td>$0.00</td>
                          <td>Aaron Cooperman</td>
                          <td>Mountain Biking</td>
                          <td>Hourash Falati</td>
                        </tr>
                        <tr>
                          <td>Mar 09, 2015</td>
                          <td>$100.00</td>
                          <td>$0.00</td>
                          <td>$0.00</td>
                          <td>Sabine Cooperman</td>
                          <td>Junior Tennis Program</td>
                          <td>Rick Ayling</td>
                        </tr>
                        <tr>
                          <td>Mar 14, 2015</td>
                          <td>$240.00</td>
                          <td>$0.00</td>
                          <td>$0.00</td>
                          <td>Lucinda Benton</td>
                          <td>TBK Session 5</td>
                          <td>Adrian Estergaard</td>
                        </tr>
                        <tr>
                          <td>Apr 06, 2015</td>
                          <td>$140.00</td>
                          <td>$0.00</td>
                          <td>$0.00</td>
                          <td>Chelsea Hindle</td>
                          <td>TBK Session 6</td>
                          <td>Carlos Esquivel</td>
                        </tr>
                        <tr>
                          <td>Apr 12, 2015</td>
                          <td>$340.00</td>
                          <td>$0.00</td>
                          <td>$0.00</td>
                          <td>Lucinda Benton</td>
                          <td>Kayaking Session 2</td>
                          <td>Sanjay Morar</td>
                        </tr>
                        <tr>
                          <td>Apr 22, 2015</td>
                          <td>$180.00</td>
                          <td>$0.00</td>
                          <td>$0.00</td>
                          <td>Aaron Cooperman</td>
                          <td>Pottery B asics</td>
                          <td>Christian Fenn</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="row gl-details">
                <div class='col-xs-12'>
                  <div class="responsive-box-lg sum-total">
                    <label class="label"><strong> Opening Balance:</strong></label>
                    <label class="label txt-color-red"> $0.00</label>
                    <br/>
                    <label class="label"><strong>Total:</strong></label>
                    <label class="label txt-color-red"> $321,113.10</label>
                    <br/>
                    <label class="label"><strong> Budget:</strong></label>
                    <label class="label txt-color-red"> $423,213.14</label>
                    <br/>
                    <label class="label"><strong>Remainder:</strong></label>
                    <label class="label txt-color-red">  $102,100.04</label>
                  </div>
                </div>
              </div>

              <div class="row gl-details pull-right" style="display: none;">
                <div class='responsive-box-xs' style="margin-right:60px;" >
                  <button type='submit' class='btn btn-primary btn-sm'>Export this Account</button>
                </div>
                <div class='responsive-box-xs'>
                  <button type='submit' class='btn btn-primary btn-sm'>Export All Accounts</button>
                </div>
              </div>

            </fieldset>
          </form>
        </div>
        <!-- end of panel-body -->
      </div>
    </div>
    <!-- end content -->
  </div>
</div>
