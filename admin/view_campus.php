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

  <section id="campus">
    <h1 class="text-center my-3">Campuses</h1>

    <div class="d-flex justify-content-center w-100 h-50">
      <img src="../assets/images/bg-1.png" alt="" class="w-75 rounded-2">
    </div>

    <div class="campus_name text-center mt-2 mb-3">
      <h2>Campus A</h2>
    </div>

    <div class="row row-cols-1 row-cols-md-2 mx-1 mx-md-5 justify-content-center">
      <div class="col d-flex flex-column align-items-center justify-content-center border-bottom border-2">
        <i class='bx bx-map fs-3 text-danger'></i> <!-- Address Icon -->
        <p class="fs-5 mb-2">Location</p>
      </div>
      <div class="col d-flex flex-column align-items-center justify-content-center border-bottom border-2">
        <i class='bx bx-phone fs-3 text-danger'></i> <!-- Contact Number Icon -->
        <p class="fs-5 mb-2">+63 9xx xxx xxxx</p>
      </div>
      <div class="col d-flex flex-column align-items-center justify-content-center border-bottom border-2">
        <i class='bx bx-envelope fs-3 text-danger'></i> <!-- Email Icon -->
        <p class="fs-5 mb-2">example@email.com</p>
      </div>
      <!-- <div class="col">
        -- Facilities Icon --
        <i class='bx bx-building'></i>
      </div>
      <div class="col">
        -- Programs Offered Icon --
        <i class='bx bx-book-content'></i>
      </div> -->
    </div>
    <div class="col d-flex flex-column align-items-center justify-content-center border-bottom border-2">
      <i class='bx bx-map-alt fs-3 text-danger'></i> <!-- Campus Map Icon -->
    </div>
  </section>

</body>
</html>