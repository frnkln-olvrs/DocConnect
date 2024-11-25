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

  <section id="carousel">
    <div id="doctorsCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#doctorsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#doctorsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#doctorsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <div class="row mx-5 mb-4">
            <div class="col-12 col-lg-5 mb-3 mb-lg-0">
              <div class="profile-card me-4">
                <div class="profile-image">
                  <img src="../assets/gallery/66e7db42336204.60963457.jpg" alt="Profile Image">
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
                  <div class="card px-4 py-2 bg-light shadow-lg">
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
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="2000">
        <div class="row mx-5 mb-4">
            <div class="col-12 col-lg-5 mb-3 mb-lg-0">
              <div class="profile-card me-4">
                <div class="profile-image">
                  <img src="../assets/gallery/66dd9f4f08e0e3.48649594.png" alt="Profile Image">
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-7">
              <div class="details">
                <h4 class="text-green mb-3 fs-2 text-center text-lg-start">Dr. Olivia Carter</h4>
                <div class="d-flex flex-column">
                  <div class="row mb-3 align-items-stretch">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                      <div class="card px-4 py-2 bg-light shadow-lg h-100">
                        <h6 class="text-primary">Specialty:</h6>
                        <p class="fw-light">Pediatrics</p>
                      </div>
                    </div>
                  
                    <div class="col-12 col-md-6">
                      <div class="card px-4 py-2 bg-light shadow-lg h-100">
                        <h6 class="text-primary">Education:</h6>
                        <p class="fw-light">Johns Hopkins University School of Medicine, Doctor of Medicine</p>
                      </div>
                    </div>
                  </div>
                  <div class="card px-4 py-2 bg-light shadow-lg">
                    <h6 class="text-primary">About:</h6>
                    <p class="fw-light fs-6">
                      Dr. Carter is a compassionate pediatrician with over 10 years of experience in child healthcare. She specializes in preventive care, ensuring that children stay healthy and thrive during all stages of growth. Outside the clinic, Dr. Carter enjoys painting, reading children's literature, and volunteering at local schools to promote health education among students.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row mx-5 mb-4">
            <div class="col-12 col-lg-5 mb-3 mb-lg-0">
              <div class="profile-card me-4">
                <div class="profile-image">
                  <img src="../assets/gallery/66dd87dbf41034.10626748.png" alt="Profile Image">
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-7">
              <div class="details">
                <h4 class="text-green mb-3 fs-2 text-center text-lg-start">Dr. Nathan Ellis</h4>
                <div class="d-flex flex-column">
                  <div class="row mb-3 align-items-stretch">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                      <div class="card px-4 py-2 bg-light shadow-lg h-100">
                        <h6 class="text-primary">Specialty:</h6>
                        <p class="fw-light">Dentistry</p>
                      </div>
                    </div>
                  
                    <div class="col-12 col-md-6">
                      <div class="card px-4 py-2 bg-light shadow-lg h-100">
                        <h6 class="text-primary">Education:</h6>
                        <p class="fw-light">University of Pennsylvania School of Dental Medicine, Doctor of Dental Medicine (DMD)</p>
                      </div>
                    </div>
                  </div>
                  <div class="card px-4 py-2 bg-light shadow-lg">
                    <h6 class="text-primary">About:</h6>
                    <p class="fw-light fs-6">
                    Dr. Lee is a skilled dentist with a passion for creating healthy and confident smiles. He specializes in restorative and cosmetic dentistry, including veneers, crowns, and teeth whitening. Dr. Lee is dedicated to patient comfort and education, ensuring every visit is stress-free and informative. Outside the clinic, he enjoys photography, hiking, and organizing dental care outreach programs in underserved communities.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>