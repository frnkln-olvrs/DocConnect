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
    <div class="row row-cols-1 row-cols-md-2">
      <div class="col">
        <nav>
          <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link  active" id="nav-campus-tab" data-bs-toggle="tab" data-bs-target="#nav-campus" type="button" role="tab" aria-controls="nav-campus" aria-selected="true">Campus</button>
            <button class="nav-link" id="nav-type-tab" data-bs-toggle="tab" data-bs-target="#nav-type" type="button" role="tab" aria-controls="nav-type" aria-selected="false">Type</button>
          </div>
        </nav>
        <div class="tab-content p-3 border bg-white" id="nav-tabContent">
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

      <div class="col">
        <canvas id="doughnutChart" class="chart" role="img"></canvas>
      </div>
    </div>
  </section>

  <script src="./js/analytics-lineChart.js"></script>
  <script>
    const doughnutData = {
      labels: ['Red', 'Blue', 'Yellow'],
      datasets: [{
        label: 'My First Dataset',
        data: [300, 50, 100],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
      }]
    };
  
    const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
    const doughnutChart = new Chart(doughnutCtx, {
      type: 'doughnut',
      data: doughnutData,
      options: {
        legend: {
          display: true
        },
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>


</body>
</html>