<html lang="en">
<?php 
  $title = 'Admin | Analytics';
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

  <section id="analytics">
    <div class="col-md-8">
      <nav>
	    	<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
	    		<button class="nav-link  active" id="nav-campus-tab" data-bs-toggle="tab" data-bs-target="#nav-campus" type="button" role="tab" aria-controls="nav-campus" aria-selected="true">Campus</button>
	    		<button class="nav-link" id="nav-type-tab" data-bs-toggle="tab" data-bs-target="#nav-type" type="button" role="tab" aria-controls="nav-type" aria-selected="false">Type</button>
	    	</div>
	    </nav>
	    <div class="tab-content p-3 border bg-white" id="nav-tabContent">
	    	<div class="tab-pane fade active show" id="nav-campus" role="tabpanel" aria-labelledby="nav-campus-tab">
          <canvas id="campusChart" style="width:100%;max-width:700px"></canvas>
	    	</div>
	    	<div class="tab-pane fade" id="nav-type" role="tabpanel" aria-labelledby="nav-type-tab">
          <canvas id="typeChart" style="width:100%;max-width:700px"></canvas>
	    	</div>
	    </div>
    </div>
  </section>

  <script src="./js/analytics-lineChart.js"></script> 
</body>
</html>Appointment