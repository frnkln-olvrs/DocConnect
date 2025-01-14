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

  <section id="appointment" class="page-container padding-medium p-3">
    <div class="row mb-3">
      <div class="col-sm-12 col-md-8">
        <div class="border border-dark-subtle shadow-sm rounded-2 p-3 mb-4 mb-md-0">

          <div>
            <div class="row">
              <div class="col-12 col-md-1 d-flex align-items-start justify-content-center p-0">
                <i class='bx bx-shield-plus xx-large-font text-green pt-md-2 ps-md-2'></i>
              </div>
              <div class="col-12 col-md-11">
                <p class="fs-5 mb-2">Select Doctor *</p>
                <div class="d-flex flex-row flex-wrap justify-content-evenly justify-content-md-start me-md-5 pe-md-5">
      
                  <select class="form-select fw-light " aria-label="Default select example">
                    <option selected>Select doctor specialty</option>
                    <option value="1">Pediatrician</option>
                    <option value="2">Family Medicine</option>
                    <option value="3">Internal Medicine</option>
                  </select>
                </div>

                <ul class="pt-3 ps-0 w-75">
                  <li class="d-flex justify-content-between border-bottom border-dark mb-2">
                    <b>Dr. Emily Parker</b>
                    <p>Wed-Fri / Apr. 10-12</p>
                  </li>
                  <li class="d-flex justify-content-between">
                    <b>Dr. Sarah Johnson</b>
                    <p>Thu-Sat / Apr. 11-13</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <hr>

          <div>
            <p class="fs-5">Select Date - <span class="text-muted fs-6">April 2024</span></p>
            <div class="d-flex flex-row flex-wrap justify-content-between justify-content-md-start">
  
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
              
              <label>
                <input class="radio-input shadow-none" type="radio" name="date">
                <div class="radio-tile p-2 d-flex justify-content-around mb-2 me-md-3 me-2 w-100">
                  <div class="d-flex flex-column">
                    <span class="radio-label align-self-start fw-bold">Other date:</span>
                    <input type="date" name="extra_date" class="fs-6 px-2 py-1 bg-white border border-primary rounded-1 text-black-50 w-100">
                  </div>
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
                <p class="fs-5 mb-0">Mobile Number</p>
                <p class="fs-6 fw-light text-muted">Enter the number on which you wish to recieve checkup related information</p>
                <div class="d-flex flex-row flex-wrap justify-content-evenly justify-content-md-start me-md-5 pe-md-5">
      
                  <input type="number" class="form-control border border-dark" placeholder="+63" aria-label="mobile_no" aria-describedby="mobile_no" value="+63">
      
                </div>
              </div>
            </div>
          </div>

          <hr>

          <div>
            <div class="row">
              <div class="col-12 col-md-1 d-flex align-items-start justify-content-center p-0">
                <i class='bx bx-mail-send xx-large-font text-green pt-md-2 ps-md-2' ></i>
              </div>
              <div class="col-12 col-md-11">
                <p class="fs-5 mb-0">Email Address</p>
                <p class="fs-6 fw-light text-muted">Enter the email address on which you wish to recieve checkup related information</p>
                <div class="d-flex flex-row flex-wrap justify-content-evenly justify-content-md-start me-md-5 pe-md-5">
      
                  <input type="email" class="form-control border border-dark" placeholder="example@email.com" aria-label="mobile_no" aria-describedby="mobile_no">
      
                </div>
              </div>
            </div>
          </div>

          <hr>

          <div class="w-100 d-flex justify-content-end ">
            <button type="button" class="w-50 w-md-25 btn btn-outline-dark  mt-2">Set Appointment</button>
          </div>

        </div>
      </div>

      <div class="col-sm-12 col-md-4 h-100">
        <div class="d-flex flex-column justify-content-between bg-green p-3 rounded-2 h-100 text-white">
          <div>
            <h4>Appointment Details</h4>
            <p class="fs-6 text-white">Details:</p>
            <div class="d-flex justify-content-between border-bottom mb-2">
              <p class="mb-2">Saturday - 13th of April</p>
              <p class="mb-2">09:00am - 10:00am</p>
            </div>
            <div class="d-flex flex-column justify-content-between border-bottom mb-2">
              <p class="mb-2">Gmeet link:</p>
              <a href="https://meet.google.com/por-udiy-etd" class="mb-2 link-light">https://meet.google.com/por-udiy-etd</a>
            </div>
          </div>
          <!-- <div>
            <div>
              <button type="button" class="w-100 btn btn-lg btn-outline-light mt-2">Enter Meeting</button>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>