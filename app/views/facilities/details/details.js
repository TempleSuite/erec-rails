$(document).ready(function() {
  /* file upload for editing picture */
  $('#browse-image').change(function() {
    var imagefilename = $(this).val();
    var lastIndex = imagefilename.lastIndexOf("\\");
    if (lastIndex >= 0) {
      imagefilename = imagefilename.substring(lastIndex + 1);
    }
    $('#image-filename').val(imagefilename);
  });

  $('#upload-image').on('click', function(e) {
    e.preventDefault();
    $("#photo").attr('src','/img/superbox/'+ $('#image-filename').val());
  });

});

