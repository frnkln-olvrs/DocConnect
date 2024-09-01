<?php
session_start();

// if (isset($_SESSION['user_role']) && $_SESSION['verification_status'] == "Verified") {
//     header('location: ../index.php');
// } else if (!isset($_SESSION['user_role'])) {
//     header('location: ./login.php');
// }

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
            <h4>Verify</h4>
          </div>
          
          <div class="card-body">
            <form method="post" action="">
              <div class="mb-3">
                <label for="verify" class="form-label">Verification Code</label>
                <input type="text" class="form-control" id="verify" placeholder="Enter code" required>
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
                <input type="submit" id="resend-link" class="text-primary bg-white border-0" name="resend" value="Resend">
                <span id="countdown" class="text-muted ms-1"></span>
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

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var countdownElement = document.getElementById("countdown");
      var resendLink = document.getElementById("resend-link");
      var countdownTime = 60;
      
      function startCountdown() {
        var countdownInterval = setInterval(function() {
          countdownElement.innerText = "[" + countdownTime + "]";

          if (countdownTime <= 0) {
            clearInterval(countdownInterval);
            countdownElement.innerText = "";
            resendLink.innerText = "Code expired, please resend!";
            resendLink.href = "#"; // lagay lng link dto para sa resend
            resendLink.classList.remove("disabled");
          }

          countdownTime--;
        }, 1000);
      }

      resendLink.classList.add("disabled");

      startCountdown();
    });
  </script>
</body>
</html>
