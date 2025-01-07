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
          <?php include 'profile_nav.php';?>

          <div class="card bg-body-tertiary mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <h4 class="mb-0">Edit Allergies</h4>
              </div>
              <hr>
              <div class="table-responsive">
                <?php
                  $allergies = array(
                    array(
                      'type' => 'Penicillin',
                      'level' => 'High',
                    ),
                    array(
                      'type' => 'Dust',
                      'level' => 'Medium',
                    ),
                    array(
                      'type' => 'Pollen',
                      'level' => 'Low',
                    ),
                    array(
                      'type' => 'Cat Fur',
                      'level' => 'Medium',
                    ),
                  );
                ?>
                <table class="table table-striped" id="eventsTable">
                  <thead>
                    <tr>
                      <th scope="col" width="3%">#</th>
                      <th scope="col">Type</th>
                      <th scope="col">Level</th>
                      <th class="text-end"><p class="me-3 mb-0">Action</p></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $counter = 1;
                    foreach ($allergies as $item) {
                    ?>
                      <tr>
                        <td><?= $counter ?></td>
                        <td><?= $item['type'] ?></td>
                        <td><?= $item['level'] ?></td>
                        <td class="text-end">
                          <button 
                            class="btn btn-warning btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#addEventModal"
                            data-doctor="<?= $item['type'] ?>"
                            data-department="<?= $item['level'] ?>"
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
  </section>

   <!-- Bootstrap Modal for Viewing Table Details -->
   <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <div class="w-100 text-center">
            <input type="text" class="text-center fw-bold bg-white border-0 fs-4" id="status" name="status" readonly>
          </div>
          <button type="button" class="btn-close position-absolute end-0 top-0 me-3 mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addEventForm">
            <div class="row mb-3">
              <div class="col-6">
                <label for="eventDate" class="form-label">Date</label>
                <input type="text" class="form-control" id="eventDate" name="eventDate" readonly>
              </div>
              <div class="col-6">
                <label for="eventTime" class="form-label">Time</label>
                <input type="text" class="form-control" id="eventTime" name="eventTime" readonly>
              </div>
            </div>
            <div class="mb-3">
              <label for="meetingType" class="form-label">Meeting Type</label>
              <input type="text" class="form-control" id="meetingType" name="meetingType" readonly>
            </div>
            <div class="row mb-3">
              <div class="col-6">
                <label for="doctorName" class="form-label">Doctor</label>
                <input type="text" class="form-control" id="doctorName" name="doctorName" readonly>
              </div>
              <div class="col-6">
                <label for="departmentName" class="form-label">Department</label>
                <input type="text" class="form-control" id="departmentName" name="departmentName" readonly>
              </div>
            </div>
            <!-- Link Section -->
            <div class="mb-3" id="linkSection">
              <label for="link" class="form-label">Link</label>
              <a href="#" id="eventLink" class="form-control text-primary" target="_blank"></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>