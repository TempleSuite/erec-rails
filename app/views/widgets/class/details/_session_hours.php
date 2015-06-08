<div class="row session-hours hidden-field-area" id="class-session-hours" style="display: none; max-width: 700px; width: 700px;">
  <div class="col-sm-11 col-xs-12 " style="margin-left:20px;">
    <?php render_partial('list_form', array(
      'title'   => 'Sessions Schedule',
      'id'      => 'session-list',
      'form-id' => 'form-session-list',
      'type'    => 'session-list',
      'names'   => array('Adults Swimming 2')
    )); ?>
  </div>

  <div class="col-sm-11 col-xs-12">
    <button type='submit' class='btn btn-primary btn-sm add-comment' data-unexpands="#class-session-hours">Update</button>
  </div>
</div>
