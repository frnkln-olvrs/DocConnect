<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Settings | Notification';
$setting = 'active';
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
              
              <!-- Save Button -->
              <button type="submit" class="btn btn-primary text-light">Save Changes</button>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>