<header>
  <?php render_partial('edit_button', array('title' => 'class-details')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Details </h2>
</header>

<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" id="class-details-form" class="smart-form">
          <fieldset id="class-details">
            <div class="row top-10">
              <div class="col-xs-12 top-10">
                <div class="responsive-box-xl" style="padding-left: 5px;">
                  <label class="input" style="display: inline-block;">Subject:</label>

                  <label class="input txt-color-red" style="display: inline-block; width: 200px;">
                    <input type="text" id="program-subject" name="program-subject" placeholder="Adults Swimming 2" >
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-lg details" style="padding-right: 5px;">
                  <div class="col-xs-12 id-number">
                    <div class="col-xs-5 ">
                      <label class="input">Program:</label>
                    </div>

                    <div class="col-xs-5">
                      <label>
                        <select>
                          <option value="0">Swimming Program</option>
                          <option value="1">Aquatic Centre</option>
                          <option value="2">Baking</option>
                          <option value="3">Dance</option>
                        </select> <i></i>
                      </label>
                    </div>
                  </div>

                  <div class="col-xs-12 id-number top-10">
                    <div class="col-xs-5 ">
                      <label class="input">Class ID:</label>
                    </div>

                    <div class="col-xs-6 ">
                      <label class="input">
                        <input type="text" id="class-id" name="class-id" placeholder="27865456" disabled="disabled">
                      </label>
                    </div>
                  </div>
                  <div class="col-xs-12 id-number top-10">
                    <div class="col-xs-5 ">
                      <label class="input">Pre-requisites:</label>
                    </div>

                    <div class="col-xs-5 ">
                      <label>
                        <select>
                          <option value="0">Swimming Basic Program</option>
                          <option value="1">Aquatic Centre</option>
                          <option value="2">Baking</option>
                          <option value="3">Dance</option>
                        </select> <i></i>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="responsive-box-xl lean-right" style="max-width: 400px;">
                  <div class="row">
                    <div class="col col-xs-11" >
                      <label class="textarea">
                        <textarea rows="10" col="40" name="class-desc" placeholder="Class/Event Description" ></textarea>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12">
                  <div class="responsive-box-lg">
                    <?php render_partial('rating', array('rating' => isset($locals['rating']) ? $locals['rating'] : '3.0')); ?>
                    <a href="#" data-expands="#class-enter-comments"> Enter Comments </a>
                    <?php $this->partial('enter_comments'); ?>
                  </div>

                  <div class="responsive-box-xl lean-right" style="max-width: 400px;">
                    <p>
                      Typical Schedule:

                      <a href="#" data-expands="#class-session-hours">
                        Tues, Thurs: 9am - 10am - May 12, 2015 to Aug 12, 2015
                      </a>
                    </p>

                    <p>Usually held by: <a href="#ajax/profile.php">John Doe, Mike Willis</a></p>
                  </div>
                </div>
              </div>
            </div>

            <?php $this->partial('session_hours'); ?>

            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'class-details')); ?>
            <!-- End Hidden Update Button Row -->
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
