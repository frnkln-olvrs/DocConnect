<html lang="en">
<?php 
  $title = 'Admin | Notification';
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

  <section id="notification">
    
    <div class="d-flex justify-content-center w-100">
      <div class="w-75 shadow-lg p-3">
        asd
      </div>
    </div>
    
  </section>

  <script src="./js/analytics-lineChart.js"></script>
  <script src="./js/analytics-donutChart.js"></script>

</body>
</html>