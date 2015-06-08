<header>
  <span class="widget-icon"> <i class="fa fa-file-text"></i> </span>
  <h2> Program Status Report </h2>
</header>

<!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="well">
      <div class="widget-body no-padding">
        <div class="panel-body">
          <form action="" id="program-status-form" class="smart-form" novalidate="novalidate">
            <fieldset>
              <div class="row">
                <div class="col-xs-12">
                  <div class="responsive-box-sm" style="padding-right: 5px;">
                    <h5>Activity: </h5>
                  </div>
                  <div class="responsive-box-md">
                    <label class="widget lean-right">
                      <select name="activity-list" id="activity-list">
                        <option>Select Activity</option>
                        <option value="09223">Pro D Daycamp</option>
                        <option value="09048">Babysitter Training</option>
                        <option value="09118">Dodgeball</option>
                      </select> <i></i>
                    </label>
                  </div>
                  <div class="responsive-box-md">
                    <div class="input-group">
                      <input type="text" name="start-date" id="prog-start-date" placeholder=" Start date" class="form-control datepicker" data-dateformat="dd/mm/yy">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                  <div class="responsive-box-md">
                    <div class="input-group">
                      <input type="text" name="end-date" id="prog-end-date" placeholder=" End date" class="form-control datepicker" data-dateformat="dd/mm/yy">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                  <div class="responsive-box-xs pull-right">
                    <button type='submit' class='btn btn-primary btn-sm' id="activity-update">Update</button>
                  </div>
                </div>
              </div>

              <div class="row" id="activity-details" style="display: none;">
                <div class="col-xs-12">
                  <table class="table table-striped table-hover table-condensed">
                    <thead>
                      <tr>
                        <th>Activity Name</th>
                        <th>Date</th>
                        <th>Min</th>
                        <th>Max</th>
                        <th>Reg</th>
                        <th>Wait</th>
                        <th>Total $</th>
                      </tr>
                    </thead>
                    <tbody id="activity-data">
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=5>
                          <ul class="pagination pagination-xs no-margin">
                            <li class="prev disabled">
                              <a href="javascript:void(0);">Previous</a>
                            </li>
                            <li class="active">
                              <a href="javascript:void(0);">1</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);">2</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);">3</a>
                            </li>
                            <li class="next">
                              <a href="javascript:void(0);">Next</a>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type='submit' class='btn btn-primary btn-sm' id="export">Export</button>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
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
