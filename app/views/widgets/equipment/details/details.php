<header>
  <?php render_partial('edit_button', array('title' => 'equipment-details')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Details </h2>
</header>

<div>
  <div class="widget-body widget-hide-overflow no-padding">
    <div class="widget-body no-padding">
      <div class="panel-body well">
        <form action="" id="equipment-details-form" class="smart-form" novalidate="novalidate">
          <fieldset id="equipment-details">
            <div class="row">
              <div class="col-xs-12">
                <div class="responsive-box-lg top-10" style="padding-right: 5px;">
                  <img src="/img/superbox/basketball.jpg" alt="my photo" class="icon-lg" >
                  <img src="img/edit.png" class="edit-image hidden-xs" data-expands="#equipment-edit-image">
                  <p><strong>Item:</strong> Basketball</p>

                  <div class="id-number">
                    <label class="label"><strong>Equipment ID:</strong></label>
                    <label class="label txt-color-red"> 265456</label>
                  </div>
                </div>

                <div class="responsive-box-xl pull-right" style="max-width: 400px;">
                  <label class="textarea">
                    <textarea rows="10" cols="37" name="class-desc" placeholder="Item Description"></textarea>
                  </label>
                </div>

                <?php $this->partial('edit_image'); ?>
              </div>
            </div>

            <?php render_partial('edit_row', array('title' => 'equipment-details')); ?>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
