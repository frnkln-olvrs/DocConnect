<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'Appointment';
	include '../includes/head.php';
?>
<body class="pt-5">
  <?php 
    require_once ('../includes/header.php');
  ?>

  <section id="info" class="padding-medium mt-5 mx-5">
    <div class="row mb-3">
      <div class="col-sm-12 col-md-8">
        <div class="border border-dark-subtle shadow-sm rounded-2 p-3">
          <p class="fs-5">Select Date - <span class="text-muted fs-6">April 2024</span></p>
          <div class="row row-cols-3 row-cols-md-6">

            <div class="col mb-3">
              <label>
                <input class="radio-input shadow-none" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around me-2">
                  <span class="radio-label">WED</span>
                  <span class="radio-label">10</span>
                </div>
              </label>
            </div>
            <div class="col mb-3">
              <label>
                <input class="radio-input" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around me-2">
                  <span class="radio-label">THU</span>
                  <span class="radio-label">11</span>
                </div>
              </label>
            </div>
            <div class="col mb-3">
              <label>
                <input class="radio-input" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around me-2">
                  <span class="radio-label">FRI</span>
                  <span class="radio-label">12</span>
                </div>
              </label>
            </div>
            <div class="col mb-3">
              <label>
                <input class="radio-input" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around me-2">
                  <span class="radio-label">SAT</span>
                  <span class="radio-label">13</span>
                </div>
              </label>
            </div>
            <div class="col mb-3">
              <label>
                <input class="radio-input" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around me-2">
                  <span class="radio-label">SUN</span>
                  <span class="radio-label">14</span>
                </div>
              </label>
            </div>
            <div class="col mb-3">
              <label>
                <input class="radio-input" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around me-2">
                  <span class="radio-label">MON</span>
                  <span class="radio-label">15</span>
                </div>
              </label>
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