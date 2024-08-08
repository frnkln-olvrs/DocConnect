<html lang="en">
<?php 
  $title = 'Admin | Campuses';
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

  <section id="campus">
    <h1 class="text-center my-3">Campuses</h1>

    <div class="row row-cols-1 row-cols-md-4">
      <div class="col p-0 mb-3">
        <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <i class='bx bx-plus-medical p-3 mb-3 border-green text-green rounded-circle shadow-sm fs-3'></i>
              <h4 class="card-title pricing-card-title">Enhanced Patient Engagement and Satisfaction</h4>
              <p class="fs-6 text-muted">Empower patients to participate in their healthcare journey through telecommunication health services.</p>
            </div>  
          </div>
        </div>
      </div>
      <div class="col p-0 mb-3">
        <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <i class='bx bxs-capsule p-3 mb-3 border border-2 border-primary text-primary rounded-circle shadow-sm fs-3'></i>
              <h4 class="card-title pricing-card-title">Remote Consultations</h4>
              <p class="fs-6 text-muted">Access healthcare professionals from anywhere, eliminating the need for in-person visits.</p>
            </div>  
          </div>
        </div>
      </div>
      <div class="col p-0 mb-3">
        <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <i class='bx bx-plus-medical p-3 mb-3 border-green text-green rounded-circle shadow-sm fs-3'></i>
              <h4 class="card-title pricing-card-title">Specialized Telehealth Services</h4>
              <p class="fs-6 text-muted">Collaborative care coordination between your primary care provider and specialists for comprehensive treatment plans.</p>
            </div>  
          </div>
        </div>
      </div>
      <div class="col p-0 mb-3">
        <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <i class='bx bx-plus-medical p-3 mb-3 border border-2 border-primary text-primary rounded-circle shadow-sm fs-3'></i>
              <h4 class="card-title pricing-card-title">Scalable Telehealth Solutions for Healthcare Providers</h4>
              <p class="fs-6 text-muted">Customizable telehealth platforms tailored to the needs of individual healthcare practices.</p>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>