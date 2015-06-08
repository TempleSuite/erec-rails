<header>
  <?php render_partial('edit_button', array('title' => 'personal-information')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Personal Information </h2>
</header>

<!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <!-- widget personal information accordion -->
        <form action="" id="personal-information-form" class="smart-form" novalidate="novalidate">
          <!-- personal information fields -->
          <fieldset id="personal-information-fields">
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>First Name</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-user"></i>
                    <input class="letters-only" type="text" name="firstname" id="firstname" value="" placeholder="John" >
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label>Middle Name</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-user"></i>
                    <input class="" type="text" name="middlename" value="" placeholder="D">
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label>Last Name</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-user"></i>
                    <input class="letters-only" type="text" name="lastname" value="" placeholder="Smith">
                  </label>
                </div>
                <div class="responsive-box-sm">
                  <label>Gender</label>
                  <label>
                    <select name="profile-gender" id="profile-gender">
                      <option value="Other" selected="">Other</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select> <i></i>
                  </label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>Street Address</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-location-arrow"></i>
                    <input class="" type="text" name="address" value="" placeholder="Address">
                  </label>
                </div>
                <div class="responsive-box-sm">
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
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>Country</label>
                  <label class="input">
                    <input type="text" name="country" placeholder="Country">
                  </label>
                </div>

                <div class="responsive-box-md">
                  <label>Postal Code</label>
                  <label class="input">
                    <input type="text" name="code" placeholder="90210">
                  </label>
                </div>

                <div class="responsive-box-lg" style="width:275px;">
                  <label>E-mail</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-envelope"></i>
                    <input class="" type="email" name="email" value="" placeholder="Email">
                  </label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-md">
                  <label>Mobile Phone</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-mobile"></i>
                    <input class="" type="text" name="profile-phone-1" value="" placeholder="604-123-4567" data-mask="999-999-9999" data-mask-placeholder= "x">
                  </label>
                </div>

                <div class="responsive-box-md">
                  <label>Other Phone</label>
                  <label class="input">
                    <i class="icon-prepend fa fa-phone"></i>
                    <input class="" type="text" name="profile-phone-2" value="" placeholder="778-708-8400" data-mask="999-999-9999" data-mask-placeholder= "x">
                  </label>
                </div>

                <div class="responsive-box-lg">
                  <label>Date of Birth</label>

                  <div class="responsive-box-xl">
                    <label>
                      <select name="profile-birth-month" id="profile-birth-month" class="month" style="width:auto;">
                        <option value="" selected>Month</option>
                        <option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>
                        <option value="05">May</option>
                        <option value="06">Jun</option>
                        <option value="07">Jul</option>
                        <option value="08">Aug</option>
                        <option value="09">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                      </select>  <i></i>
                    </label>

                    <label>
                      <select name="profile-birth-day" id="profile-birth-day" class="day" style="width: auto;">
                        <option value="" selected>Day</option>
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
                        <option value="31">31</option>
                      </select>  <i></i>
                    </label>

                    <label>
                      <select name="profile-birth-year" id="profile-birth-year" class="year" style="width: auto;">
                        <option value="" selected>Year</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                      </select> <i></i>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <label class="label">Interests, Skills &amp; Needs</label>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-10 col-xs-12">
                <div class="form-group">
                  <input class="form-control tagsinput" value="Amsterdam,Washington,Soccer,Cairo,Public speaking,Cooking,Weight training" data-role="tags-late-load" style="display: none;">
                </div>
                <div class="note">
                  <strong>Suggestions:</strong> <em>Hockey, French, Coaching, Wheelchair Access</em>
                </div>
              </div>
            </div>

            <br/>

            <div class="row">
              <div class="col-xs-12">
                <label class="label">Roles</label>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-sm">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox" checked="checked">
                    <i></i>User
                  </label>
                </div>
                <div class="responsive-box-sm">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox">
                    <i></i>Volunteer
                  </label>
                </div>
                <div class="responsive-box-sm">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox">
                    <i></i>Instructor
                  </label>
                </div>
                <div class="responsive-box-sm">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox" checked="checked">
                    <i></i>Staff (Ex)
                  </label>
                </div>
                <div class="responsive-box-sm">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox" checked="checked">
                    <i></i>Staff (Op)
                  </label>
                </div>
                <div class="responsive-box-sm">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox" checked="checked">
                    <i></i>Staff (Cl)
                  </label>
                </div>
                <div class="responsive-box-sm">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox">
                    <i></i>Programmer
                  </label>
                </div>
                <div class="responsive-box-sm">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox">
                    <i></i>Admin
                  </label>
                </div>
                <div class="responsive-box-xs">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox">
                    <i></i>SU
                  </label>
                </div>
              </div>
            </div>
            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'personal-information')); ?>
            <!-- End Hidden Update Button Row -->
          </fieldset>
          <!-- end personal information fields -->
        </form>
      </div>
    </div>
  </div>
</div>
