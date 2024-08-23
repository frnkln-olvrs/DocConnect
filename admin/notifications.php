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
      <div class="w-75 shadow-lg p-3 rounded-2 ">
        
        <li class="header mx-3 d-flex align-items-center justify-content-between">
          <h4>Notification</h4>
          <div class="dropdown">
            <button class="btn btn-link btn-light p-0" type="button" id="mark-all" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bx bx-dots-horizontal-rounded fs-3 link-dark"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="mark-all">
              <li><a class="dropdown-item" href="#">Mark all as read</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </li>

        <div class="list-group rounded-0">
          <a href="#" class="list-group-item list-group-item-action border-0">The current link item</a>
          <a href="#" class="list-group-item list-group-item-action border-0">A second link item</a>
          <a href="#" class="list-group-item list-group-item-action border-0">A third link item</a>
          <a href="#" class="list-group-item list-group-item-action border-0">A fourth link item</a>
          <a href="#" class="list-group-item list-group-item-action border-0" tabindex="-1" aria-disabled="true">A disabled link item</a>
        </div>
      </div>
    </div>
    
  </section>

  <script src="./js/analytics-lineChart.js"></script>
  <script src="./js/analytics-donutChart.js"></script>

</body>
</html>