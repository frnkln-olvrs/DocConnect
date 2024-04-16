<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'About Us';
	include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>
  
  <section class="about-section px-3 px-md-5">
    <div class="sec-title">
      <span class="title">About Us:</span>
      <h2>DocConnect: Telecommunication Health Services</h2>
    </div>
    <div class="d-flex align-items-start mb-4">
      <i class='bx bxs-message-square-check text-green fs-2'></i>
      <p class="ps-3 fs-5 fw-light m-0">
        Welcome to Telecommunication Health Services, where innovation meets healthcare 
        to provide accessible and convenient medical solutions. Our mission is to bridge 
        the gap between technology and healthcare, making quality medical services readily 
        available to individuals regardless of their location or circumstances.
      </p>
    </div>
    <div class="d-flex align-items-start mb-4">
      <i class='bx bxs-message-square-check text-green fs-2'></i>
      <div class="ps-3">
        <h3>Who We Are:</h3>
        <p class="fs-5 fw-light m-0">
          Telecommunication Health Services is a leading provider of remote medical consultations, 
          diagnostic assessments, and healthcare management solutions. We are a team of dedicated 
          healthcare professionals, technologists, and innovators committed to revolutionizing 
          the way healthcare is delivered.
        </p>
      </div>
    </div>
    <div class="d-flex align-items-start mb-4">
      <i class='bx bxs-message-square-check text-green fs-2'></i>
      <div class="ps-3">
        <h3>What We Do:</h3>
        <p class="fs-5 fw-light m-0">
          At Telecommunication Health Services, we leverage cutting-edge telecommunications 
          technology to connect patients with qualified healthcare providers in real-time, 
          regardless of geographical barriers. Our platform enables seamless communication 
          between patients and healthcare professionals, facilitating consultations, 
          diagnoses, treatment planning, and follow-up care from the comfort of your own home.
        </p>
      </div>
    </div>
    
    <div class="bg-primary rounded-3 p-3 text-light">
      <div class="sec-title">
        <h2 class="text-center text-dark">Our Services</h2>
      </div>
      <div class="d-flex align-items-start mb-3">
        <i class='bx bx-right-arrow-alt fs-2'></i>
        <p class="ps-3 fs-5 fw-light m-0">
          <span class="fw-bold">Remote Consultations: </span>
          Access medical consultations with licensed healthcare professionals via video
          conferencing or telephone, eliminating the need for in-person appointments.
        </p>
      </div>
      <div class="d-flex align-items-start mb-3">
        <i class='bx bx-right-arrow-alt fs-2'></i>
        <p class="ps-3 fs-5 fw-light m-0">
          <span class="fw-bold">Diagnostic Assessments: </span>
          Receive comprehensive diagnostic evaluations remotely, including virtual 
          examinations, symptom assessments, and medical history reviews.
        </p>
      </div>
      <div class="d-flex align-items-start mb-3">
        <i class='bx bx-right-arrow-alt fs-2'></i>
        <p class="ps-3 fs-5 fw-light m-0">
          <span class="fw-bold">Healthcare Management: </span>
          Benefit from personalized healthcare management plans tailored to your unique 
          needs, including medication management, lifestyle recommendations, and ongoing 
          support.
        </p>
      </div>
      <div class="d-flex align-items-start mb-3">
        <i class='bx bx-right-arrow-alt fs-2'></i>
        <p class="ps-3 fs-5 fw-light m-0">
          <span class="fw-bold">Telemedicine Technologies: </span>
          We utilize state-of-the-art telemedicine technologies to ensure secure, confidential, 
          and efficient communication between patients and healthcare providers.
        </p>
      </div>

    </div>
  </section>

  <section class="choose px-3 px-md-5 mt-4">
    <div class="d-flex">
      <div class="img">
        <img src="../assets/images/about_us_img.jpeg" class="w-100 rounded-3">
      </div>
      <div class="info">
      <div class="sec-title">
        <h2 class="text-center text-dark">Why Choose Us</h2>
      </div>
      <div class="d-flex align-items-start mb-3">
        <i class='bx bx-right-arrow-alt fs-2'></i>
        <p class="ps-3 fs-5 fw-light m-0">
          <span class="fw-bold">Convenience: </span>
          Say goodbye to long wait times and travel hassles. With Telecommunication 
          Health Services, you can access quality healthcare from anywhere with an 
          internet connection or telephone service.
        </p>
      </div>
      </div>
    </div>
  </section>
  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>