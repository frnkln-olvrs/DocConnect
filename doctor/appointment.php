<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Appointment';
$appointment = 'active';
include '../includes/head.php';

// Initialize the events array (temporary storage before using a database)
$events = [
  ['title' => 'Checkup with Dr. Smith', 'start' => '2024-09-25'],
  ['title' => 'Online Consultation', 'start' => '2024-09-26', 'url' => 'http://example.com/meeting-link'],
  ['title' => 'Follow-up Appointment', 'start' => '2024-09-27']
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $eventTitle = $_POST['eventTitle'];
  $eventDate = $_POST['eventDate'];
  $startTime = $_POST['startTime'];
  $endTime = $_POST['endTime'];
  $meetingType = $_POST['meetingType'];

  $eventUrl = isset($_POST['eventUrl']) ? $_POST['eventUrl'] : null;

  $isRepeating = isset($_POST['isRepeating']) ? true : false;

  $newEvent = [
    'title' => $eventTitle,
    'start' => $eventDate . 'T' . $startTime,
  ];

  if (!empty($endTime)) {
    $newEvent['end'] = $eventDate . 'T' . $endTime;
  }

  if ($meetingType == 'online' && !empty($eventUrl)) {
    $newEvent['url'] = $eventUrl;
  }

  if ($isRepeating) {
    $groupId = 'group' . rand(100, 999);
    $newEvent['groupId'] = $groupId;

    for ($i = 0; $i < 3; $i++) {
      $repeatingEvent = $newEvent;
      $newEventDate = date('Y-m-d\TH:i:s', strtotime($newEvent['start'] . " +$i week"));
      $repeatingEvent['start'] = $newEventDate;
      $events[] = $repeatingEvent;
    }
  } else {
    $events[] = $newEvent;
  }
}
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

  <!-- Bootstrap Modal for Adding Events -->
  <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEventModalLabel">Add Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addEventForm" method="POST" action="appointment.php">
            <div class="mb-3">
              <label for="eventTitle" class="form-label">Event Title</label>
              <input type="text" class="form-control" id="eventTitle" name="eventTitle" required>
            </div>
            <div class="mb-3">
              <label for="eventDate" class="form-label">Event Date</label>
              <input type="date" class="form-control" id="eventDate" name="eventDate" required>
            </div>
            <div class="mb-3">
              <label for="startTime" class="form-label">Start Time</label>
              <input type="time" class="form-control" id="startTime" name="startTime" required>
            </div>
            <div class="mb-3">
              <label for="endTime" class="form-label">End Time</label>
              <input type="time" class="form-control" id="endTime" name="endTime">
            </div>
            <!-- Switch for Face-to-Face or Online Meeting -->
            <div class="mb-3">
              <label class="form-label">Meeting Type</label>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="meetingTypeSwitch" name="meetingType" value="online">
                <label class="form-check-label" for="meetingTypeSwitch" id="meetingTypeLabel">Face-to-Face</label>
              </div>
            </div>
            <!-- URL field (enabled only if online meeting is selected) -->
            <div class="mb-3">
              <label for="eventUrl" class="form-label">Event URL (for Online Meetings)</label>
              <input type="url" class="form-control" id="eventUrl" name="eventUrl" placeholder="http://example.com" disabled>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="isRepeating" name="isRepeating">
              <label class="form-check-label" for="isRepeating">Is this a repeating event?</label>
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
        events: <?php echo json_encode($events); ?>, // Load events from PHP array
        eventClick: function(info) {
          // Check if the event has a URL
          if (info.event.url) {
            window.open(info.event.url, "_blank"); // Open the URL in a new tab
            info.jsEvent.preventDefault(); // Prevent default behavior (navigation)
          } else {
            // If no URL, event is not clickable (show a message or ignore)
            alert("This is a Face-to-Face event and does not have an online link.");
          }
        }
      });
      calendar.render();

      // Switch between Face-to-Face and Online Meeting
      var meetingTypeSwitch = document.getElementById('meetingTypeSwitch');
      var eventUrlField = document.getElementById('eventUrl');
      var meetingTypeLabel = document.getElementById('meetingTypeLabel');

      meetingTypeSwitch.addEventListener('change', function() {
        if (meetingTypeSwitch.checked) {
          // Online meeting selected
          eventUrlField.disabled = false;
          eventUrlField.required = true;
          meetingTypeLabel.innerHTML = 'Online';
        } else {
          // Face-to-Face meeting selected
          eventUrlField.disabled = true;
          eventUrlField.required = false;
          meetingTypeLabel.innerHTML = 'Face-to-Face';
        }
      });
    });
  </script>
</body>

</html>
