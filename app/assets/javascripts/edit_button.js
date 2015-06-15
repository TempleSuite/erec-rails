$(document).ready(function() {
  $('.form-edit-button').click(function(editButton) {
    editButton.preventDefault();
    // toggle visibility of hidden button
    $('[data-row=' + $(this).data("form") + ']').toggleClass('hidden');
  });

  /* Update Widget Button - hides itself on click */
  $('.update-button').on('click', function(updateButton) {
    updateButton.preventDefault();
    hideButton($(this));
  });

  /* Hide the clicked Update Widget Button */
  hideButton = function(updateButton) {
    $('[data-row=' + updateButton.data("update") + ']').toggleClass('hidden');
  }
});
