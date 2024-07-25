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
    <h1 class="text-center my-2">Overview</h1>

    <div class="container">
      <div class="row">
        <div class="col bg-primary mx-2 p-3 text-white">
          <div class="row g-3">
            <div class="col-3">
              <i class='bx bx-user'></i>
            </div>
            <div class="col-9">
              <p class="">1,100</p>
              <p class="">Total Users</p>
            </div>
          </div>
        </div>

        <div class="col bg-primary mx-2 p-3 text-white">
          <div class="row g-3">
            <div class="col-3">
              <i class='bx bx-user-check'></i>
            </div>
            <div class="col-9">
              <p class="">35</p>
              <p class="">Total Active Users</p>
            </div>
          </div>
        </div>

        <div class="col bg-primary mx-2 p-3 text-white">
          <div class="row g-3">
            <div class="col-3">
              <i class='bx bx-user-plus'></i>
            </div>
            <div class="col-9">
              <p class="">659</p>
              <p class="">Total Patients</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>