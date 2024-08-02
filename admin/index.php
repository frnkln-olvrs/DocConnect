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
      <div class="row mx-5 mb-4">
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

    <div class="container">
      <div class="row mx-2">
        <div class="col-4">
          <div class="border border-2 border-dark-subtle shadow-sm p-3 h-100">
            akjshdkajsd
          </div>
        </div>
        
        <div class="col-md-8">
          
          <nav>
		      	<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
		      		<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Campus</button>
		      		<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Type</button>
		      	</div>
		      </nav>
		      <div class="tab-content p-3 border bg-light" id="nav-tabContent">
		      	<div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <canvas id="campusChart" style="width:100%;max-width:700px"></canvas>
		      	</div>
		      	<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <canvas id="typeChart" style="width:100%;max-width:700px"></canvas>
		      	</div>
		      </div>
        </div>
      </div>
    </div>
  </section>
		
  <script src="./js/index-lineChart.js"></script>

</body>
</html>