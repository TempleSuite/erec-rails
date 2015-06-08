$(document).ready(function() {
  $('a.session-hours').click(function(e) {
    e.preventDefault();
    $(".row.session-hours").show('slow');
    $(".confirmation-message").hide();
  });

  $('a.enter-comments').click(function(e) {
    e.preventDefault();
    $(".row.enter-comments").show('slow');
    $(".confirmation-message").hide();
  });

  $('.btn.add-comment').click(function(e) {
    e.preventDefault();
    // toggle visibility of hidden button
    $(".confirmation-message").show("slow");

    setTimeout(function() {
      $(".row.add-comment").hide("slow");
      $('#comment-textarea').val('');
      $(".confirmation-message").hide("slow");
    }, 3000);
  });
});
