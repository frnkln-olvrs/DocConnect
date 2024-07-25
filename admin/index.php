<html lang="en">
<?php 
  $title = 'Admin | Dashboard';
	include './includes/admin_head.php';
?>
<body>
  <?php 
    require_once ('./includes/admin_header.php');
  ?>
  <?php 
    require_once ('./includes/admin_sidepanel.php');
  ?>

  <section id="dashboard">
    <h1 class="text-center my-3">Overview</h1>

    <div class="container">
  <div class="row">
    <div class="col bg-primary mx-2 p-3 text-white rounded-3">
      <div class="row g-3">
        <div class="col-6  d-flex align-items-end justify-content-start">
          <i class='bx bx-user'></i>
        </div>
        <div class="col-6 text-end">
          <p class="fs-1 m-0">1,100</p>
          <p>Total Users</p>
        </div>
      </div>
    </div>

    <div class="col bg-primary mx-2 p-3 text-white rounded-3">
      <div class="row g-3">
        <div class="col-6 d-flex align-items-end justify-content-start">
          <i class='bx bx-user-check'></i>
        </div>
        <div class="col-6 text-end">
          <p class="fs-1 m-0">35</p>
          <p>Total Active Users</p>
        </div>
      </div>
    </div>

    <div class="col bg-primary mx-2 p-3 text-white rounded-3">
      <div class="row g-3">
        <div class="col-6  d-flex align-items-end justify-content-start">
          <i class='bx bx-user-plus'></i>
        </div>
        <div class="col-6 text-end">
          <p class="fs-1 m-0">659</p>
          <p>Total Patients</p>
        </div>
      </div>
    </div>
  </div>
</div>
  </section>

</body>
</html>