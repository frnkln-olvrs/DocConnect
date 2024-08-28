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

  <section id="add_campus" class="page-container">
    <div class="row">

      <div class="col-2"></div>

      <div class="col-12 col-lg-8">
        <form>
          <div class="border shadow p-4 mb-5 bg-body rounded">
            <h5 class="text-center">Status: <span class="text-success"> Completed</span></h5>

            <hr class="mx-3 my-4">

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
              <div class="col d-flex ">
                <strong class="me-2">Code:</strong>
                <p>001</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Type:</strong>
                <p>Face to face</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Date:</strong>
                <p>Monday, 9:00am - 10:00pm</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Campus:</strong>
                <p>Campus B</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Address:</strong>
                <p>Zambnonaga City</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Patient:</strong>
                <p>Allen Barry</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Email:</strong>
                <p>username123@email.com</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">phone:</strong>
                <p>+63 9xx xxx xxxx</p>
              </div>
            </div>

            

          </div>
        </form>

      </div>

      <div class="col-2"></div>

    </div>

    
  </section>

</body>
</html>
