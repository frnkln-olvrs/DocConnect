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

  <section id="analytics" class="page-container">

    <div class="row justify-content-center">
      <!-- First Column -->
      <div class="col-12 col-lg-6 d-flex flex-column justify-content-center py-2 px-0 border border-danger-subtle shadow-lg rounded-1 me-lg-3 mb-lg-0 mb-3">
        <h4 class="mx-3">Total Email Senders</h4>
        <hr class="mx-4 mb-3">
        <nav>
          <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-campus-tab" data-bs-toggle="tab" data-bs-target="#nav-campus" type="button" role="tab" aria-controls="nav-campus" aria-selected="true">Campus</button>
            <button class="nav-link" id="nav-type-tab" data-bs-toggle="tab" data-bs-target="#nav-type" type="button" role="tab" aria-controls="nav-type" aria-selected="false">Type</button>
          </div>
        </nav>
        <div class="tab-content p-3 mx-2 border bg-white" id="nav-tabContent">
          <select id="yearSelect" class="form-select form-select-sm w-25" aria-label=".form-select-sm example">
            <option value="1">2021-2022</option>
            <option value="2">2022-2023</option>
            <option value="3">2023-2024</option>
          </select>

          <div class="tab-pane fade active show" id="nav-campus" role="tabpanel" aria-labelledby="nav-campus-tab">
            <canvas id="campusChart" class="chart" role="img"></canvas>
          </div>
          <div class="tab-pane fade" id="nav-type" role="tabpanel" aria-labelledby="nav-type-tab">
            <canvas id="typeChart" class="chart" role="img"></canvas>
          </div>
        </div>
      </div>

      <!-- Second Column -->
      <div class="col-12 col-lg-5 d-flex flex-column justify-content-start p-3 border border-danger-subtle shadow-lg rounded-1 ms-lg-3">
        <h4>Total Email Senders</h4>
        <hr class="mx-2">
        <div class="d-flex justify-content-center align-items-center flex-grow-1">
          <canvas id="doughnutChart" class="chart" role="img" style="max-height: 451px;"></canvas>
        </div>
      </div>
    </div>

    
  </section>

  <script src="./js/analytics-lineChart.js"></script>
  <script src="./js/analytics-donutChart.js"></script>

</body>
</html>