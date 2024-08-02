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
          <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    const xValues = [50,60,70,80,90,100,110,120,130,140,150];
    const yValues = [7,8,8,9,9,7,10,11,14,14,15];

    new Chart("myChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });
  </script>

</body>
</html>