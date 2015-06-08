$(document).ready(function() {
  $('#class-list').on('change', function() {
    $('#class-details').show("slow");

    switch ($(this).val()) {
      case "09223":
        $('#class-data').html('\
          <tr>\
            <td>Tommy Wilkins</td>\
            <td class="text-align-center">M</td>\
            <td class="text-align-center">6</td>\
            <td class="text-align-center">604-123-4567</td>\
            <td class="text-align-center">Matt Wilkins</td>\
            <td class="text-align-center">Rugrat</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          <tr>\
            <td>John Deere</td>\
            <td class="text-align-center">M</td>\
            <td class="text-align-center">8</td>\
            <td class="text-align-center">604-399-1577</td>\
            <td class="text-align-center">Alexis Deere</td>\
            <td class="text-align-center">-</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          <tr>\
            <td>Susan Shier</td>\
            <td class="text-align-center">F</td>\
            <td class="text-align-center">5</td>\
            <td class="text-align-center">778-708-8400</td>\
            <td class="text-align-center">Bruce Shier</td>\
            <td class="text-align-center">Waffle</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          <tr>\
            <td>Tammy Bellsy</td>\
            <td class="text-align-center">F</td>\
            <td class="text-align-center">9</td>\
            <td class="text-align-center">778-633-1870</td>\
            <td class="text-align-center">Roger Bellsy</td>\
            <td class="text-align-center">Potato</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          ');
        break;
      case "09048":
        $('#class-data').html('\
          <tr>\
            <td>Tommy Wilkins</td>\
            <td class="text-align-center">M</td>\
            <td class="text-align-center">6</td>\
            <td class="text-align-center">604-123-4567</td>\
            <td class="text-align-center">Matt Wilkins</td>\
            <td class="text-align-center">Rugrat</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          <tr>\
            <td>John Deere</td>\
            <td class="text-align-center">M</td>\
            <td class="text-align-center">8</td>\
            <td class="text-align-center">604-399-1577</td>\
            <td class="text-align-center">Alexis Deere</td>\
            <td class="text-align-center">-</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          <tr>\
            <td>Susan Shier</td>\
            <td class="text-align-center">F</td>\
            <td class="text-align-center">5</td>\
            <td class="text-align-center">778-708-8400</td>\
            <td class="text-align-center">Bruce Shier</td>\
            <td class="text-align-center">Waffle</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          <tr>\
            <td>Tammy Bellsy</td>\
            <td class="text-align-center">F</td>\
            <td class="text-align-center">9</td>\
            <td class="text-align-center">778-633-1870</td>\
            <td class="text-align-center">Roger Bellsy</td>\
            <td class="text-align-center">Potato</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          ');
        break;
      case "09118":
        $('#class-data').html('\
          <tr>\
            <td>Tommy Wilkins</td>\
            <td class="text-align-center">M</td>\
            <td class="text-align-center">6</td>\
            <td class="text-align-center">604-123-4567</td>\
            <td class="text-align-center">Matt Wilkins</td>\
            <td class="text-align-center">Rugrat</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          <tr>\
            <td>John Deere</td>\
            <td class="text-align-center">M</td>\
            <td class="text-align-center">8</td>\
            <td class="text-align-center">604-399-1577</td>\
            <td class="text-align-center">Alexis Deere</td>\
            <td class="text-align-center">-</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          <tr>\
            <td>Susan Shier</td>\
            <td class="text-align-center">F</td>\
            <td class="text-align-center">5</td>\
            <td class="text-align-center">778-708-8400</td>\
            <td class="text-align-center">Bruce Shier</td>\
            <td class="text-align-center">Waffle</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          <tr>\
            <td>Tammy Bellsy</td>\
            <td class="text-align-center">F</td>\
            <td class="text-align-center">9</td>\
            <td class="text-align-center">778-633-1870</td>\
            <td class="text-align-center">Roger Bellsy</td>\
            <td class="text-align-center">Potato</td>\
            <td class="text-align-center">\
              <label class="checkbox" style="margin-left: 25px;">\
                <input type="checkbox" name="checkbox-active">\
                <i></i>\
              </label>\
            </td>\
          </tr>\
          ');
        break;
      default:
        break;
    }
  });
});

/*
* ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
* eg alert("my home function");
*
* var pagefunction = function() {
*   ...
* }
* loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
*
*/

// PAGE RELATED SCRIPTS

// pagefunction

// end pagefunction

// run pagefunction on load
