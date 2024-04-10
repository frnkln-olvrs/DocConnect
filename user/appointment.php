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
          <div>
            <p class="fs-5">Select Date - <span class="text-muted fs-6">April 2024</span></p>
            <div class="d-flex flex-row flex-wrap justify-content-evenly justify-content-md-start">
  
              <label>
                <input class="radio-input shadow-none" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label fw-bold">WED</span>
                  <span class="radio-label">10</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label fw-bold">THU</span>
                  <span class="radio-label">11</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label fw-bold">FRI</span>
                  <span class="radio-label">12</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label fw-bold">SAT</span>
                  <span class="radio-label">13</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label fw-bold">SUN</span>
                  <span class="radio-label">14</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label fw-bold">MON</span>
                  <span class="radio-label">15</span>
                </div>
              </label>
  
            </div>
          </div>

          <hr>

          <div>
            <p class="fs-5">Select Time</p>
            <div class="d-flex flex-row flex-wrap justify-content-evenly justify-content-md-start">
  
              <label>
                <input class="radio-input shadow-none" type="radio" name="time">
                <div class="radio-tile time p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label">07-08 AM</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="time">
                <div class="radio-tile time p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label">08-09 AM</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="time">
                <div class="radio-tile time p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label">09-10 AM</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="time">
                <div class="radio-tile time p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label">10-11 AM</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="time">
                <div class="radio-tile time p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label">01-02 PM</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="time">
                <div class="radio-tile time p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label">02-03 PM</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="time">
                <div class="radio-tile time p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label">03-04 PM</span>
                </div>
              </label>
              <label>
                <input class="radio-input shadow-none" type="radio" name="time">
                <div class="radio-tile time p-2 d-flex justify-content-around mb-2 me-md-3 me-2">
                  <span class="radio-label">04-05 PM</span>
                </div>
              </label>
  
            </div>
          </div>

          <hr>

          <div>
            <div class="row">
              <div class="col-12 col-md-1 d-flex align-items-start justify-content-center p-0">
                <i class='bx bx-phone xx-large-font text-green pt-md-2 ps-md-2'></i>
              </div>
              <div class="col-12 col-md-11">
                <p class="fs-5 mb-0 xx">Mobile Number</p>
                <p class="fs-6 fw-light text-muted">Enter the number on which you wish to recieve checkup related information</p>
                <div class="d-flex flex-row flex-wrap justify-content-evenly justify-content-md-start me-md-5 pe-md-5">
      
                  <input type="number" class="form-control border border-dark" placeholder="09" aria-label="mobile_no" aria-describedby="mobile_no">
      
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