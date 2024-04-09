<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'Appointment';
	include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>

<section id="info" class="padding-medium mt-xl-5 mx-5">
    <div class="p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Telemedicine</h1>
      <p class="fs-5 text-muted">Bridging the gap between distance and healthcare accessibility.</p>
    </div>

    <div class="row mb-3">
      <div class="col-sm-12 col-md-8">
        <div class="row row-cols-1">
          <div class="col mb-4">
            <div class="border border-success shadow-sm rounded-2 p-3">
              <div class="row">
                <div class="col-4 d-flex align-items-sm-start align-items-center justify-content-center">
                  <i class='bx bx-plus-medical p-3 bg-green text-white rounded-1 fs-3'></i>
                </div>
                <div class="col-8">
                  <h3 class="fw-normal">Doctor on Call</h3>
                  <p class="fs-6 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-4 mb-4">
        <div class="d-flex flex-column justify-content-between bg-primary p-3 rounded-2 h-100 text-white">
          <div>
            <h4>Opening Hours</h4>
            <p class="fs-6 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?</p>
            <div class="d-flex justify-content-between border-bottom mb-2">
              <p class="mb-2">Mon - Fri</p>
              <p class="mb-2">7:00am - 6:00pm</p>
            </div>
            <div class="d-flex justify-content-between border-bottom mb-2">
              <p class="mb-2">Sat - Sun</p>
              <p class="mb-2">7:00am - 4:00pm</p>
            </div>
          </div>
          <div>
            <div>
              <button type="button" class="w-100 btn btn-lg btn-outline-light mt-2">Book Appointment</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>