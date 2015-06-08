<header>
  <span class="widget-icon"> <i class="fa fa-calendar"></i> </span>
  <h2> My Calendar </h2>
  <div class="widget-toolbar">
    <!-- add: non-hidden - to disable auto hide -->
    <div class="btn-group">
      <button class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown">
        Showing <i class="fa fa-caret-down"></i>
      </button>
      <ul class="dropdown-menu js-status-update pull-right">
        <li>
          <a href="#" id="mt">Month</a>
        </li>
        <li>
          <a href="#" id="ag">Agenda</a>
        </li>
        <li>
          <a href="#" id="td">Today</a>
        </li>
      </ul>
    </div>
  </div>
</header>

<!-- widget div-->
<div>
  <!-- widget edit box -->
  <div class="jarviswidget-editbox">
      <input class="form-control" type="text">
  </div>
  <!-- end widget edit box -->

  <div class="widget-body no-padding">
    <!-- content goes here -->
    <div class="widget-body-toolbar">
      <div id="calendar-buttons">
        <div class="btn-group">
          <a href="#" class="btn btn-default btn-xs" id="btn-prev"><i class="fa fa-chevron-left"></i></a>
          <a href="#" class="btn btn-default btn-xs" id="btn-next"><i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <div id="calendar"></div>
    <!-- end content -->
  </div>
</div>

<script>
$(document).ready( function() {
  /*
   * FULL CALENDAR JS
   */

  // Load Calendar dependency then setup calendar
  loadScript("js/plugin/fullcalendar/jquery.fullcalendar.min.js", setupCalendar);

  function setupCalendar() {

    if ($("#calendar").length) {
      var date = new Date();
      var d = date.getDate();
      var m = date.getMonth();
      var y = date.getFullYear();

      var calendar = $('#calendar').fullCalendar({
        editable: false,
        draggable: false,
        selectable: false,
        selectHelper: true,
        unselectAuto: false,
        disableResizing: false,

        header: {
          left: 'title', //,today
          center: 'prev, next, today',
          right: 'month, agendaWeek, agenDay' //month, agendaDay,
        },

        select: function (start, end, allDay) {
          var title = prompt('Event Title:');
          if (title) {
            calendar.fullCalendar('renderEvent', {
                title: title,
                start: start,
                end: end,
                allDay: allDay
              }, true // make the event "stick"
            );
          }
          calendar.fullCalendar('unselect');
        },
<?php

if (isset($_SESSION['yoga-class']) && ($_SESSION['yoga-class'] == "confirmed")) {
  include_once("yogaConfirmed.php");
} else {
  include_once("yogaUnconfirmed.php");
}

?>
,
        eventRender: function (event, element, icon) {
          if (!event.description == "") {
            element.find('.fc-event-title').append("<br/><span class='ultra-light'>" + event.description +
              "</span>");
          }
          if (!event.icon == "") {
            element.find('.fc-event-title').append("<i class='air air-top-right fa " + event.icon +
              " '></i>");
          }
        }
      });

    };

    /* hide default buttons */
    $('.fc-header-right, .fc-header-center').hide();

  }

  // calendar prev
  $('#calendar-buttons #btn-prev').click(function (e) {
    $('.fc-button-prev').click();
    e.preventDefault();
  });

  // calendar next
  $('#calendar-buttons #btn-next').click(function (e) {
    $('.fc-button-next').click();
    e.preventDefault();
  });

  // calendar today
  $('#calendar-buttons #btn-today').click(function (e) {
    $('.fc-button-today').click();
    e.preventDefault();
  });

  // calendar month
  $('#mt').click(function () {
    $('#calendar').fullCalendar('changeView', 'month');
  });

  // calendar agenda week
  $('#ag').click(function () {
    $('#calendar').fullCalendar('changeView', 'agendaWeek');
  });

  // calendar agenda day
  $('#td').click(function () {
    $('#calendar').fullCalendar('changeView', 'agendaDay');
  });

});

</script>
