$(document).ready(function() {
  $('#gl-update').on('click', function(e) {
    e.preventDefault();
    var data = {
      "action": "update",
      "startDate": $('#start-date').val(),
      "endDate": $('#end-date').val()
//      "endDate": $(this).data("role")
    };
    data = $.param(data);
    console.log(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "ajax/gl-inquiry.php", //Relative or absolute path to response.php file
      data: data,
      success: function(data) {
//        $("#gl-data").html(data["html"]);
        console.log("Form submitted successfully.\nReturned json: " + data["html"]);
      }
    });
    return false;
  });
});
