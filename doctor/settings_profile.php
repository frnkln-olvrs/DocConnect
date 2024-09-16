<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Settings';
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
      

      <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Account Settings</h1>
        </div>

        <div class="row">
          <div class="col">
            <nav aria-label="breadcrumb" class="bg-body-tertiary border-1 border rounded-3 p-3 mb-4">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-dark">Profile Settings</a></li>
                <li class="breadcrumb-item"><a href="#">Appointment Settings</a></li>
                <li class="breadcrumb-item"><a href="#">Privacy and Security</a></li>
                <li class="breadcrumb-item"><a href="#">Notification Settings</a></li>
                <li class="breadcrumb-item"><a href="#">Patient Interaction Settings</a></li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="card bg-body-tertiary mb-4">
          <div class="card-body">
            <form>
              <!-- Profile Picture -->
              <div class="d-flex align-items-center mx-4 mb-4">
                <img src="../assets/images/defualt_profile.png" class="rounded-circle me-5" alt="User Avatar" style="height: 150px;">
                <button class="btn btn-primary btn-md d-block mx-2 text-light" type="button">Upload New</button>
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
                  <input type="text" class="form-control" id="firstName" placeholder="First name">
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
                    <option value="male">Cardiologist</option>
                    <option value="female">Pediatrician</option>
                    <option value="other">Cardiologist</option>
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
</body>