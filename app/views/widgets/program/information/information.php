<header>
  <?php render_partial('edit_button', array('title' => 'program-information')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Information </h2>
</header>

<!-- widget div-->
<div role="content">
  <div class="widget-body widget-hide-overflow no-padding">
    <!-- content goes here -->
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" class="smart-form">
          <fieldset>
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-lg">
                  <label>Program Name</label>
                  <label class="input">
                    <input type="text" name="program-name" placeholder="Program Name">
                  </label>
                </div>
                <div class="responsive-box-md">
                  <label>Typical duration </label>
                  <label class="input">
                    <input type="text" name="duration" placeholder="12 Sessions">
                  </label>
                 </div>
                <div class="responsive-box-md">
                  <label>Program Category</label>
                  <label >
                    <select id="search-sort" >
                      <option value="Swimming Instruction">Swimming Instruction</option>
                      <option value="Aquatic Centre">Aquatic Centre</option>
                      <option value="Baking">Baking</option>
                      <option value="Dance">Dance</option>
                    </select>
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group">
                  <p>Program Seasons</p>
                  <input class="form-control tagsinput" value="Spring,Summer, Fall, Winter" data-role="tags-late-load" style="display: none;">
                </div>
              </div>
            </div>
            <!-- Hidden Update Button Row -->
            <?php render_partial('edit_row', array('title' => 'program-information')); ?>
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
