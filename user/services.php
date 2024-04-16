<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'Services';
	include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>

  <section id="services" class="padding-medium mt-5 py-2">
    <div class="container mt-4 mb-4 pt-2">
      <div class="p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-6 fw-normal">Telecommunication Health Services</h1>
        <p class="fs-5 text-muted mx-5">
         Welcome to DocConnect's Telecommunication Health Services! Our goal is 
         to provide you with seamless access to quality healthcare and wellness resources 
         from the comfort of your home or office. Our comprehensive suite of 
         telecommunication health services ensures that you receive the care you need when 
         you need it, without the hassle of traveling to a clinic. Here's what we offer:
       </p>
      </div>

      <div id="one" class="d-flex pb-4 mb-4 border-bottom border-primary">
        <div class="img">
          <img src="../assets/images/sevices_img1.jpeg" alt="sevices_img1.jpeg" class="rounded-2 shadow-lg">
        </div>
        <div class="content ms-4">
          <h3 class="card-title text-primary pricing-card-title mb-3">Virtual Consultations</h3>
          <ul>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Expert Medical Advice: </span>
              Connect with our network of experienced healthcare providers for personalized 
              medical advice and treatment plans.
            </p></li>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Convenient Appointments: </span>
              Schedule consultations at a time that works best for you, and attend them 
              from your preferred device.
            </p></li>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Follow-Up Care:  </span>
              Our providers offer follow-up appointments and ongoing support to help 
              you manage your health effectively.
            </p></li>
          </ul>
        </div>
      </div>

      <div id="two" class="d-flex flex-row-reverse pb-4 mb-4 border-bottom border-primary">
        <div class="img">
          <img src="../assets/images/sevices_img2.jpeg" alt="sevices_img1.jpeg" class="rounded-2 shadow-lg">
        </div>
        <div class="content me-4">
          <h3 class="card-title text-primary pricing-card-title mb-3">Remote Monitoring</h3>
          <ul>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Real-Time Tracking: </span>
              Monitor your vital signs and health metrics using our state-of-the-art devices 
              and apps.
            </p></li>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Alerts and Notifications: </span>
              Receive instant alerts if any readings fall outside of normal ranges, allowing 
              for quick intervention.
            </p></li>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Secure Data Sharing: </span>
              Share your health data securely with your healthcare provider for accurate 
              diagnosis and treatment.
            </p></li>
          </ul>
        </div>
      </div>

      <div id="three" class="d-flex pb-4 mb-4 border-bottom border-primary">
        <div class="img">
          <img src="../assets/images/sevices_img3.jpeg" alt="sevices_img1.jpeg" class="rounded-2 shadow-lg">
        </div>
        <div class="content ms-4">
          <h3 class="card-title text-primary pricing-card-title mb-3">Mental Health Support</h3>
          <ul>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Counseling Services: </span>
              Access mental health professionals for counseling and support from anywhere.
            </p></li>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Therapy Sessions: </span>
              Attend individual or group therapy sessions remotely to improve your mental 
              well-being.
            </p></li>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Crisis Management: </span>
              Our team is available to provide support during times of crisis.
            </p></li>
          </ul>
        </div>
      </div>

      <div id="four" class="d-flex flex-row-reverse pb-4 mb-4 border-bottom border-primary">
        <div class="img">
          <img src="../assets/images/sevices_img1.jpeg" alt="sevices_img1.jpeg" class="rounded-2 shadow-lg">
        </div>
        <div class="content me-4">
          <h3 class="card-title text-primary pricing-card-title mb-3">Health and Wellness Programs</h3>
          <ul>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Nutritional Guidance: </span>
              Work with our registered dietitians to develop a personalized nutrition plan.
            </p></li>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Fitness Training: </span>
              Join virtual fitness classes or receive one-on-one training to help you stay active.
            </p></li>
            <li><p class="fs-6 text-muted">
              <span class="fw-bold">Preventive Care: </span>
              Take part in wellness programs and screenings designed to prevent illnesses and promote 
              long-term health.
            </p></li>
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