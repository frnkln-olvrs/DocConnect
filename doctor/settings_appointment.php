<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Settings | Appointment';
include '../includes/head.php';
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
      

      <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Account Settings</h1>
        </div>

        <?php 
          require_once('../includes/doctorSetting_Nav.php')
        ?>

        <div class="card bg-body-tertiary mb-4">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-12 mb-3">
                  <div class="form-group mb-2">
                    <label for="work-hours">Workin Hours</label>
                    <div class="d-flex align-items-center">
                      <input type="time" class="form-control" id="work-hours" name="startwh" placeholder="">
                      <p class="m-0 mx-3"> to </p>
                      <input type="time" class="form-control" id="work-hours" name="endwh" placeholder="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6 mb-3">
                  <div class="form-group mb-2">
                    <label for="appointment-type">Appointment Types</label>
                    <div class="d-flex">
                      <div class="form-check py-3 pe-4 ps-5 border border-2 rounded-2 me-3">
                        <input class="form-check-input" type="checkbox" value="" id="in_person" checked>
                        <label class="form-check-label" for="in_person">
                          In-person
                        </label>
                      </div>
                      <div class="form-check py-3 pe-4 ps-5 border border-2 rounded-2 me-3">
                        <input class="form-check-input" type="checkbox" value="" id="virtual_consultation">
                        <label class="form-check-label" for="virtual_consultation">
                          Virtual Consultation
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6 mb-3">
                  <div class="form-group mb-2">
                    <label for="appointment-limit">Appointment Limits</label>
                    <input type="number" class="form-control" id="appointment-limit" name="appointment-limit" min="1" max="30">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-3">
                  <div class="form-group mb-2">
                    <label for="notification">Notification</label>
                    <div class="form-check py-3 pe-4 ps-5 border border-2 rounded-2 me-3">
                      <input class="form-check-input" type="checkbox" value="" id="notification" checked>
                      <label class="form-check-label" for="notification">
                        Enable notifications
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Save Button -->
              <button type="submit" class="btn btn-primary text-light">Save Changes</button>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>