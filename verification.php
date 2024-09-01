<

<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'Admin | Verify';
  include './admin/includes/admin_head.php';
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
            <form>
              <div class="mb-3">
                <label for="verify" class="form-label">Verification Code</label>
                <input type="text" class="form-control" id="verify" placeholder="Enter code" required>
              </div>
              <div class="mb-3 text-end">
                <a href="#" id="resend-link" class="text-primary">Resend Code</a>
                <span id="countdown" class="text-muted ms-1"></span>
              </div>
              <button type="submit" class="btn btn-primary text-light w-100">Verify</button>
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
