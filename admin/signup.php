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
                  <label for="f_name" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="f_name" placeholder="first name" required>
                </div>
                <div class="col-12 col-md-4 mb-3">
                  <label for="m_name" class="form-label">Middle Name</label>
                  <input type="text" class="form-control" id="m_name" placeholder="middle name">
                </div>
                <div class="col-12 col-md-4 mb-3">
                  <label for="l_name" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="l_name" placeholder="last name" required>
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
              </div>
              <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password" required>
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
