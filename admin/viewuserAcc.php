<html lang="en">
<?php
  $title = 'Campuses | View User';
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
            <div class="d-flex align-items-center">
              <button class="btn p-0 me-auto" onclick="event.preventDefault(); window.history.back();">
                <i class='bx bx-chevron-left-circle fs-3 link'></i>
              </button>
              <h4 class="text-center w-100 mb-0">Franklin Ituralde Oliveros</h4></span></h5>
            </div>

            <hr class="mx-3 my-4">

            <div class="row row-cols-1 row-cols-lg-2">
              <div class="col d-flex ">
                <strong class="me-2">Account-ID:</strong>
                <p>0000-001</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Email:</strong>
                <p>frnki@email.com</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">phone:</strong>
                <p>+63 9xx xxx xxxx</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Date of Birth:</strong>
                <p>02/29/2004</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Registration Date:</strong>
                <p>08/04/2024</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Departmnt:</strong>
                <p>CCS</p>
              </div>

              <div class="col d-flex ">
                <strong class="me-2">Number of Appointment(s):</strong>
                <p>01</p>
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
