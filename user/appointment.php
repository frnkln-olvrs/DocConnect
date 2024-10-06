<?php
session_start();

if (isset($_SESSION['verification_status']) && $_SESSION['verification_status'] != 'Verified') {
  header('location: ../user/verification.php');
} else if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 3) {
  header('location: ../index.php');
  exit();
}

require_once('../tools/functions.php');
require_once('../classes/account.class.php');
require_once('../classes/appointment.class.php');

$appointment = new Appointment();
if (isset($_POST['request'])) {
  $appointment->patient_id = $_SESSION['patient_id'];
  $appointment->doctor_id = htmlentities($_POST['doctor_id']);
  $appointment->appointment_date = htmlentities($_POST['appointment_date']);
  $appointment->appointment_time = htmlentities($_POST['appointment_time']);
  $appointment->appointment_status = "Pending";

  if (
    validate_field($appointment->patient_id) &&
    validate_field($appointment->doctor_id) &&
    validate_field($appointment->appointment_date) &&
    validate_field($appointment->appointment_time) &&
    validate_field($appointment->appointment_status)
  ) {
    if ($appointment->add_appointment()) {
      $success = 'success';
    } else {
      echo 'An error occured while adding in the database.';
    }
  } else {
    $success = 'failed';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Appointment';
include '../includes/head.php';
?>

<body>
  <?php
  require_once('../includes/header.php');
  ?>

  <section id="appointment" class="page-container padding-medium p-3">
    <div class="row mb-3">

      <div class="col-sm-12 col-md-8">
        <form action="" method="post">
          <div class="border border-dark-subtle shadow-sm rounded-2 p-3 mb-4 mb-md-0">
            <div class="row">
              <div class="col-12 col-md-1 d-flex align-items-start justify-content-center p-0">
                <i class='bx bx-shield-plus xx-large-font text-green pt-md-2 ps-md-2'></i>

              </div>
              <div class="col-12 col-md-11">
                <p class="fs-5 mb-2">Select Doctor *</p>
                <div class="d-flex flex-row flex-wrap justify-content-start mb-3">
                  <input type="text" id="doctorSearch" class="form-control fw-light" placeholder="Type to search for a doctor..." aria-label="Doctor search">
                  <ul id="doctorDropdown" class="docDropDown list-group position-absolute d-none w-50" style="max-height: 200px; overflow-y: auto; z-index: 100; margin-top: 2.3rem;">

                  </ul>
                  <input type="hidden" id="doctor_id" name="doctor_id" value="">
                </div>
                <div class="row">
                  <div class="col-auto">
                    <img id="account_image" src="../assets/images/default_profile.png" alt="" width="70" height="70" class="rounded rounded-3 border border-2 border-light">
                  </div>
                  <div class="col-auto me-auto">
                    <!-- padesign dito part -->
                    <p id="specialty" class="fs-6 mb-2">Specialty: </p>
                    <p id="contact" class="fs-6 mb-2">Contact: </p>
                    <p id="email" class="fs-6 mb-2">Email: </p>
                    <p id="working_day" class="fs-6 mb-2">Working Days: </p>
                    <p id="working_time" class="fs-6 mb-2">Working Time: </p>
                    <p id="doctorid" class="fs-6 mb-2"></p>
                  </div>
                </div>
              </div>
            </div>


            <hr>

            <div class="row d-flex flex-wrap justify-content-center justify-content-md-start">
              <div class="col-6 px-2 mb-3">
                <p class="fs-6 mb-0">Select Date</p>
                <input type="date" id="appointment_date" name="appointment_date" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+1 month')); ?>" class="form-control fs-6 px-2 py-1 bg-white border border-dark rounded-1 text-black-50 w-100">
              </div>

              <div class="col-6 px-2 mb-3">
                <p class="fs-6 mb-0">Select Time</p>
                <input type="time" id="appointment_time" name="appointment_time" step="1800" class="form-control fs-6 px-2 py-1 bg-white border border-dark rounded-1 text-black-50 w-100" required>
              </div>
            </div>


            <!-- <hr>

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
                  <i class='bx bx-mail-send xx-large-font text-green pt-md-2 ps-md-2'></i>
                </div>
                <div class="col-12 col-md-11">
                  <p class="fs-5 mb-0">Email Address</p>
                  <p class="fs-6 fw-light text-muted">Enter the email address on which you wish to recieve checkup related information</p>
                  <div class="d-flex flex-row flex-wrap justify-content-evenly justify-content-md-start me-md-5 pe-md-5">

                    <input type="email" class="form-control border border-dark" placeholder="example@email.com" aria-label="mobile_no" aria-describedby="mobile_no">

                  </div>
                </div>
              </div>
            </div> -->

            <hr>

            <div class="w-100 d-flex justify-content-end ">
              <button type="submit" class="w-50 w-md-25 btn btn-outline-dark mt-2" name="request">Request Appointment</button>
            </div>

          </div>
        </form>
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
  require_once('../includes/footer.php');
  ?>

  <?php
  if (isset($_POST['request']) && $success == 'success') {
  ?>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">You have requested an appointment successfully!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row d-flex">
              <div class="col-12 text-center">
                <a href="./appointment" class="text-decoration-none text-dark">
                  <p class="m-0 text-primary fw-bold">Click to Continue.</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  <script src="../js/login.js"></script>
  <script src="../js/main.js"></script>

  <script>
    // function formatTime(time) {
    //   let [hours, minutes] = time.split(':');
    //   hours = parseInt(hours);
    //   let suffix = hours >= 12 ? 'PM' : 'AM';
    //   hours = hours % 12 || 12;

    //   return `${hours}:${minutes} ${suffix}`;
    // }

    document.addEventListener("DOMContentLoaded", function() {
      const doctorSearch = document.getElementById("doctorSearch");
      const doctorDropdown = document.getElementById("doctorDropdown");
      const doctorIdInput = document.getElementById("doctor_id");
      const specialty = document.getElementById("specialty");
      const contact = document.getElementById("contact");
      const email = document.getElementById("email");
      const working_days = document.getElementById("working_day");
      const working_hours = document.getElementById("working_time");
      const account_image = document.getElementById("account_image");
      const test_id = document.getElementById("doctorid");

      fetch('../handlers/get_doctors.php')
        .then(response => response.json())
        .then(data => {
          console.log(data);

          doctorSearch.addEventListener("focus", function() {
            if (doctorSearch.value === '' && data.length > 0) {
              doctorDropdown.classList.remove('d-none');
              populateDropdown(data);
            }
          });

          doctorSearch.addEventListener("input", function() {
            const searchTerm = doctorSearch.value.toLowerCase();
            doctorDropdown.innerHTML = '';

            const filteredDoctors = data.filter(doctor =>
              doctor.doctor_name.toLowerCase().includes(searchTerm)
            );

            populateDropdown(filteredDoctors);
          });

          function populateDropdown(doctors) {
            doctorDropdown.innerHTML = '';
            doctors.forEach(doctor => {
              const li = document.createElement("li");
              li.classList.add("list-group-item", "cursor-pointer");
              li.textContent = doctor.doctor_name;
              li.setAttribute("data-id", doctor.account_id);

              li.addEventListener("click", function() {
                doctorSearch.value = doctor.doctor_name;
                doctorIdInput.value = doctor.doctor_id;
                test_id.innerHTML = doctor.doctor_id;
                specialty.innerHTML = doctor.specialty;
                contact.innerHTML = doctor.contact;
                email.innerHTML = doctor.email;
                working_days.innerHTML = doctor.start_day + " to " + doctor.end_day;
                working_hours.innerHTML = formatTime(doctor.start_wt) + " to " + formatTime(doctor.end_wt);
                account_image.src = "../assets/images/" + doctor.account_image;
                doctorDropdown.classList.add('d-none');
              });

              doctorDropdown.appendChild(li);
            });

            if (doctors.length > 0) {
              doctorDropdown.classList.remove('d-none');
            } else {
              doctorDropdown.classList.add('d-none');
            }
          }

          document.addEventListener("click", function(event) {
            if (!doctorSearch.contains(event.target) && !doctorDropdown.contains(event.target)) {
              doctorDropdown.classList.add('d-none');
            }
          });
        })
        .catch(error => console.error('Error fetching doctors:', error));
    });
  </script>

  <!-- JS script for haandlng -->
  <!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
      const startTimeInput = document.getElementById("startTime");
      const endTimeInput = document.getElementById("endTime");

      startTimeInput.addEventListener("change", function() {
        const startTime = startTimeInput.value;
        if (startTime) {
          const [hours, minutes] = startTime.split(':').map(Number);
          const startDate = new Date();
          startDate.setHours(hours);
          startDate.setMinutes(minutes);

          startDate.setHours(startDate.getHours() + 1);

          const endHours = String(startDate.getHours()).padStart(2, '0');
          const endMinutes = String(startDate.getMinutes()).padStart(2, '0');
          endTimeInput.value = `${endHours}:${endMinutes}`;
        } else {
          endTimeInput.value = "";
        }
      });
    });
  </script> -->

  <script>
    function roundTimeToNearestHalfHour(time) {
      let [hours, minutes] = time.split(":");
      minutes = parseInt(minutes);

      if (minutes < 15) {
        minutes = "00";
      } else if (minutes < 45) {
        minutes = "30";
      } else {
        minutes = "00";
        hours = (parseInt(hours) + 1).toString().padStart(2, '0');
      }

      return `${hours.padStart(2, '0')}:${minutes}`;
    }

    document.getElementById("appointment_time").addEventListener("change", function() {
      let inputTime = this.value; 
      let roundedTime = roundTimeToNearestHalfHour(inputTime);
      this.value = roundedTime;
    });
  </script>

</body>

</html>