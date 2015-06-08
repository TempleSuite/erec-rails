<header>
  <span class="widget-icon"> <i class="fa fa-bar-chart-o"></i> </span>
  <h2> Customize Reporting </h2>
</header>

<!-- widget div-->
<div>
  <!-- widget edit box -->
  <div class="jarviswidget-editbox">
    <!-- This area used as dropdown edit box -->
  </div>
  <!-- end widget edit box -->

  <!-- widget content -->
  <div class="widget-body no-padding">
    <div class="panel-body well">
      <div class="row">
        <div class="col-xs-12 ">
          <form action="" id="customize-report-form" class="smart-form" novalidate="novalidate">
            <fieldset id="customize-report">
                
              <div class="row">
                <div class="col-xs-4">
                  <label class="label">Title</label>  
                </div>
                <div class="col-xs-8">
                  <label class="input">
                    <input type="text" name="report-title" id="" placeholder="Enter the report title here">
                  </label>
                </div>
              </div>
              
              <div class="row">
                <div class="col-xs-4">
                  <label>
                    <select name="dates" id="dates">
                      <option value="0" selected="">Select Date Range</option>
                      <option value="1">Date Range</option>
                      <option value="2">Last</option>
                      <option value="3">This</option>            
                    </select> <i></i>
                  </label>
                </div>
                
                <div id="date-range" style="display:none;">
                  <div class="col-xs-3">
                    <label class="input"> <i class="icon-append fa fa-calendar"></i>
                      <input type="text" name="startdate" id="startdate" placeholder="Start date">
                    </label>
                  </div>
                  <div class="col-xs-3" style="margin-left: 10px;">                      
                    <label class="input"> <i class="icon-append fa fa-calendar"></i>
                      <input type="text" name="finishdate" id="finishdate" placeholder="Finish date">
                    </label>
                  </div>
                </div>
                  
                <div id="last-days" style="display:none;">
                  <div class="col-xs-1">
                    <label>
                      <select name="last-period">
                        <option value="0" selected="">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                        <option value="6">7</option>
                        <option value="7">8</option>
                        <option value="8">9</option>
                        <option value="9">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                        <option value="12">13</option>
                        <option value="13">14</option>
                        <option value="14">15</option>
                        <option value="15">16</option>
                        <option value="16">17</option>
                        <option value="17">18</option>
                        <option value="18">19</option>
                        <option value="19">20</option>
                        <option value="20">21</option>
                        <option value="21">22</option>
                        <option value="22">23</option>
                        <option value="23">24</option>
                        <option value="24">25</option>
                        <option value="25">26</option>
                        <option value="26">27</option>
                        <option value="27">28</option>
                        <option value="28">29</option>
                        <option value="29">30</option>
                        <option value="30">31</option>                  
                      </select> <i></i>
                    </label>
                  </div>
                  <div class="col-xs-2">
                    <label>Days</label>
                  </div>
                </div>
                  
                <div id="this-range" style="display:none;">
                  <div class="col-xs-6">
                    <label class="select">
                      <select name="this-period">
                        <option value="0" selected="">Day</option>
                        <option value="1">Week</option>
                        <option value="2">Month</option>
                        <option value="3">Year</option>             
                      </select> <i></i>
                    </label>
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-xs-4 top-10">
                  <label class="checkbox">
                    <input type="checkbox" name="date-range">
                    <i></i>Type 
                  </label>
                </div>
                <div class=" col-xs-6 top-10">
                  <label class="select">
                    <select name="type">
                      <option value="0" selected="" disabled="">Select the type</option>
                      <option value="1">Attendance</option>
                      <option value="2">Coupons</option>
                      <option value="3">Purchase</option>
                      <option value="4">Refund</option>                
                    </select> <i></i>
                  </label>
                </div>
              </div>
          
              <div class="row">
                <div class="col-xs-4">
                  <label class="checkbox">
                    <input type="checkbox" name="date-range">
                    <i></i>Ratting 
                  </label>
                </div>
                <div class="col-xs-6">
                  <label class="select">
                    <select name="rating">
                      <option value="0" selected="" disabled="">Select the rate</option>
                      <option value="1">0.0</option>
                      <option value="2">0.5</option>
                      <option value="3">1.0</option>
                      <option value="4">1.5</option>
                      <option value="5">2.0</option>
                      <option value="6">2.5</option>
                      <option value="7">3.0</option>
                      <option value="8">3.5</option>
                      <option value="9">4.0</option>
                      <option value="10">4.5</option>
                      <option value="3">5.0</option>                  
                    </select> <i></i>
                  </label>
                </div>
              </div>
            
              <div class="row">
                <div class="col-xs-4">
                  <label class="checkbox">
                    <input type="checkbox" name="date-range">
                    <i></i>Report Format 
                  </label>
                </div>
                <div class="col-xs-6">
                  <label class="select">
                    <select name="report-format">
                      <option value="0" selected="">Donut Graph</option>
                      <option value="2">Horizontal Bar Chart</option>
                      <option value="3">Vertical Bar Chart</option>
                      <option value="4">Pie Chart</option>           
                    </select> <i></i>
                  </label>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12 top-10">
                  <footer>
                    <button type="submit" class="btn btn-primary">
                      Generate Report
                    </button>
                  </footer>
                </div>
              </div>
            
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end widget content -->
</div>
 