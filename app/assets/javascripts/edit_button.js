$(document).ready(function() {
  $('.form-edit-button').click(function(e) {
    e.preventDefault();
    var elem = $(this);
    // toggle visibility of hidden button
    $('[data-row=' + elem.data("form") + ']').toggleClass('hidden');
  });

  /* Update Widget Button - hides itself on click */
  $('.update-button').on('click', function(e) {
    e.preventDefault();
    var elem = $(this);
    hideButton(elem);
  });

  /* Hide the clicked Update Widget Button */
  hideButton = function(e) {
    $('[data-row=' + e.data("update") + ']').toggleClass('hidden');
  }
});
