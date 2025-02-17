<?php
session_start();

if (isset($_SESSION['verification_status']) && $_SESSION['verification_status'] != 'Verified') {
  header('location: ../user/verification.php');
}

$birthdate = isset($_SESSION['birthdate']) ? date('Y-m-d', strtotime($_SESSION['birthdate'])) : "";

require_once('../tools/functions.php');
require_once('../classes/account.class.php');

$account_class = new Account();
if (isset($_POST['saveAccount'])) {
  $account_class->account_id = $_SESSION['account_id'];
}

if (isset($_POST['save_image'])) {

  $account->account_id = $_SESSION['account_id'];

  $uploaddir = '../assets/images/';
  $uploadname = $_FILES[htmlentities('account_image')]['name'];
  $uploadext = explode('.', $uploadname);
  $uploadnewext = strtolower(end($uploadext));
  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($uploadnewext, $allowed)) {

    $uploadenewname = uniqid('', true) . "." . $uploadnewext;
    $uploadfile = $uploaddir . $uploadenewname;

    if (move_uploaded_file($_FILES[htmlentities('account_image')]['tmp_name'], $uploadfile)) {
      $account->account_image = $uploadenewname;

      if ($account->save_image()) {
        $_SESSION['account_image'] = $account->account_image;
        $success = 'success';
      } else {
        echo 'An error occured while adding in the database.';
      }
    } else {
      $success = 'failed';
    }
  } else {
    $success = 'failed';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
$title = 'DocConnect | Profile';
include '../includes/head.php';
?>

<body>
  <?php
  require_once('../includes/header.php');
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
                <i class='bx bx-user text-primary display-6 me-2'></i>
                <h4 class="mb-0">Account</h4>
              </div>
              <hr class="mt-2 mb-3" style="height: 2.5px;">
              <form action="#.php" method="post">
                <div class="row">
                  <div class="col-md-4">
                    <!-- Image Upload Section -->
                    <div class="d-flex flex-column align-items-center mx-4 mb-4">
                      <!-- Profile Picture -->
                      <div class="campus-pic align-items-end">
                        <label class="label brand-border-color d-flex flex-column" for="file" style="border-width: 4px !important; border-radius: 5px !important;">
                          <span>Change Image</span>
                        </label>

                        <img src="<?php if (isset($_SESSION['account_image'])) {
                                    echo "../assets/images/" . $_SESSION['account_image'];
                                  } else {
                                    echo "../assets/images/default_profile.png";
                                  } ?>" id="output" class="rounded-2" alt="User Avatar">

                        <!-- Image Upload Input -->
                        <input id="file" type="file" name="account_image" accept=".jpg, .jpeg, .png" onchange="previewImage(event)">
                      </div>

                      <!-- Upload Button -->
                      <button class="btn btn-primary text-light" id="uploadProfileImage" type="button">Upload Image</button>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <!-- ---NAME--- -->
                    <div class="row mb-3">
                      <div class="col-12 mb-3 mb-md-0">
                        <label for="firstName" class="form-label text-black-50">First Name</label>
                        <input type="text" class="form-control bg-light border border-dark" id="firstName" name="first_name" value="<?= isset($_SESSION['firstname']) ? $_SESSION['firstname'] : "" ?>" required>
                      </div>
                      <div class="col-12 mb-3 mb-md-0">
                        <label for="middleName" class="form-label text-black-50">Middle Name</label>
                        <input type="text" class="form-control bg-light border border-dark" id="middleName" name="middle_name" value="<?= isset($_SESSION['middlename']) ? $_SESSION['middlename'] : "" ?>">
                      </div>
                      <div class="col-12">
                        <label for="lastName" class="form-label text-black-50">Last Name</label>
                        <input type="text" class="form-control bg-light border border-dark" id="lastName" name="last_name" value="<?= isset($_SESSION['lastname']) ? $_SESSION['lastname'] : "" ?>" required>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ---2nd ROW--- -->
                <div class="row mb-3">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="campus" class="form-label text-black-50">Campus</label>
                    <!-- WALA TO SA DATABASE -->
                    <select class="form-select bg-light border border-dark" id="campus" name="campus" required>
                      <option value="chooseCampus" <?= (isset($_SESSION['campus']) && $_SESSION['campus'] == "campus") ? 'selected' : '' ?>>choose Campus</option>
                      <option value="wmsuMainCampus" <?= (isset($_SESSION['campus']) && $_SESSION['campus'] == "wmsuMainCampus") ? 'selected' : '' ?>>WMSU main campus</option>
                      <option value="testCampus" <?= (isset($_SESSION['campus']) && $_SESSION['campus'] == "testCampus") ? 'selected' : '' ?>>test campus</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="schoolID" class="form-label text-black-50">School ID</label>
                    <input type="text" class="form-control bg-light border border-dark" id="schoolID" name="school_id" required>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="gender" class="form-label text-black-50">Gender</label>
                    <select class="form-select bg-light border border-dark" id="gender" name="gender" required>
                      <option value="Male" <?= (isset($_SESSION['gender']) && $_SESSION['gender'] == "Male") ? 'selected' : '' ?>>Male</option>
                      <option value="Female" <?= (isset($_SESSION['gender']) && $_SESSION['gender'] == "Female") ? 'selected' : '' ?>>Female</option>
                      <option value="Other" <?= (isset($_SESSION['gender']) && $_SESSION['gender'] == "Other") ? 'selected' : '' ?>>Other</option>
                    </select>
                  </div>
                </div>

                <!-- ---3rd ROW--- -->
                <div class="row mb-3">
                  <div class="col-md-7 mb-3 mb-md-0">
                    <label for="email" class="form-label text-black-50">Email</label>
                    <input type="email" class="form-control bg-light border border-dark" id="email" name="email" placeholder="example@wmsu.edu.ph" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>" required readonly>
                  </div>
                  <div class="col-md-5 mb-3 mb-md-0">
                    <label for="phoneNo" class="form-label text-black-50">Phone No.</label>
                    <input type="text" class="form-control bg-light border border-dark" id="phoneNo" name="Phone_No" value="<?= isset($_SESSION['contact']) ? $_SESSION['contact'] : "" ?>" pattern="\+63 \d{3} \d{3} \d{4}" required />
                  </div>
                </div>

                <!-- ---4th ROW--- -->
                <div class="row mb-3">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="birthdate" class="form-label text-black-50">Birthdate</label>
                    <input type="date" class="form-control bg-light border border-dark" id="birthdate" name="birthdate" value="<?= $birthdate ?>" required>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <label for="height" class="form-label text-black-50">Height <span class="text-small">(cm)</span></label>
                    <div class="input-group">
                      <input type="number" class="form-control bg-light border border-dark" id="height" name="height" placeholder="Enter height" required />
                      <span class="input-group-text bg-light border border-dark">cm</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="weight" class="form-label text-black-50">Weight <span class="text-small">(kg)</span></label>
                    <div class="input-group">
                      <input type="number" class="form-control bg-light border border-dark" id="weight" name="weight" placeholder="Enter weight" required />
                      <span class="input-group-text bg-light border border-dark">kg</span>
                    </div>
                  </div>
                </div>
                <!-- ---4th ROW--- -->
                <div class="row mb-3">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="address" class="form-label text-black-50">Address</label>
                    <input type="text" class="form-control bg-light border border-dark" id="address" name="address" value="<?= isset($_SESSION['address']) ? $_SESSION['address'] : "" ?>">
                  </div>
                </div>

                <div class="text-end">
                  <input type="submit" class="btn btn-primary text-light" name="save" value="Save Changes">
                </div>
              </form>
            </div>
          </div>

          <div class="card bg-body-tertiary mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class='bx bxs-key text-primary display-6 me-2'></i>
                <h4 class="mb-0">Password</h4>
              </div>
              <hr class="my-2" style="height: 2.5px;">
              <form action="#.php" method="post">
                <div class="row mb-3">
                  <div class="col-md-8 mb-3 mb-md-0">
                    <label for="oldPassword" class="form-label text-black-50">Old Password</label>
                    <input type="password" class="form-control bg-light border border-dark" id="oldPassword" name="old_password" required>
                  </div>
                  <div class="col-md-8 mb-3 mb-md-0">
                    <label for="newPassword" class="form-label text-black-50">New Password</label>
                    <input type="password" class="form-control bg-light border border-dark" id="newPassword" name="new_password">
                  </div>
                  <div class="col-md-8">
                    <label for="confirmNewPassword" class="form-label text-black-50">Confirm New Password</label>
                    <input type="password" class="form-control bg-light border border-dark" id="confirmNewPassword" name="confirm_new_password" required>
                  </div>
                </div>

                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="togglePassword">
                  <label for="togglePassword" class="form-check-label" id="togglePasswordLabel">Show Password</label>
                </div>

                <div class="text-end">
                  <input type="submit" id="saveAccount" class="btn btn-primary text-light" name="saveAccount" value="Save Changes">
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../js/user/profie_settings.js"></script>

  <?php
  require_once('../includes/footer.php');
  ?>

</body>

</html>