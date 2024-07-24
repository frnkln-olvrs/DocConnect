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
        <div class="col bg-primary mx-2">
          <div>
            <i class='bx bx-user'></i>
            <p class="">1,100</p>
            <p class="">Total Users</p>
          </div>
        </div>

        <div class="col bg-primary mx-2">
          <i class='bx bx-user-check'></i>
          <p class="">35</p>
          Total Active Users
        </div>

        <div class="col bg-primary mx-2">
          <i class='bx bx-user-plus'></i>
          <p class="">659</p>
          Total Patients
        </div>
      </div>
    </div>
  </section>

</body>
</html>