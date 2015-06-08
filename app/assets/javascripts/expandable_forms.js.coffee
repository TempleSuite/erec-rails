###
 # Expandable area generic library.
 #
 # @example Add a link to a form element:
 #
 #     <a href="#" data-expands="#valid-jquery-selector">click me</a>
 #
 # @example Add the expandable area:
 #
 #     <div class="row" id="valid-jquery-selector" style="display: none;">
 #       ...
 #     </div>
 #
###
$(document).ready ->
  $(document).on 'click', '[data-expands]', (e) ->
    e.preventDefault()

    # Grab the element to effect from `data-expands` on the link
    expandingPanel = $($(this).data('expands'))
    expandingPanel.toggle 'slow'
    expandingPanel.find('.confirmation-message').hide()

  # TODO: Allow custom messages, success/fail state...
  $(document).on 'click', '[data-unexpands]', (e) ->
    e.preventDefault()

    expandingPanel = $($(this).data('unexpands'))
    expandingPanel.find('.confirmation-message').show('slow')

    setTimeout ->
      expandingPanel.hide 'slow'
      expandingPanel.find('input').val ''
      expandingPanel.find('.confirmation-message').hide 'slow'
    , 3000
