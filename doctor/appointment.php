<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Appointment';
$appointment = 'active';
include '../includes/head.php';

//PHP array for events
$events = [
  ['title' => 'Checkup with Dr. Smith', 'start' => '2024-09-25'],
  ['title' => 'Consultation', 'start' => '2024-09-26'],
  ['title' => 'Follow-up Appointment', 'start' => '2024-09-27']
];
?>

<body>
  <?php
  require_once('../includes/header-doctor.php');
  ?>
  <div class="container-fluid">
    <div class="row">
      <?php
      require_once('../includes/sidepanel-doctor.php');
      ?>
      <main class="col-md-9 ms-sm-auto col-lg-10 bg-light">
        <div class="container my-4">
          <h2>Manage Appointments</h2>
          <div id="calendar"></div>
          <button id="addAppointmentBtn" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addEventModal">Add Appointment</button>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap Modal Adding Events -->
  <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEventModalLabel">Add Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addEventForm">
            <div class="mb-3">
              <label for="eventTitle" class="form-label">Event Title</label>
              <input type="text" class="form-control" id="eventTitle" name="eventTitle" required>
            </div>
            <div class="mb-3">
              <label for="eventDate" class="form-label">Event Date</label>
              <input type="date" class="form-control" id="eventDate" name="eventDate" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Appointment</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: <?php echo json_encode($events); ?>, // load php array
      });
      calendar.render();

      // form submission
      document.getElementById('addEventForm').addEventListener('submit', function(e) {
        e.preventDefault();

        var eventTitle = document.getElementById('eventTitle').value;
        var eventDate = document.getElementById('eventDate').value;

        // Add event to FullCalendar dynamically
        var event = {
          title: eventTitle,
          start: eventDate
        };
        calendar.addEvent(event); // Add event to calendar
        document.getElementById('addEventForm').reset(); // Reset form
        var modal = bootstrap.Modal.getInstance(document.getElementById('addEventModal')); // Close modal
        modal.hide();
      });
    });
  </script>
</body>

</html>
