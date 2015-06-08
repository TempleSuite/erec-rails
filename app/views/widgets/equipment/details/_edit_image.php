<div class="row edit-image hidden-field-area" id="equipment-edit-image" style="display: none;">
  <div class="col-xs-11">
    <div class="row">
      <div class="responsive-box-xl" style="margin-left:0px;width: 300px;">
        <form action="" class="smart-form">
          <fieldset>
            <section>
              <label for="file" class="input input-file">
                <div class="button"><input type="file" name="file" onchange="console.log(this.value); $('#file-name-field').val(this.value);">Browse</div>
                <input type="text" id="file-name-field" placeholder="Include some files" readonly="">
              </label>
            </section>
          </fieldset>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-4 pull-right">
        <button type='submit' class='btn btn-primary btn-sm upload-button' data-unexpands="#equipment-edit-image">Upload</button>
      </div>
    </div>
  </div>
</div>
