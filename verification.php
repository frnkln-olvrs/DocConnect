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
                <a href="#" class="text-primary">Resend Code</a>
                <p id="demo"></p>
              </div>
              <button type="submit" class="btn btn-primary text-light w-100">Login</button>
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
    var count = 0;
    var timer = $.timer(function() {
        $('#counter').html(++count);
    });
    timer.set({ time : 1000, autostart : true });
  </script>
</body>
</html>
