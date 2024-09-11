<?php
session_start();

if (isset($_SESSION['verification_status']) && $_SESSION['verification_status'] != 'Verified') {
  header('location: ../user/verification.php');
} else if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 0) {
  header('location: ../index.php');
}

require_once '../tools/functions.php';
require_once '../classes/account.class.php';
require_once '../classes/campus.class.php';

$account = new Account();

if (isset($_POST['add'])) {

  $account->email = htmlentities($_POST['email']);
  $account->password = htmlentities($_POST['password']);
  $account->firstname = ucfirst(strtolower(htmlentities($_POST['firstname'])));
  if (isset($_POST['middlename'])) {
    $account->middlename = ucfirst(strtolower(htmlentities($_POST['middlename'])));
  } else {
    $account->middlename = '';
  }
  $account->campus_id = htmlentities($_POST['campus']);
  $account->gender = htmlentities($_POST['gender']);
  $account->lastname = ucfirst(strtolower(htmlentities($_POST['lastname'])));
  $account->user_role = 2; // user_role (0 = admin, 1 = mod, 2 = user)

  if (
    validate_field($account->email) &&
    validate_field($account->password) &&
    validate_field($account->firstname) &&
    validate_field($account->lastname) &&
    validate_password($account->gender) &&
    validate_password($account->campus_id) &&
    validate_password($account->password) &&
    validate_cpw($account->password, $_POST['confirm-password']) &&
    validate_email($account->email) == 'success' && !$account->is_email_exist() &&
    validate_wmsu_email($account->email)
  ) {
    if ($account->add_mod()) {
      $success = 'success';
    } else {
      echo 'An error occured while adding in the database.';
    }
  } else {
    $success = 'failed';
  }
}

?>

<html lang="en">
<?php
  $title = 'Campuses | Add Doctor';
  include './includes/admin_head.php';
  function getCurrentPage() {
    return basename($_SERVER['PHP_SELF']);
  }
?>
<body>
  <?php
    require_once ('./includes/admin_header.php');
  ?>
  <?php
    require_once ('./includes/admin_sidepanel.php');
  ?>

  <section id="add_campus" class="page-container">
    <div class="row">

      <div class="col-2"></div>

      <div class="col-12 col-md-8">
        <form>
          <div class="border shadow p-3 mb-5 bg-body rounded">
            <h3 class="text-center">Add Doctor</h3>
            
            <hr class="my-3 mx-4">

            <div class="row row-cols-1 row-cols-md-3">
              <div class="col form-group mb-2">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="first name" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
                <?php
                if (isset($_POST['firstname']) && !validate_field($_POST['firstname'])) {
                ?>
                  <p class="text-dark m-0 ps-2">First name is required.</p>
                <?php
                }
                ?>
              </div>
              <div class="col form-group mb-2">
                <label for="mname">Middle Name</label>
                <input type="text" class="form-control" id="middlename" name="middlename" placeholder="middle name" value="<?= isset($_POST['middlename']) ? $_POST['middlename'] : '' ?>">
              </div>
              <div class="col form-group mb-2">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="last name" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                <?php
                if (isset($_POST['lastname']) && !validate_field($_POST['lastname'])) {
                ?>
                  <p class="text-dark m-0 ps-2">Last name is required.</p>
                <?php
                }
                ?>
              </div>
            </div>

            <div class="form-group mb-2">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
              <?php
              if (isset($_POST['email']) && !validate_field($_POST['email'])) {
              ?>
                <p class="text-dark m-0 ps-2">Email is required.</p>
              <?php
              }
              ?>
            </div>

            <div class="form-group mb-2">
              <label for="contact">Phone No.</label>
              <input type="text" class="form-control" id="contact" placeholder="+63 9xx xxx xxxx">
            </div>
            
            <div class="row row-cols-1 row-cols-md-2">
              <div class="form-group mb-2">
                <label for="gender">Gender</label>
                <select class="form-select" aria-label="gender" name="gender">
                  <option selected>Gender</option>
                  <option value="male" <?= (isset($_POST['gender']) && $_POST['gender'] == "male") ? 'selected' : '' ?>>Male</option>
                  <option value="female" <?= (isset($_POST['gender']) && $_POST['gender'] == "female") ? 'selected' : '' ?>>Female</option>
                  <option value="other" <?= (isset($_POST['gender']) && $_POST['gender'] == "other") ? 'selected' : '' ?>>Other</option>
                </select>
                <?php
                if (isset($_POST['gender']) && !validate_field($_POST['gender'])) {
                ?>
                  <p class="text-dark m-0 ps-2">No gender selected.</p>
                <?php
                }
                ?>
              </div>
              
              <div class="form-group mb-2">
                <label for="DoB">Date of Birth</label>
                <input type="date" class="form-control" id="DoB" placeholder="MM/DD/YYYY">
              </div>
            </div>

            <div class="form-group mb-2">
              <label for="specialty">Specialties</label>
              <select class="form-select" aria-label="Default select example">
                
                <option selected>Open this select menu</option>
                <option value="1">Family Medicine</option>
              </select>
            </div>

            <div class="form-group mb-2">
              <label for="work-hours">Workin Hours</label>
              <div class="d-flex align-items-center">
                <input type="time" class="form-control" id="work-hours" placeholder="">
                <p class="m-0 mx-3"> to </p>
                <input type="time" class="form-control" id="work-hours" placeholder="">
              </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2">
              <div class="form-group mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
              </div>
              <div class="form-group mb-2">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password" required placeholder="Confirm your password" value="<?= isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '' ?>">
                <?php
                if (isset($_POST['password']) && isset($_POST['confirm-password']) && !validate_cpw($_POST['password'], $_POST['confirm-password'])) {
                ?>
                  <p class="text-dark m-0 ps-2">Password did not match.</p>
                <?php
                }
                ?>
              </div>
            </div>
            
            

            <!-- Save and Cancel Buttons -->
            <div class="d-flex justify-content-end mt-3">
              <a href="./doctorsAcc" class="btn btn-secondary me-2 link-light">Cancel</a>
              <button type="submit" class="btn btn-primary link-light">Add</button>
            </div>
          </div>
        </form>

      </div>

      <div class="col-2"></div>

    </div>

    
  </section>

</body>
</html>
