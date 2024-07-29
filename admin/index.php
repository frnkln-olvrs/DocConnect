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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Multiple Line Series</h3>
            </div>
            <div id="chart2" class="panel-body">
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    jQuery(function ($) {
        var data1 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];
        var data2 = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7];
        var data3 = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];
            
        $(function () {            
            $("#chart1").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                axisY: {
                    title: {
                        text: "Break-Down for selected quarter"
                    }
                },               
                dataSeries: [{
                    seriesType: "line",                    
                    data: data1
                }]
            });

            $("#chart2").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                axisY: {
                    title: {
                        text: "Break-Down for selected quarter"
                    }
                },               
                dataSeries: [{
                    seriesType: "line",
                    data: data2
                }, {
                    seriesType: "line",
                    data: data3
                }]
            });

       
        });
      
    });
</script>

</body>
</html>