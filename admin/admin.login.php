<!DOCTYPE html>
<html lang="en">

<?php 
  $title = 'Admin Login';
	include './includes/admin_head.php';
?>
<body class="login-body px-5 py-2">
  <form class="login-form border border-2 border-black rounded-1 px-4 py-5">
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="form2Example1">Email address</label>
      <input type="email" id="form2Example1" class="form-control" />
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="form2Example2">Password</label>
      <input type="password" id="form2Example2" class="form-control" />
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-start">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="remember_btn" checked/>
          <label class="form-check-label" for="remember_btn">Remember me</label>
        </div>
      </div>

      <div class="col d-flex justify-content-end">
        <!-- Simple link -->
        <a href="#!" class="c-red">Forgot password?</a>
      </div>
    </div>

    <!-- Submit button -->
    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-block mb-4">Sign in</button>
    </div>
  </form>
</body>
</html>