<?php
session_start();

if (isset($_SESSION['user_role'])) {
  header('location: ../index.php');
}

require_once("../classes/account.class.php");
require_once("../tools/functions.php");

if (isset($_POST['signup'])) {

  $account->email = htmlentities($_POST['email']);
  $account->password = htmlentities($_POST['password']);
  $account->firstname = ucfirst(strtolower(htmlentities($_POST['firstname'])));
  if (isset($_POST['middlename'])) {
    $account->middlename = ucfirst(strtolower(htmlentities($_POST['middlename'])));
  } else {
    $account->middlename = '';
  }
  $account->lastname = ucfirst(strtolower(htmlentities($_POST['lastname'])));
  $account->user_role = 1; // user_role (0 = admin, 1 = doc, 2 = mod, 3 = user)

  if (
    validate_field($account->email) &&
    validate_field($account->password) &&
    validate_field($account->firstname) &&
    validate_field($account->lastname) &&
    validate_password($account->password) &&
    validate_cpw($account->password, $_POST['confirm-password']) &&
    validate_email($account->email) == 'success' && !$account->is_email_exist() &&
    validate_wmsu_email($account->email)
  ) {
    if ($account->add_admin()) {
      $success = 'success';
    } else {
      echo 'An error occured while adding in the database.';
    }
  } else {
    $success = 'failed';
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Login';
include '../includes/head.php';
?>

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js"></script>
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="#">
        <a href="../index.php" class="d-flex align-items-center text-dark text-decoration-none">
          <img src="../assets/images/logo.png" alt="Logo" height="35">
          <h1 class="fs-4 link-danger m-0 d-name">Doc<span class="fs-4 link-dark">Connect</span></h1>
        </a>
        <h3 class="text-start fw-bold w-100">Sign up</h3>
        <div class="row row-cols-3 w-100">
          <div class="form-input px-1">
            <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="first name" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
            <?php
            if (isset($_POST['firstname']) && !validate_field($_POST['firstname'])) {
            ?>
              <p class="text-dark m-0 ps-2">First name is required.</p>
            <?php
            }
            ?>
          </div>
          <div class="form-input px-1">
            <input type="text" class="form-control" id="mname" name="middlename" placeholder="middle name" required value="<?= isset($_POST['middlename']) ? $_POST['middlename'] : '' ?>">
          </div>
          <div class="form-input px-1">
            <input type="text" class="form-control" id="lname" name="lastname" placeholder="last name" required value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
            <?php
            if (isset($_POST['firstname']) && !validate_field($_POST['lastname'])) {
            ?>
              <p class="text-dark m-0 ps-2">Last name is required.</p>
            <?php
            }
            ?>
          </div>
        </div>

        <div class="form-input w-100 px-1">
          <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
        </div>

        <div class="row row-cols-1 row-cols-md-2 w-100">
          <div class="form-input px-1">
            <input type="text" class="form-control" id="phoneNo" placeholder="+63 9xx xxx xxxx" required>
          </div>
          <div class="form-input px-1">
            <select class="form-select my-2" aria-label="Campus" required>

              <option selected>Campus</option>
              <option value="campA">Campus A</option>
              <option value="campB">Campus B</option>
              <option value="campC">Campus C</option>
            </select>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 w-100">
          <div class="form-input px-1">
            <select class="form-select my-2" aria-label="gender" required>
              <option selected>Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-input px-1">
            <input type="date" class="form-control" id="contact" placeholder="MM/DD/YYYY" required>
          </div>
        </div>

        <div class="row row-cols-2 w-100">
          <div class="form-input px-1">
            <input type="password" class="form-control" id="password-signup" placeholder="Password" required>
          </div>
          <div class="form-input px-1">
            <input type="password" class="form-control" id="confirmpassword-signup" placeholder="Confirm password" required>
          </div>
        </div>

        <div class="d-flex justify-content-between w-100">
          <div class="form-check p-0 mb-3 d-flex justify-content-center">
            <input class="form-check-input m-0 me-1" type="checkbox" value="yes" id="confirm-terms" required>
            <label class="form-check-label" for="confirm-terms">
              I agree to the <a href="#" class="link-danger">Terms of Service</a> and <a href="#" class="link-danger">Privacy Policy</a>
            </label>
          </div>
        </div>

        <button>Sign Up</button>
        <p class="text-center">Already have an account? <span class="link-danger" id="signIn" style="cursor: pointer">Log In</span></p>
      </form>
    </div>

    <div class="form-container sign-in-container">
      <form action="#">
        <a href="./index.php" class="d-flex align-items-center text-dark text-decoration-none">
          <img src="./assets/images/logo.png" alt="Logo" height="35">
          <h1 class="fs-4 link-danger m-0 d-name">Doc<span class="fs-4 link-dark">Connect</span></h1>
        </a>
        <h3 class="text-start fw-bold w-100">Sign in</h3>
        <div class="form-floating mb-3 w-100">
          <input type="email" class="form-control border-2" id="email-login" placeholder="Email" required>
          <label for="email-login" class="mt-2">Email</label>
        </div>
        <div class="form-floating mb-3 w-100">
          <input type="password" class="form-control border-2" id="password-login" placeholder="Password" required>
          <label for="password-login" class="mt-2">Password</label>
        </div>
        <div class="d-flex justify-content-between w-100">
          <div class="form-check p-0 mb-3 d-flex justify-content-center">
            <input class="form-check-input m-0 me-1" type="checkbox" value="yes" id="confirm-terms" required>
            <label class="form-check-label" for="confirm-terms">Remember Me</label>
          </div>
          <a href="#" class="text-end m-0 mb-3">Forgot your password?</a>
        </div>
        <button>Login</button>
        <p class="text-center">New Here? <span class="link-danger" id="signUp" style="cursor: pointer">Sign Up!</span></p>
      </form>
    </div>

    <div class="overlay-container">
      <canvas id="canvas" class="canvas-back" style="z-index: 10;"></canvas>
      <div class="overlay" style="z-index: 2;">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button class="d-none ghost" id="signIn-overlay">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="d-none ghost" id="signUp-overlay">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <script src="./js/login.js"></script>
</body>

</html>