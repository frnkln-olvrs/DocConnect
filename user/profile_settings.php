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
            $setting = 'active';
            $aSetting = 'page';
            $cSetting = 'text-dark';
            
            include 'profile_nav.php';
          ?>

          <div class="card bg-body-tertiary mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class='bx bx-user text-primary display-6 me-2' ></i>
                <h4 class="mb-0">Account</h4>
              </div>
              <hr class="my-2" style="height: 2.5px;">
              <form action="#.php" method="post">
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>