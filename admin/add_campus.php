<html lang="en">
<?php
  $title = 'Campuses | Campus A';
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

  <section id="add_campus" class="">
    <div class="row">

      <div class="col-2"></div>

      <div class="col-8">
        <form>
          <div class="border shadow p-3 mb-5 bg-body rounded">
            <div class="user">
              <div class="profile-pic">
                <label class="label brand-border-color d-flex flex-column" for="file" style="border-width: 4px !important;">
                  <i class="bx bxs-camera-plus"></i>
                  <span>Change Image</span>
                </label>
                <img src="../assets/images/bg-1.png" id="output" class="img-fluid">
                <input id="file" type="file" name="profile" accept="image/png, image/jpeg" onchange="validateFile(event)">
              </div>
              <div class="d-flex justify-content-center align-items-center mb-2">
                <button type="submit" name="saveimage" class="btn brand-bg-color">Save Image</button>
              </div>
            </div>
            <div class="form-group mb-2">
              <label for="name">School Name</label>
              <input type="text" class="form-control" id="name" placeholder="campus name">
            </div>
            <div class="form-group mb-2">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="address">
            </div>
            <div class="form-group mb-2">
              <label for="contact">School Phone</label>
              <input type="text" class="form-control" id="contact" placeholder="+63 9xx xxx xxxx">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
          </div>
        </form>
      </div>

      <div class="col-2"></div>

    </div>

    
  </section>

</body>
</html>
