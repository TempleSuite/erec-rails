$(document).ready(function() {
  $('.form-edit-button').click(function(e) {
    e.preventDefault();
    // toggle visibility of hidden button
    $('[data-row=' + $(this).data("form") + ']').toggleClass('hidden');
  });

  /* Update Widget Button - hides itself on click */
  $('.update-button').on('click', function(e) {
    e.preventDefault();
    hideButton($(this));
  });

  /* Hide the clicked Update Widget Button */
  hideButton = function(e) {
    $('[data-row=' + e.data("update") + ']').toggleClass('hidden');
  }
});
