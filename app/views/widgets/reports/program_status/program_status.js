$(document).ready(function() {
  $('#activity-list').on('change', function() {
    $('#activity-details').show("slow");
    switch ($(this).val()) {
      case "09223":
        $('#activity-data').html('\
          <tr>\
            <td>Pro D Daycamp</td>\
            <td>May 09</td>\
            <td>6</td>\
            <td>18</td>\
            <td>11</td>\
            <td>0</td>\
            <td>$805.00</td>\
          </tr>');
        break;
      case "09048":
        $('#activity-data').html('\
          <tr>\
            <td>Babysitter Training</td>\
            <td>May 13</td>\
            <td>4</td>\
            <td>12</td>\
            <td>12</td>\
            <td>5</td>\
            <td>$501.40</td>\
          </tr>');
        break;
      case "09118":
        $('#activity-data').html('\
          <tr>\
            <td>Dodgeball</td>\
            <td>May 19</td>\
            <td>6</td>\
            <td>30</td>\
            <td>27</td>\
            <td>0</td>\
            <td>$540.00</td>\
          </tr>');
        break;
      default:
        break;
    }

  });
});
