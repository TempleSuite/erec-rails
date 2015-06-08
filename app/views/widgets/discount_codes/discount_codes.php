<header>
  <?php render_partial('edit_button', array('title' => 'discount-codes')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Promo &amp; Discount Codes </h2>
</header>

<!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" id="profile-discount-codes" class="smart-form" novalidate="novalidate">
          <fieldset>
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group">
                  <input class="form-control tagsinput" value="CANTIRE50,WINTER10OFF" data-role="tags-late-load" style="display: none;">
                </div>
              </div>
            </div>
            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'discount-codes', 'button-text' => 'Add Code')); ?>
            <!-- End Hidden Update Button Row -->
          </fieldset>
        </form>
        <!-- end of panel-body -->
      </div>
      <!-- end of panel-body -->
    </div>
    <!-- end content -->
  </div>
</div>
<!-- end widget div -->
