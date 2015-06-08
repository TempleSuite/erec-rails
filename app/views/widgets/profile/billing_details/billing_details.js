$(document).ready(function() {
  $('#billing-history').click(function(e) {
    e.preventDefault();
    // toggle visibility of child element
    $('.billing-history').show("slow");
  });
});
