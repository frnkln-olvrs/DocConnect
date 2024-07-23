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
      <div class="col-6 p-0">
        <div class="content">
          <div class="d-flex justify-content-center m-0" >
            <a href="./index.php" class="d-flex align-items-center text-dark text-decoration-none" >
              <img src="./assets/images/logo.png" alt="Logo" height="35">
              <h1 class="fs-4 link-primary m-0 d-name">Doc<span class="link-dark">Connect</span></h1>
            </a>
          </div>
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
      <div class="col-6 p-0">
        <div class="content">
          <div class="d-flex justify-content-center m-0" >
            <a href="./index.php" class="d-flex align-items-center text-dark text-decoration-none" >
              <img src="./assets/images/logo.png" alt="Logo" height="35">
              <h1 class="fs-4 link-primary m-0 d-name">Doc<span class="link-dark">Connect</span></h1>
            </a>
          </div>
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
            <div class="row mb-4">
              <div class="col d-flex justify-content-start">
                <!-- Checkbox -->
                <div class="login-form form-check">
                  <input class="form-check-input" type="checkbox" value="" id="remember_btn" checked/>
                  <label class="form-check-label" for="remember_btn">Remember me</label>
                </div>
              </div>
        
              <div class="col d-flex justify-content-end">
                <!-- Simple link -->
                <a href="#!" class="link-dark text-decoration-none">Forgot password?</a>
              </div>
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