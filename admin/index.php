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
        <div class="col">
          Total Users
        </div>
        <div class="col">
          Total Active Users
        </div>
        <div class="col">
          Total Patients
        </div>
      </div>
    </div>
  </section>

</body>
</html>