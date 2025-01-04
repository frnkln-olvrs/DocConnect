document.addEventListener('DOMContentLoaded', function () {
  var calendarEl = document.getElementById('calendar');

  // Initialize FullCalendar
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: window.innerWidth < 768 ? 'listWeek' : 'dayGridMonth',
    themeSystem: 'Lux',
    editable: true,
    selectable: true,
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
    },
    events: [
      {
        title: 'General Consultation',
        start: '2025-01-01T10:00:00',
        backgroundColor: 'green',
        extendedProps: {
          status: 'Confirmed',
          doctor: 'Dr. Smith',
          department: 'Cardiology',
        },
      },
      {
        title: 'Pending Approval',
        start: '2025-01-15T14:00:00',
        backgroundColor: 'yellow',
        extendedProps: {
          status: 'Pending',
          doctor: 'Dr. Johnson',
          department: 'Pediatrics',
        },
      },
      {
        title: 'Canceled Appointment',
        start: '2025-01-20T09:00:00',
        backgroundColor: 'red',
        extendedProps: {
          status: 'Canceled',
          doctor: 'Dr. Smith',
          department: 'Cardiology',
        },
      },
    ],
    eventMouseEnter: function (info) {
      var tooltip = document.createElement('div');
      tooltip.classList.add('fc-tooltip');
      tooltip.style.position = 'absolute';
      tooltip.style.backgroundColor = 'white';
      tooltip.style.border = '1px solid #ccc';
      tooltip.style.padding = '10px';
      tooltip.style.zIndex = '1000';
      tooltip.innerHTML = `
        <strong class="text-green">${info.event.title}</strong><br>
        Status: ${info.event.extendedProps.status}<br>
        Doctor: ${info.event.extendedProps.doctor}<br>
        Department: ${info.event.extendedProps.department}
      `;
      document.body.appendChild(tooltip);
      info.el.addEventListener('mousemove', function (e) {
        tooltip.style.left = e.pageX + 10 + 'px';
        tooltip.style.top = e.pageY + 10 + 'px';
      });
      info.el.addEventListener('mouseleave', function () {
        tooltip.remove();
      });
    },
    windowResize: function (view) {
      calendar.changeView(window.innerWidth < 768 ? 'listWeek' : 'dayGridMonth');
    },
  });

  // Render Calendar
  calendar.render();
});