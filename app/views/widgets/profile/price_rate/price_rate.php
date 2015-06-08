<div class="jarviswidget jarviswidget-color-blueDark"
  id="wid-id-price-rate-details"
  data-widget-editbutton="false"
  data-widget-fullscreenbutton="false"
  data-widget-colorbutton="false">

  <header>
    <?php render_partial('edit_button', array('title' => 'price_rate')); ?>
    <span class="widget-icon"> <i class="fa fa-search txt-color-white"></i> </span>
    <h2> Price / Rate Profile </h2>
  </header>

  <!-- widget Price / Rate Profile -->
  <div>
    <div class="widget-body widget-hide-overflow no-padding">
      <!-- content goes here -->
      <div class="widget-body no-padding">
        <div class="panel-body well">
          <form action="" id="price-rate-form" class="smart-form" novalidate="novalidate">
            <fieldset>
              <div class="row ">
                <div class="col-xs-12 top-10">
                  <div class="responsive-box-md id-number">
                    <label class="label"><strong>Name</strong></label>
                    <label class="input">
                      <input type="text"  placeholder="Price Name">
                    </label> 
                    <label class="label top-10"><strong>Price / Rate</strong></label>
                    <label class="input">
                      <i class="icon-prepend fa fa-dollar"></i>
                      <input type="text" placeholder="78.00">
                    </label>
                  </div>
                      
                  <div class="responsive-box-xl pull-right " >                  
                    <label class="textarea">
                      <textarea rows="10" cols="40" id="price-rate" name="class-desc" placeholder="Price, Description, Notes " ></textarea>
                    </label>
                  </div>
                </div>
              </div>
              <!-- Hidden Update Button Row -->
              <?php render_partial('edit_row', array('title' => 'price_rate')); ?>
              <!-- End Hidden Update Button Row -->
            </fieldset>
          </form>
        </div>
      </div>
      <!-- end content goes here -->
    </div>
  </div>
  <!-- end of widget Price / Rate Profile -->
</div>
