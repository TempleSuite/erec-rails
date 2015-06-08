<header>
  <?php render_partial('edit_button', array('title' => 'profile-header')); ?>
  <span class="widget-icon"> <i class="fa fa-list-alt txt-color-white"></i> </span>
  <h2> Profile </h2>
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
                <div class="responsive-box-lg details" style="padding-right: 5px;">
                  <img src="/img/superbox/John Doe.jpg" alt="profile icon" class="icon-lg" id="photo">
                  <img src='img/edit.png' class='edit-image hidden-xs' data-expands="#profile-edit-image">
                  <label class="label"><strong>John Doe</strong></label>
                  <label class="label"><strong>Membership ID:</strong> 278865456</label>
                  <label class="label"><strong>Verified Member</strong></label>

                  <label class="label">
                    <a href="#" data-expands="#profile-change-password">Change Password</a>
                  </label>

                  <?php $this->partial('edit_image'); ?>

                  <?php $this->partial('change_password'); ?>

                  <br />

                  <?php render_partial(
                    'rating',
                    array('rating' => isset($locals['rating']) ? $locals['rating'] : '3.0')
                  ); ?>

                  <a href="#" data-expands="#profile-enter-comments">Enter Comments</a>

                  <?php $this->partial('enter_comments'); ?>
                </div>
                <div class="responsive-box-xl lean-right" style="max-width: 400px;">
                  <label class="textarea">
                    <i class="icon-prepend fa fa-comment"></i>

                    <textarea rows="10"
                              cols="40"
                              name="class-desc"
                              placeholder="I am a personal trainer at the Gary Todds Recreation Centre. &#10; &#10;I believe in nutrition planning and maintaining a balanced work out."
                    ></textarea>
                  </label>
                </div>
              </div>
            </div>

            <?php render_partial('edit_row', array('title' => 'profile-header')); ?>
          </fieldset>
        </form>
      </div>
      <!-- end of panel-body -->
    </div>
    <!-- end content -->
  </div>
</div>
<!-- end widget div -->
