<header>
  <?php render_partial('edit_button', array('title' => 'access-codes')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Access Codes </h2>
</header>

<!-- widget div-->
<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" id="profile-access-codes" class="smart-form" novalidate="novalidate">
          <fieldset>
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group">
                  <input class="form-control tagsinput" value="SGAH122,S67655A" data-role="tags-late-load" style="display: none;">
                </div>
              </div>
            </div>
            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'access-codes', 'button-text' => 'Add Code')); ?>
            <!-- End Hidden Update Button Row -->
          </fieldset>
        </form>
      </div>
      <!-- end of panel-body -->
    </div>
    <!-- end content -->
  </div>
</div>
