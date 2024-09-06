<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'Our Doctors';
	include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>

  <section class="page-container padding-medium pt-3 p-3">
    <div class="border-primary border-bottom">
      <h1 class="text-green">Our Doctors</h1>
      <p class="fs-5 fw-light">
        At Western Mindanao State University, we pride ourselves on providing high-quality 
        telecommunication health services to our students, faculty, and staff. Our team of 
        experienced doctors is dedicated to delivering compassionate and personalized care 
        through our telehealth platform. Meet the team that keeps our community healthy and 
        thriving!
      </p>
    </div>
  </section>

  <section id="carousel p-4">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <div class="d-flex">
            <img src="../assets/images/billboard-img.png" class="d-block w-50" alt="...">
            <div class="mt-4">
              <h4 class="text-green">Dr. Emily Parker</h4>
              <div class="d-flex flex-column">
                <h6 class="text-primary">Specialty:</h6>
                <p class="fw-light">Family Medicine</p>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-primary">Education:</h6>
                <p class="fw-light">Harvard Medical School, Doctor of Medicine</p>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-primary">About:</h6>
                <p class="fw-light fs-6">
                  Dr. Parker brings a wealth of experience to our telehealth team. With a focus
                  on preventive care and patient education, Dr. Parker ensures that every 
                  patient receives personalized and attentive care. Her goal is to empower her 
                  patients to take charge of their health and well-being. When not consulting 
                  with patients, Dr. Parker enjoys hiking in nature and practicing yoga. She is 
                  also dedicated to volunteering at local community health clinics, offering 
                  her medical expertise to those in need.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <div class="d-flex">
            <img src="../assets/images/billboard-img.png" class="d-block w-50" alt="...">
            <div class="mt-4">
              <h4 class="text-green">Dr. Sarah Johnson</h4>
              <div class="d-flex flex-column">
                <h6 class="text-primary">Specialty:</h6>
                <p class="fw-light">Internal Medicine</p>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-primary">Education:</h6>
                <p class="fw-light">Harvard Medical School, MD</p>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-primary">About:</h6>
                <p class="fw-light fs-6">
                  Dr. Johnson brings a wealth of experience to our telehealth team. With a focus on 
                  internal medicine, Dr. Johnson ensures that every patient receives personalized and 
                  attentive care. When not consulting with patients, Dr. Johnson enjoys hiking in the 
                  nearby mountains and is dedicated to volunteering at local free clinics to provide 
                  healthcare to underserved communities.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex">
            <img src="../assets/images/billboard-img.png" class="d-block w-50" alt="...">
            <div class="mt-4">
              <h4 class="text-green">Dr. Lisa Martinez</h4>
              <div class="d-flex flex-column">
                <h6 class="text-primary">Specialty:</h6>
                <p class="fw-light">Family Medicine</p>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-primary">Education:</h6>
                <p class="fw-light">Harvard Medical School, Doctor of Medicine (MD)</p>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-primary">About:</h6>
                <p class="fw-light fs-6">
                  Dr. Martinez brings a wealth of experience to our telehealth team. With a focus on 
                  preventive care and chronic disease management, Dr. Martinez ensures that every 
                  patient receives personalized and attentive care. She believes in taking a holistic 
                  approach to health and wellness, addressing both physical and mental health needs. 
                  When not consulting with patients, Dr. Martinez enjoys hiking, gardening, and painting. 
                  She is dedicated to volunteering at local community health clinics and actively participates 
                  in health education workshops for underserved populations.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>