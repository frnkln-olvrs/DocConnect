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
      <div class="d-flex justify-content-center w-100 h-50">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.61518569353!2d122.05236037770997!3d6.913594200000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x325041dd7a24816f%3A0x51af215fb64cc81a!2sWestern%20Mindanao%20State%20University!5e0!3m2!1sen!2sph!4v1723525384757!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

</body>
</html>