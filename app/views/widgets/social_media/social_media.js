$(document).ready(function() {

  $('.btn-sm.manage-social').on('click', function(e) {
    e.preventDefault();
    var elem = $(this);
    // wipe the icon row
    $('.responsive-box-xl.social-icons').html('');
    // for each inline group
    $('.social-media-list').children('.inline-group').each(function(e) {
      // if the checkbox is checked
      if ($('input', this).is(':checked')) {
        // add the user's URL to the img
        $('a', this).attr('href', $('label.input input', this).val());
        // add the img & url to the above group
        $('.responsive-box-xl.social-icons').append('<div class="responsive-box-xs">' + $('span', this).html() + '</div>');
      }
    });
    // Close expanded area after updating social media
    $('[data-row=' + elem.data("update") + ']').toggleClass('hidden');
  });

});
