<!DOCTYPE html>
<html lang="en">

<?php 
  $title = 'Login';
	include './includes/head.php';
?>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js"></script>
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>
  <div id="back">
    <canvas id="canvas" class="canvas-back"></canvas>
    <div class="backRight">    
    </div>
    <div class="backLeft">
    </div>
  </div>
  
  <div id="slideBox" class="container bg-white">
    <div class="row topLayer">
      <div class="col-md-6 p-0">
        <div class="content">
          <h2>Sign Up</h2>
          <form id="form-signup" method="post" onsubmit="return false;">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="username-signup" placeholder="Username">
              <label for="username-signup">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="password-signup" placeholder="Password">
              <label for="password-signup">Password</label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" value="yes" id="confirm-terms">
              <label class="form-check-label" for="confirm-terms">
                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
              </label>
            </div>
            <div class="form-group">
              <button id="signUp" class="btn text-white signup" type="submit" name="signup">Sign up</button>
            </div>
            <p class="text-center">New Here? <span id="goLeft" class="signup off text-secondary"  style="cursor: pointer;">Log In</span> </p>
          </form>
        </div>
      </div>
      <div class="col-md-6 p-0">
        <div class="content">
          <h2>Login</h2>
          <form id="form-login" method="post" onsubmit="return false;">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="username-login" placeholder="Username">
              <label for="username-login">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="password-login" placeholder="Password">
              <label for="password-login">Password</label>
            </div>
            <div class="text-end">
              <a href="#" class="p-0 text-black text-decoration-none">Forgot Password?</a>
            </div>
            
            <div class="form-group">
              <button id="logIn" class="btn text-white login" type="submit" name="login">Log In</button>
            </div>
            <p class="text-center">New Here? <span id="goRight" class="login off text-secondary" name="signup" style="cursor: pointer;">Sign Up!</span></p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="./js/login.js"></script>
</body>
</html>