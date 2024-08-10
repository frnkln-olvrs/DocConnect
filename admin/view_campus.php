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

    <div class="campus_name text-center my-2">
      <h2>Campus A</h2>
    </div>

    <i class='bx bx-map'></i> <!-- Address Icon -->
<i class='bx bx-phone'></i> <!-- Contact Number Icon -->
<i class='bx bx-envelope'></i> <!-- Email Icon -->
<i class='bx bx-map-alt'></i> <!-- Campus Map Icon -->
<i class='bx bx-building'></i> <!-- Facilities Icon -->
<i class='bx bx-book-content'></i> <!-- Programs Offered Icon -->

  </section>

</body>
</html>