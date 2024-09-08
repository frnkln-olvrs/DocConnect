<html lang="en">
<?php
  $title = 'Campuses | Add Doctor';
  include './includes/admin_head.php';
  function getCurrentPage() {
    return basename($_SERVER['PHP_SELF']);
  }
?>
<body>
  <?php
    require_once ('./includes/admin_header.php');
  ?>
  <?php
    require_once ('./includes/admin_sidepanel.php');
  ?>

  <section id="add_campus" class="page-container">
    <div class="row">

      <div class="col-2"></div>

      <div class="col-12 col-md-8">
        <form>
          <div class="border shadow p-3 mb-5 bg-body rounded">
            <h3 class="text-center">Add Doctor</h3>
            
            <hr class="my-3 mx-4">

            <div class="row row-cols-1 row-cols-md-3">
              <div class="col form-group mb-2">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" placeholder="first name">
              </div>
              <div class="col form-group mb-2">
                <label for="mname">Middle Name</label>
                <input type="text" class="form-control" id="mname" placeholder="middle name">
              </div>
              <div class="col form-group mb-2">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" placeholder="last name">
              </div>
            </div>

            <div class="form-group mb-2">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>

            <div class="form-group mb-2">
              <label for="contact">Phone No.</label>
              <input type="text" class="form-control" id="contact" placeholder="+63 9xx xxx xxxx">
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
                <label for="DoB">Date of Birth</label>
                <input type="date" class="form-control" id="DoB" placeholder="MM/DD/YYYY">
              </div>
            </div>

            <div class="form-group mb-2">
              <label for="specialty">Specialties</label>
              <select class="form-select" aria-label="Default select example">
                
                <option selected>Open this select menu</option>
                <option value="1">Family Medicine</option>
              </select>
            </div>

            <div class="form-group mb-2">
              <label for="work-hours">Workin Hours</label>
              <div class="d-flex align-items-center">
                <input type="time" class="form-control" id="work-hours" placeholder="">
                <p class="m-0 mx-3"> to </p>
                <input type="time" class="form-control" id="work-hours" placeholder="">
              </div>
            </div>
            
            

            <!-- Save and Cancel Buttons -->
            <div class="d-flex justify-content-end mt-3">
              <a href="./doctorsAcc" class="btn btn-secondary me-2 link-light">Cancel</a>
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
