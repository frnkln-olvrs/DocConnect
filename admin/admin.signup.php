<?php 
session_start();

require_once './tools/functions.php';
require_once './classes/account.class.php';

// if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1) {
// 	header('location: index.php');
// } else if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 2) {
// 	header('location: ./admin/index.php');
// }

$account = new Account();

if(isset($_SESSION['user_role']) || $account->check_for_admin(0)){
    header('location: ./admin.login.php'); // change the location later
}

if(isset($_POST['signup'])){


}



?>

<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'Admin | Signup';
	include './includes/admin_head.php';
  function getCurrentPage() {
    return basename($_SERVER['PHP_SELF']);
  }
?>
<body class="bg-danger d-flex align-items-center min-vh-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
      <div class="card shadow-lg">
          <div class="card-header text-center">
            <h4>Admin Signup</h4>
          </div>
          
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-12 col-md-4 mb-3">
                  <label for="firstname" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstname" placeholder="first name" required value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
                </div>
                <div class="col-12 col-md-4 mb-3">
                  <label for="middlename" class="form-label">Middle Name</label>
                  <input type="text" class="form-control" id="middlename" placeholder="middle name" value="<?= isset($_POST['middlename']) ? $_POST['middlename'] : '' ?>">
                </div>
                <div class="col-12 col-md-4 mb-3">
                  <label for="lastname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastname" placeholder="last name" required value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
                 <?php
                    $new_account = new Account();
                    if (isset($_POST['email'])) {
                        $new_account->email = htmlentities($_POST['email']);
                    } else {
                        $new_account->email = '';
                    }
                    if (isset($_POST['email']) && strcmp(validate_email($_POST['email']), 'success') != 0) {
                    ?>
                        <p class="text-dark m-0 ps-2"><?= validate_email($_POST['email']) ?></p>
                    <?php
                    } else if ($new_account->is_email_exist() && $_POST['email']) {
                    ?>
                        <p class="text-dark m-0 ps-2">Email you've entered already exist.</p>
                    <?php
                    } else if (!validate_wmsu_email($_POST['email'])) {
                    ?>
                        <p class="text-dark m-0 ps-2">You must use wmsu email.</p>
                    <?php
                    }
                    ?>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
              </div>
              <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password" required value="<?= isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '' ?>">
              </div>
              <button type="submit" class="btn btn-primary text-light w-100">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
