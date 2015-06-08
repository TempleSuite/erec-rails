
/*
  * Expandable area generic library.
  *
  * @example Add a link to a form element:
  *
  *     <a href="#" data-expands="#valid-jquery-selector">click me</a>
  *
  * @example Add the expandable area:
  *
  *     <div class="row" id="valid-jquery-selector" style="display: none;">
  *       ...
  *     </div>
  *
 */
$(document).ready(function() {
  $(document).on('click', '[data-expands]', function(e) {
    var expandingPanel;
    e.preventDefault();
    expandingPanel = $($(this).data('expands'));
    expandingPanel.toggle('slow');
    return expandingPanel.find('.confirmation-message').hide();
  });
  return $(document).on('click', '[data-unexpands]', function(e) {
    var expandingPanel;
    e.preventDefault();
    expandingPanel = $($(this).data('unexpands'));
    expandingPanel.find('.confirmation-message').show('slow');
    return setTimeout(function() {
      expandingPanel.hide('slow');
      expandingPanel.find('input').val('');
      return expandingPanel.find('.confirmation-message').hide('slow');
    }, 3000);
  });
});

//# sourceMappingURL=coffee_compiled.js.map
