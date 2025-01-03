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
              <div class="row m-0" id="calendar">
                <div class="col-md-12 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Calendar - December 2021</h5>
                      <div id="calendar"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  
  <script src="../js/user/profile_appointment.js"></script>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>