<?php
session_start();

if ((isset($_SESSION['user_role']) &&  $_SESSION['user_role'] == 0) && $_SESSION['verification_status'] == "Verified") {
  header('location: ../admin/index.php');
} else if (!isset($_SESSION['user_role'])) {
  header('location: ./login.php');
}

require_once("../classes/account.class.php");
require_once("../tools/functions.php");
require_once("../tools/mailer.php");

// Generate 6 digit code
$verification_code = generate_code();

if (!isset($_SESSION['code'])) {
  $_SESSION['code'] = $verification_code;
  send_code($_SESSION['email'], $_SESSION['fullname'], $_SESSION['code']);
} else if (isset($_POST['resend'])) {
  $_SESSION['code'] = $verification_code;
  send_code($_SESSION['email'], $_SESSION['fullname'], $_SESSION['code']);
} else if (isset($_POST['verify'])) {
  $account = new Account();

  $account->verification_status = 'Verified';
  $account->account_id = $_SESSION['account_id'];
  $code = htmlentities($_POST['code']);

  if ($code == $_SESSION['code'] && validate_field($code)) {
    if ($account->verify()) {
      $_SESSION['verification_status'] = 'Verified';
      $success = 'success';
    } else {
      echo 'An error occured while updating in the database.';
    }
  } else {
    $error = 'Invalid verification code.';
    $success = 'failed';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Admin | Verify';
include '../admin/includes/admin_head.php';
function getCurrentPage()
{
  return basename($_SERVER['PHP_SELF']);
}
?>

<body class="bg-danger d-flex align-items-center min-vh-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="card shadow-lg">
          <div class="card-header text-center">
            <h4>Verify</h4>
          </div>

          <div class="card-body">
            <form method="post" action="">
              <div class="mb-3">
                <label for="code" class="px-3 form-label text-center text-dark">
                  We've sent you 6-digit code to
                  <span class="text-primary fw-semibold "><?= $_SESSION['email'] ?></span>,
                  Enter the code below to verify your account.
                </label>
                <input type="text" class="form-control" id="verify" name="code" placeholder="Enter code">
                <?php
                if (isset($_POST['code']) && !validate_field($_POST['code']) && isset($_POST['verify'])) {
                ?>
                  <p class="text-dark m-0 ps-2">Verification code is required.</p>
                <?php
                } else if (isset($_POST['code']) && ($_POST['code'] != $_SESSION['code']) && isset($error)) {
                ?>
                  <p class="text-dark m-0 ps-2"><?= $error ?></p>
                <?php
                }
                ?>
              </div>
              <div class="mb-3 text-end">
                <p class="text-dark m-0">
                  Didn't received verification code?
                  <input type="submit" class="text-primary text-decoration-none fw-semibold border-0 bg-white" id="input_resend" onclick="var rb = document.getElementById('input_resend');rb.setAttribute('hidden', 'true');var ss = document.getElementById('input_sending');ss.style.cursor = 'default';ss.removeAttribute('hidden');" name="resend" value="Resend Code">
                  <span id="input_sending" class="text-primary fw-semibold" hidden>Sending!</span>
                </p>
              </div>
              <input type="submit" class="btn btn-primary text-light w-100" name="verify" value="Submit">
            </form>
          </div>

          <!-- <div class="card-footer text-center">
            <small class="text-muted">Don't have an account? <a href="./signup">Signup here</a></small>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  
</body>

</html>