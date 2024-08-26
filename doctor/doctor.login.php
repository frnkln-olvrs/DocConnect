<!DOCTYPE html>
<html lang="en">
<?php
  $title = 'Login';
  include '../includes/head.php';
?>
<body class="bg-green d-flex align-items-center min-vh-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="card shadow-lg">
          <div class="card-header text-center">
            <h4>Doctors Login</h4>
          </div>
          
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="mb-1">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
              </div>
              <div class="mb-3 text-end">
                <a href="#" class="text-primary">Forgot Password?</a>
              </div>
              <button type="submit" class="btn btn-primary text-light w-100">Login</button>
            </form>
          </div>

          <div class="card-footer text-center">
            <small class="text-muted">Don't have an account? <a href="./doctor.signup">Signup here</a></small>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
