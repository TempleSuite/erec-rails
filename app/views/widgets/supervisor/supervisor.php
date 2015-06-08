<header>
  <?php render_partial('edit_button', array('title' => 'class-supervisor')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Supervisor </h2>
</header>

<!-- widget div-->
<div role="content">
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" id="profile-collectives-form" class="smart-form" novalidate="novalidate">
          <fieldset>
            <div class="row">
              <div class="col-xs-12 list editable-list" id="list-wid-id-class-supervisor">
                <div class="responsive-box-md can-be-closed">
                  <div class="row"><div class="col-xs-12"><img src="/img/avatars/3.png" class="icon-sm icon-assoc" alt="Mark Taylor"></div></div>
                  <div class="row"><div class="col-xs-12"><label>Mark Taylor</label></div></div>
                </div>
              </div>
            </div>
            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'class-supervisor')); ?>
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
