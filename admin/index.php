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
          <!-- Chart 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 col-xl-8">
        <div class="card widget-card border-light shadow-sm">
          <div class="card-body p-4">
            <div class="d-block d-sm-flex align-items-center justify-content-between mb-3">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title widget-card-title">Sales Overview</h5>
              </div>
              <div>
                <select class="form-select text-secondary border-light-subtle">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>
                </select>
              </div>
            </div>
            <div id="bsb-chart-1"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    
  </script>

</body>
</html>