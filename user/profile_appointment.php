<?php
session_start();

if (isset($_SESSION['verification_status']) && $_SESSION['verification_status'] != 'Verified') {
  header('location: ../user/verification.php');
}

require_once('../tools/functions.php');
require_once('../classes/account.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'DocConnect | Profile';
  include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>

<section id="profile" class="page-container">
    <div class="container py-5">

      <div class="row">
        <?php include 'profile_left.php'; ?>
        
        <div class="col-lg-9">
          <?php 
            $appointment = 'active';
            $aAppointment = 'page';
            $cAppointment = 'text-dark';
            
            include 'profile_nav.php';
          ?>

          <div class="card bg-body-tertiary mb-4">
            <div class="card-body">
              <div class="row m-0" id="calendar-container">
                <div class="col-md-12">
                  <h5 class="card-title mb-2 text-green">Calendar</h5>
                  <div id="calendar" class="m-0"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="card bg-body-tertiary mb-4">
            <div class="card-body">
              <h5 class="card-title mb-2 text-green">January List</h5>
              <hr>
              <div class="table-responsive">
                <?php
                  $user_appointment = array(
                    array(
                      'date_time' => '01-01-26 | 10:00am',
                      'doctor' => 'Dr. Smith',
                      'department' => 'Cardioogy',
                      'meeting_type' => 'Online',
                      'link' => '#',
                      'status' => 'Confirmed',
                    ),
                  );
                ?>
                <table class="table table-striped" id="eventsTable">
                  <thead>
                    <tr>
                      <th scope="col" width="3%">#</th>
                      <th scope="col">Date & Time</th>
                      <th scope="col">Doctor</th>
                      <th scope="col">Department</th>
                      <th scope="col">Meeting Type</th>
                      <th scope="col">Link</th>
                      <th scope="col">Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $counter = 1;
                    foreach ($user_appointment as $item) {
                    ?>
                      <tr>
                        <td><?= $counter ?></td>
                        <td><?= $item['date_time'] ?></td>
                        <td><?= $item['doctor'] ?></td>
                        <td><?= $item['department'] ?></td>
                        <td><?= $item['meeting_type'] ?></td>
                        <td><?= $item['link'] ?></td>
                        <td><?= $item['status'] ?></td>
                        <td class="text-center">
                          <button id="addAppointmentBtn" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#addEventModal"><i class='bx bx-show text-light'></i></button>
                          <button class="btn btn-danger btn-sm ms-2"><i class='bx bxs-trash text-light'></i></button>
                        </td>
                      </tr>
                    <?php
                      $counter++;
                    }
                    ?>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>01-01-25 | 10:00am</td>
                      <td>Dr. Smith</td>
                      <td>Cardiology</td>
                      <td><a href="#" class="btn btn-success btn-sm"><i class='bx bx-video text-light'></i></td>
                      <td>Confirmed</td>
                      <td class="text-center">
                        <button id="addAppointmentBtn" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#addEventModal"><i class='bx bx-show text-light'></i></button>
                        <button class="btn btn-danger btn-sm ms-2"><i class='bx bxs-trash text-light'></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap Modal for Adding Events -->
  <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEventModalLabel">Details</h5>
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
            <div class="d-flex align-items-center w-100">
              <div class="mb-3 w-100">
                <label for="startTime" class="form-label">Time Start</label>
                <input type="time" class="form-control" id="startTime" name="startTime" required>
              </div>
              <p class="m-0 mx-3 mt-3"> to </p>
              <div class="mb-3 w-100">
                <label for="endTime" class="form-label">Time End</label>
                <input type="time" class="form-control" id="endTime" name="endTime">
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Meeting Type</label>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="meetingTypeSwitch" name="meetingType" value="online">
                <label class="form-check-label" for="meetingTypeSwitch" id="meetingTypeLabel">Face-to-Face</label>
              </div>
            </div>
            <div class="mb-3">
              <label for="eventUrl" class="form-label">Event URL (for Online Meetings)</label>
              <input type="url" class="form-control" id="eventUrl" name="eventUrl" placeholder="http://example.com" disabled>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="isRepeating" name="isRepeating">
              <label class="form-check-label" for="isRepeating">Is this a repeating event?</label>
            </div>
            <button type="submit" class="btn btn-primary text-light">Cancel Appointment</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/user/profile_appointment.js"></script>
  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>
