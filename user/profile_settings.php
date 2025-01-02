<?php
session_start();

if (isset($_SESSION['verification_status']) && $_SESSION['verification_status'] != 'Verified') {
  header('location: ../user/verification.php');
}

require_once('../tools/functions.php');
require_once('../classes/account.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'DocConnect | Profile';
	include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>

  <section id="profile" class="page-container">
    <div class="container py-5">

      <div class="row">
        <?php include 'profile_left.php'; ?>
        
        <div class="col-lg-9">
          <?php 
            $setting = 'active';
            $aSetting = 'page';
            $cSetting = 'text-dark';
            
            include 'profile_nav.php';
          ?>

          <div class="card bg-body-tertiary mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class='bx bx-user text-primary display-6 me-2' ></i>
                <h4 class="mb-0">Account</h4>
              </div>
              <hr class="my-2" style="height: 2.5px;">
              <form action="#.php" method="post">
                <!-- ---NAME--- -->
                <div class="row mb-3">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="firstName" class="form-label text-black-50">First Name</label>
                    <input type="text" class="form-control bg-light border border-dark" id="firstName" name="first_name" required>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="middleName" class="form-label text-black-50">Middle Name</label>
                    <input type="text" class="form-control bg-light border border-dark" id="middleName" name="middle_name">
                  </div>
                  <div class="col-md-4">
                    <label for="lastName" class="form-label text-black-50">Last Name</label>
                    <input type="text" class="form-control bg-light border border-dark" id="lastName" name="last_name" required>
                  </div>
                </div>

                <!-- ---2nd ROW--- -->
                <div class="row mb-3">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="occupation" class="form-label text-black-50">Occupation</label>
                    <input type="text" class="form-control bg-light border border-dark" id="occupation" name="occupation" value="Student" disabled>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="schoolID" class="form-label text-black-50">School ID</label>
                    <input type="text" class="form-control bg-light border border-dark" id="schoolID" name="school_id" required>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="gender" class="form-label text-black-50">Gender</label>
                    <select class="form-select bg-light border border-dark" id="gender" name="gender" required>
                      <option value="" disabled selected>Please Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>

                <!-- ---3rd ROW--- -->
                <div class="row mb-3">
                  <div class="col-md-7 mb-3 mb-md-0">
                    <label for="email" class="form-label text-black-50">Email</label>
                    <input type="email" class="form-control bg-light border border-dark" id="email" name="email" placeholder="example@example.com" required>
                  </div>
                  <div class="col-md-5 mb-3 mb-md-0">
                    <label for="phoneNo" class="form-label text-black-50">Phone No.</label>
                    <input type="text" class="form-control bg-light border border-dark" id="phoneNo" name="Phone_No" value="+63 " pattern="\+63 \d{3} \d{3} \d{4}" required/>
                  </div>
                </div>
                
                <!-- ---4th ROW--- -->
                <div class="row mb-3">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="age" class="form-label text-black-50">Age</label>
                    <input type="text" class="form-control bg-light border border-dark" id="age" name="age" required>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="height" class="form-label text-black-50">Height <span class="text-small">(cm)</span></label>
                    <div class="input-group">
                      <input type="number" class="form-control bg-light border border-dark" id="height" name="height" placeholder="Enter height" required/>
                      <span class="input-group-text bg-light border border-dark">cm</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="weight" class="form-label text-black-50">Weight <span class="text-small">(kg)</span></label>
                    <div class="input-group">
                      <input type="number" class="form-control bg-light border border-dark" id="weight" name="weight" placeholder="Enter weight" required/>
                      <span class="input-group-text bg-light border border-dark">kg</span>
                    </div>
                  </div>
                </div>
                <!-- ---4th ROW--- -->
                <div class="row mb-3">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="address" class="form-label text-black-50">Address</label>
                    <input type="text" class="form-control bg-light border border-dark" id="address" name="address">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script>
    document.getElementById('phoneNo').addEventListener('input', function() {
      const prefix = "+63 ";
      if (!this.value.startsWith(prefix)) {
        this.value = prefix;
      }

      const rawDigits = this.value.slice(prefix.length).replace(/\D/g, '');
      let formatted = "";

      if (rawDigits.length > 0) {
        formatted += rawDigits.slice(0, 3);
      }
      if (rawDigits.length > 3) {
        formatted += " " + rawDigits.slice(3, 6);
      }
      if (rawDigits.length > 6) {
        formatted += " " + rawDigits.slice(6, 10);
      }

      this.value =prefix + formatted;
    });
  </script>
  
  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>