<?php
session_start();

if (isset($_SESSION['verification_status']) && $_SESSION['verification_status'] != 'Verified') {
  header('location: ../user/verification.php');
} else if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 0) {
  header('location: ../index.php');
}


?>

<html lang="en">
<?php
$title = 'Campuses | Add Staff';
include './includes/admin_head.php';
function getCurrentPage()
{
  return basename($_SERVER['PHP_SELF']);
}
?>

<body>
  <?php
  require_once('./includes/admin_header.php');
  ?>
  <?php
  require_once('./includes/admin_sidepanel.php');
  ?>

  <section id="add_campus" class="page-container">
    <div class="row">

      <div class="col-2"></div>

      <div class="col-12 col-md-8">
        <form>
          <div class="border shadow p-3 mb-5 bg-body rounded">
            <h3 class="text-center">Add Moderator</h3>

            <hr class="my-3 mx-4">

            <div class="row row-cols-1 row-cols-md-3">
              <div class="col form-group mb-2">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="first name" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
                <?php
                if (isset($_POST['firstname']) && !validate_field($_POST['firstname'])) {
                ?>
                  <p class="text-dark m-0 ps-2">First name is required.</p>
                <?php
                }
                ?>
              </div>
              <div class="col form-group mb-2">
                <label for="mname">Middle Name</label>
                <input type="text" class="form-control" id="middlename" name="middlename" placeholder="middle name" value="<?= isset($_POST['middlename']) ? $_POST['middlename'] : '' ?>">
              </div>
              <div class="col form-group mb-2">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="last name" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                <?php
                if (isset($_POST['lastname']) && !validate_field($_POST['lastname'])) {
                ?>
                  <p class="text-dark m-0 ps-2">Last name is required.</p>
                <?php
                }
                ?>
              </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2">
              <div class="form-group mb-2">
                <label for="gender">Gender</label>
                <select class="form-select" aria-label="gender">
                  <option selected>Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div class="form-group mb-2">
                <label for="position">Campus</label>
                <select class="form-select" aria-label="Default select example">

                  <option selected>Open this select menu</option>
                  <option value="1">Encoder</option>
                  <option value="2">some</option>
                  <option value="3">thing</option>
                </select>
              </div>
            </div>

            <div class="form-group mb-2">
              <label for="contact">Phone No.</label>
              <input type="text" class="form-control" id="contact" placeholder="+63 9xx xxx xxxx">
            </div>

            <div class="form-group mb-2">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>

            <div class="form-group mb-2">
              <label for="status">Status</label>
              <div class="d-flex flex-row justify-content-start">
                <div class="form-check mx-2">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Active
                  </label>
                </div>
                <div class="form-check mx-2">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Inactive
                  </label>
                </div>
              </div>
            </div>

            <!-- Save and Cancel Buttons -->
            <div class="d-flex justify-content-end mt-3">
              <a href="./moderatorsAcc" class="btn btn-secondary me-2 link-light">Cancel</a>
              <button type="submit" class="btn btn-primary link-light">Add</button>
            </div>
          </div>
        </form>

      </div>

      <div class="col-2"></div>

    </div>


  </section>

</body>

</html>