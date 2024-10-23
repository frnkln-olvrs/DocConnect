<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'About Us';
  $about = 'active';
	include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>
  
  <section  class="about-section page-container px-3 px-md-5">
    <div class="row pt-4 mb-5">
      <div class="col-8">
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
          <div class="text-center">
            <div class="d-flex justify-content-center align-items-center mb-2">
              <i class='bx bxs-message-square-check text-green fs-2 me-2'></i>
              <h3 class="mb-0">Who We Are:</h3>
            </div>
            <p class="fs-5 fw-light m-0">
              Telecommunication Health Services is a leading provider of remote medical consultations, 
              diagnostic assessments, and healthcare management solutions. We are a team of dedicated 
              healthcare professionals, technologists, and innovators committed to revolutionizing 
              the way healthcare is delivered.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start mb-4">
          <div class="text-center">
            <div class="d-flex justify-content-center align-items-center mb-2">
              <i class='bx bxs-message-square-check text-green fs-2 me-2'></i>
              <h3 class="mb-0">What We Do:</h3>
            </div>
            <p class="fs-5 fw-light m-0">
              At Telecommunication Health Services, we leverage cutting-edge telecommunications 
              technology to connect patients with qualified healthcare providers in real-time, 
              regardless of geographical barriers. Our platform enables seamless communication 
              between patients and healthcare professionals, facilitating consultations, 
              diagnoses, treatment planning, and follow-up care from the comfort of your own home.
            </p>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="h-100 rounded-2 d-flex align-items-center justify-content-center overflow-hidden">
          <img src="../assets/images/bg-1.png" alt="Image" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;">
        </div>
      </div>
    </div>
    
    <div class="bg-primary rounded-3 p-3 text-light">
      <div class="sec-title">
        <h2 class="text-center text-light">Our Services</h2>
      </div>
      <ul>
        <div class="d-flex align-items-start mb-3">
          <li class="ps-3 fs-5 fw-light m-0">
            <span class="fw-bold">Remote Consultations: </span>
            Access medical consultations with licensed healthcare professionals via video
            conferencing or telephone, eliminating the need for in-person appointments.
          </li>
        </div>
        <div class="d-flex align-items-start mb-3">
          <li class="ps-3 fs-5 fw-light m-0">
            <span class="fw-bold">Diagnostic Assessments: </span>
            Receive comprehensive diagnostic evaluations remotely, including virtual 
            examinations, symptom assessments, and medical history reviews.
          </li>
        </div>
        <div class="d-flex align-items-start mb-3">
          <li class="ps-3 fs-5 fw-light m-0">
            <span class="fw-bold">Healthcare Management: </span>
            Benefit from personalized healthcare management plans tailored to your unique 
            needs, including medication management, lifestyle recommendations, and ongoing 
            support.
          </li>
        </div>
        <div class="d-flex align-items-start mb-3">
          <li class="ps-3 fs-5 fw-light m-0">
            <span class="fw-bold">Telemedicine Technologies: </span>
            We utilize state-of-the-art telemedicine technologies to ensure secure, confidential, 
            and efficient communication between patients and healthcare providers.
          </li>
        </div>

      </ul>

    </div>
  </section>

  <section class="choose px-3 px-md-5 mt-4">
    <div class="row mb-5">
      <div class="col-4">
        <div class="h-100 rounded-2 d-flex align-items-center justify-content-center overflow-hidden">
          <img src="../assets/images/about_us_img.jpeg" alt="Image" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;">
        </div>
      </div>

      <div class="col-8">
        <div class="sec-title">
          <h2 class="text-center text-dark">Why Choose Us</h2>
        </div>
        <div class="d-flex align-items-start mb-3">
          <ul>
            <li class="ps-3 fs-5 fw-light m-0">
              <span class="fw-bold">Convenience: </span>
              Say goodbye to long wait times and travel hassles. With Telecommunication 
              Health Services, you can access quality healthcare from anywhere with an 
              internet connection or telephone service.
            </li>
          </ul>
        </div>
        <div class="d-flex align-items-start mb-3">
          <ul>
            <li class="ps-3 fs-5 fw-light m-0">
              <span class="fw-bold">Convenience: </span>
              Say goodbye to long wait times and travel hassles. With Telecommunication 
              Health Services, you can access quality healthcare from anywhere with an 
              internet connection or telephone service.
            </li>
          </ul>
        </div>
        <div class="d-flex align-items-start mb-3">
          <ul>
            <li class="ps-3 fs-5 fw-light m-0">
              <span class="fw-bold">Convenience: </span>
              Say goodbye to long wait times and travel hassles. With Telecommunication 
              Health Services, you can access quality healthcare from anywhere with an 
              internet connection or telephone service.
            </li>
          </ul>
        </div>
        <div class="d-flex align-items-start mb-3">
          <ul>
            <li class="ps-3 fs-5 fw-light m-0">
              <span class="fw-bold">Convenience: </span>
              Say goodbye to long wait times and travel hassles. With Telecommunication 
              Health Services, you can access quality healthcare from anywhere with an 
              internet connection or telephone service.
            </li>
          </ul>
        </div>
        
        
      </div>
    </div>
  </section>
  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>