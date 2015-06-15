$(document).ready(function() {
  $('.form-edit-button').click(function(event) {
    event.preventDefault();
    // toggle visibility of hidden button
    $('[data-row=' + $(this).data("form") + ']').toggleClass('hidden');
  });

  /* Update Widget Button - hides itself on click */
  $('.update-button').on('click', function(event) {
    event.preventDefault();
    hideButton($(this));
  });

  /* Hide the clicked Update Widget Button */
  hideButton = function(buttonElement) {
    $('[data-row=' + buttonElement.data("update") + ']').toggleClass('hidden');
  }
});
