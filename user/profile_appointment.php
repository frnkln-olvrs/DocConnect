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
                      'date' => '01-01-25',
                      'time' => '10:00am',
                      'doctor' => 'Dr. Smith',
                      'department' => 'Cardiology',
                      'meeting_type' => 'Online',
                      'link' => '#',
                      'status' => 'Confirmed',
                    ),
                    array(
                      'date' => '01-15-25',
                      'time' => '02:00pm',
                      'doctor' => 'Dr. Johnson',
                      'department' => 'Pediatrics',
                      'meeting_type' => 'Face to Face',
                      'link' => 'N/A',
                      'status' => 'Pending',
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
                      $date_time = "{$item['date']} | {$item['time']}";
                    ?>
                      <tr>
                        <td><?= $counter ?></td>
                        <td><?= $date_time ?></td>
                        <td><?= $item['doctor'] ?></td>
                        <td><?= $item['department'] ?></td>
                        <td><?= $item['meeting_type'] ?></td>
                        <td>
                          <?php if ($item['meeting_type'] === 'Online') { ?>
                            <a href="<?= $item['link'] ?>" class="btn btn-success btn-sm"><i class='bx bx-video text-light'></i></a>
                          <?php } else { ?>
                            <a class="btn btn-secondary btn-sm text-light">N/A</a>
                          <?php } ?>
                        </td>
                        <td><?= $item['status'] ?></td>
                        <td class="text-center">
                          <button 
                            class="btn btn-warning btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#addEventModal"
                            data-date-time="<?= $date_time ?>"
                            data-doctor="<?= $item['doctor'] ?>"
                            data-department="<?= $item['department'] ?>"
                            data-meeting-type="<?= $item['meeting_type'] ?>"
                            data-link="<?= $item['link'] ?>"
                            data-status="<?= $item['status'] ?>"
                          >
                            <i class='bx bx-show text-light'></i>
                          </button>
                          <button class="btn btn-danger btn-sm ms-2"><i class='bx bxs-trash text-light'></i></button>
                        </td>
                      </tr>
                    <?php
                      $counter++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap Modal for Viewing table details -->
  <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center w-100">
            <input type="text" class="text-center fw-bold w-50 bg-white display-6" id="status" name="status" readonly>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addEventForm">
            <div class="row">
                <div class="col-6">
                  <label for="eventDateTime" class="form-label">Date</label>
                  <input type="text" class="form-control" id="eventDateime" name="eventDateTime" readonly>
                </div>
                <div class="col-6">
                  <label for="eventDateTime" class="form-label">Time</label>
                  <input type="text" class="form-control" id="eventDatTime" name="eventDateTime" readonly>
                </div>
            </div>
            <div class="mb-3">
              <label for="eventDateTime" class="form-label">Date & Time</label>
              <input type="text" class="form-control" id="eventDateTime" name="eventDateTime" readonly>
            </div>
            <div class="mb-3">
              <label for="doctorName" class="form-label">Doctor</label>
              <input type="text" class="form-control" id="doctorName" name="doctorName" readonly>
            </div>
            <div class="mb-3">
              <label for="departmentName" class="form-label">Department</label>
              <input type="text" class="form-control" id="departmentName" name="departmentName" readonly>
            </div>
            <div class="mb-3">
              <label for="meetingType" class="form-label">Meeting Type</label>
              <input type="text" class="form-control" id="meetingType" name="meetingType" readonly>
            </div>
            <div class="mb-3">
              <label for="link" class="form-label">Link</label>
              <a href="#" id="eventLink" class="form-control text-primary" target="_blank">Open Link</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
      button.addEventListener('click', () => {
        const modal = document.getElementById('addEventModal');
        modal.querySelector('#eventDateTime').value = button.getAttribute('data-date-time');
        modal.querySelector('#doctorName').value = button.getAttribute('data-doctor');
        modal.querySelector('#departmentName').value = button.getAttribute('data-department');
        modal.querySelector('#meetingType').value = button.getAttribute('data-meeting-type');
        modal.querySelector('#eventLink').href = button.getAttribute('data-link');
        modal.querySelector('#eventLink').textContent = button.getAttribute('data-link') === 'N/A' ? 'N/A' : 'Open Link';
        modal.querySelector('#status').value = button.getAttribute('data-status');
      });
    });
  </script>

  <?php 
    require_once ('../includes/footer.php');
  ?>

  <script src="../js/user/profile_appointment.js"></script>

</body>
</html>
