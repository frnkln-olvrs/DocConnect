<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Settings | Profile';
$setting = 'active';
include '../includes/head.php';
?>

<body>
  <?php
    require_once('../includes/header-doctor.php');
  ?>

  <div class="container-fluid">
    <div class="row">
      <?php 
        require_once('../includes/sidepanel-doctor.php');
      ?>
      

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Account Settings</h1>
        </div>

        <?php 
          require_once('../includes/doctorSetting_Nav.php')
        ?>

        <div class="card bg-body-tertiary mb-4">
          <div class="card-body">
            <form id="profileForm">
              <div class="d-flex align-items-center mx-4 mb-4">
              <!-- Profile Picture -->
                <div class="campus-pic align-items-end">
                  <label class="label brand-border-color d-flex flex-column" for="file" style="border-width: 4px !important;">
                    <i class="bx bxs-camera-plus text-light p-2 bg-primary"></i>
                    <span>Change Image</span>
                  </label>
                  <img src="../assets/images/defualt_profile.png" id="output" class="rounded-circle" alt="User Avatar">
                  <input id="file" type="file" name="campus_profile" accept=".jpg, .jpeg, .png" required onchange="validateFile(event)">
                </div>
                <button class="btn btn-primary btn-md d-block mx-2 text-light" id="upload_profile" type="button">Upload New</button>
                <button class="btn btn-outline-secondary btn-md mx-2" type="button">Delete Avatar</button>
              </div>

              <!-- Personal Information -->
              <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-3">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="First name">
                </div>
                <div class="col mb-3">
                  <label for="middleName" class="form-label">Middle Name</label>
                  <input type="text" class="form-control" id="middleName" placeholder="Middle name">
                </div>
                <div class="col mb-3">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="Last name">
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6 mb-3">
                  <label for="gender" class="form-label">Gender</label>
                  <select id="gender" class="form-select" required>
                    <option value="" disabled selected>Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="col-12 col-md-6 mb-3">
                  <label for="birthday" class="form-label">Birthday</label>
                  <input type="date" class="form-control" id="birthday" required>
                </div>
              </div>

              <div class="row row-cols-1 row-cols-md-2">
                <!-- DROPDOWN WITH SESRCH -->
                <div class="col-12 col-md-6 mb-3">
                  <label for="specialty" class="form-label">Specialties</label>
                  <select id="specialty" class="form-select" required>
                    <option value="" disabled selected>Select Specialties</option>
                    <option value="cardiologist">Cardiologist</option>
                    <option value="pediatrician">Pediatrician</option>
                    <!-- Add more specialties here -->
                  </select>
                </div>
                <!-- DAPAT TEXT INPUT WITH SUGGEWSTION -->
                <div class="col-12 col-md-6 mb-3">
                  <label for="qualification" class="form-label">Qualifications</label>
                  <input type="text" class="form-control" id="qualification" placeholder="qualification" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="example@email.com">
                </div>
              </div>

              <!-- Gender -->
              <!-- <div class="row mb-3">
                <label class="form-label">Gender</label>
                <div class="col">
                  <div class="form-check form-check-inline border border-2 border-dark rounded-2 px-4 ps-5 py-3">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male</label>
                  </div>
                  <div class="form-check form-check-inline border border-2 border-dark rounded-2 px-4 ps-5 py-3">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                  </div>
                </div>
              </div> -->

              <!-- Tax Information -->
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control" id="bio" rows="3"></textarea>
                  </div>
                </div>
              </div>

              <!-- Address
              <div class="mb-3">
                <label for="address" class="form-label">Residential Address</label>
                <input type="text" class="form-control" id="address" placeholder="123 street, city">
              </div> -->

              <!-- Save Button -->
              <button type="submit" class="btn btn-primary text-light">Save Changes</button>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="../js/imageChange.js"></script>
</body>
</html>