<?php
session_start();

if (isset($_SESSION['verification_status']) && $_SESSION['verification_status'] != 'Verified') {
  header('location: ../user/verification.php');
}

require_once('../tools/functions.php');
require_once('../classes/account.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'Our Doctors';
  $doctors = 'active';
  include '../includes/head.php';
?>
<body>
  <?php require_once ('../includes/header.php'); ?>

  <!-- Introduction Section -->
  <section class="page-container padding-medium pt-3 p-3">
    <div class="border-primary border-bottom text-center mx-4 mb-3">
      <h1 class="text-green">Our Doctors</h1>
      <p class="fs-5 fw-light">
        At Western Mindanao State University, our telehealth platform combines cutting-edge technology 
        with compassionate care. Our team of dedicated doctors is here to serve not just our university 
        community but also the broader Zamboanga Peninsula, fostering a culture of wellness and health 
        awareness. Whether you need routine care, specialized advice, or preventive consultation, 
        we are committed to delivering accessible and high-quality healthcare tailored to your needs.
      </p>
    </div>
  </section>

  <!-- Doctors Carousel -->
  <section id="carousel">
    <div id="doctorsCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#doctorsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#doctorsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#doctorsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <!-- Doctor 1 -->
        <div class="carousel-item active" data-bs-interval="10000">
          <div class="row mx-5 mb-4">
            <div class="col-12 col-lg-5 mb-3 mb-lg-0">
              <div class="profile-card me-4">
                <div class="profile-image">
                  <img src="../assets/gallery/66e7db42336204.60963457.jpg" alt="Profile Image of Dr. Emily Parker">
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-7">
              <div class="details">
                <h4 class="text-green mb-3 fs-2 text-center text-lg-start">Dr. Emily Parker</h4>
                <div class="d-flex flex-column">
                  <div class="row mb-3 align-items-stretch">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                      <div class="card px-4 py-2 bg-light shadow-lg h-100">
                        <h6 class="text-primary">Specialty:</h6>
                        <p class="fw-light">Family Medicine</p>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="card px-4 py-2 bg-light shadow-lg h-100">
                        <h6 class="text-primary">Education:</h6>
                        <p class="fw-light">Harvard Medical School, Doctor of Medicine</p>
                      </div>
                    </div>
                  </div>
                  <div class="card px-4 py-2 bg-light shadow-lg mb-3">
                    <h6 class="text-primary">About:</h6>
                    <p class="fw-light fs-6">
                      Dr. Parker focuses on preventive care and patient education. She empowers patients to 
                      take charge of their health. When not consulting, she enjoys hiking and volunteering at 
                      local community health clinics.
                    </p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <a href="./appointment.php" class="btn btn-primary text-light">Book an Appointment</a>
                    <a href="../doctor-profile/dr-emily-parker.php" class="btn btn-outline-secondary">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Add additional doctors as similar carousel items here -->
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#doctorsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#doctorsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Specializations Offered -->
  <section class="specializations padding-medium py-3 text-center bg-light">
    <h2 class="text-green">Our Specializations</h2>
    <p class="fs-5 fw-light">Our team of expert doctors provides care in the following areas:</p>
    <div class="container py-2">
      <div class="row text-center">
        <!-- General Medicine -->
        <div class="col-md-4 mb-4">
          <div class="card border-1 shadow-sm h-100">
            <div class="card-body">
              <h5 class="card-title text-primary">General Medicine</h5>
              <p class="card-text">
                We provide comprehensive primary care to address a wide range of health concerns, ensuring the overall well-being of our diverse university community.
              </p>
            </div>
          </div>
        </div>

        <!-- Mental Health -->
        <div class="col-md-4 mb-4">
          <div class="card border-1 shadow-sm h-100">
            <div class="card-body">
              <h5 class="card-title text-primary">Mental Health</h5>
              <p class="card-text">
                We support mental wellness to help students and staff manage stress, thrive academically, and foster a healthier, more supportive campus environment.
              </p>
            </div>
          </div>
        </div>

        <!-- Dentistry -->
        <div class="col-md-4 mb-4">
          <div class="card border-1 shadow-sm h-100">
            <div class="card-body">
              <h5 class="card-title text-primary">Dentistry</h5>
              <p class="card-text">
                We promote good oral health through preventive and restorative care, helping everyone maintain confident smiles and overall well-being.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once ('../includes/footer.php'); ?>

</body>
</html>