$(document).ready( function() {
  /*
   * FULL CALENDAR JS
   */

  // Load Calendar dependency then setup calendar
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

  setupCalendar();

});
