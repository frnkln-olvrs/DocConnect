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
  $title = 'Services';
  $services = 'active';
	include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>
  <section class="services hero vh-50 d-flex justify-content-center align-items-center mt-5">
    <h1 class="text-center mb-4 text-light">Our Services</h1>
  </section>

  <div class="container mt-3">
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
    <!-- Virtual Consultations -->
    <div class="mb-5">
      <h2 class="text-primary">Virtual Consultations</h2>
      <p>Skip the waiting room—consult with healthcare professionals online!</p>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card service-card shadow-sm">
            <img src="../assets/images/services/expert_medical_advice.png" class="card-img-top service-img" alt="Virtual Consultations">
            <div class="card-body">
              <h5 class="card-title text-green">Expert Medical Advice</h5>
              <p class="card-text">Receive personalized guidance and treatment plans from licensed healthcare providers.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card service-card shadow-sm">
            <img src="../assets/images/services/convenient_appointments.png" class="card-img-top service-img" alt="Convenient Appointments">
            <div class="card-body">
              <h5 class="card-title text-green">Convenient Appointments</h5>
              <p class="card-text">Book consultations at your preferred time and attend from any device.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card service-card shadow-sm">
            <img src="../assets/images/services/follow-up_care.png" class="card-img-top service-img" alt="Follow-Up Care">
            <div class="card-body">
              <h5 class="card-title text-green">Follow-Up Care</h5>
              <p class="card-text">Get continuous support to ensure your health management is effective.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Online Doctor Appointments -->
    <div class="mb-5">
      <h2 class="text-primary">Online Doctor Appointments</h2>
      <p>Connect directly with doctors via video calls.</p>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="services_img1.jpeg" class="card-img-top service-img" alt="Easy Access">
            <div class="card-body">
              <h5 class="card-title text-green">Easy Access</h5>
              <p class="card-text">Talk to general practitioners and specialists without leaving your space.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="services_img1.jpeg" class="card-img-top service-img" alt="Wide Availability">
            <div class="card-body">
              <h5 class="card-title text-green">Wide Availability</h5>
              <p class="card-text">Choose the doctor that best fits your needs and preferences.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="services_img1.jpeg" class="card-img-top service-img" alt="Secure Video Calls">
            <div class="card-body">
              <h5 class="card-title text-green">Secure and Confidential</h5>
              <p class="card-text">All consultations prioritize your privacy and confidentiality.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Remote Monitoring -->
    <div class="mb-5">
      <h2 class="text-primary">Remote Monitoring</h2>
      <p>Stay in control of your health with cutting-edge tools.</p>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="services_img1.jpeg" class="card-img-top service-img" alt="Health Metrics">
            <div class="card-body">
              <h5 class="card-title text-green">Health Metrics Tracking</h5>
              <p class="card-text">Monitor your vital signs in real-time with state-of-the-art devices.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="services_img1.jpeg" class="card-img-top service-img" alt="Instant Alerts">
            <div class="card-body">
              <h5 class="card-title text-green">Instant Alerts</h5>
              <p class="card-text">Receive notifications if any readings fall outside normal ranges.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="services_img1.jpeg" class="card-img-top service-img" alt="Data Sharing">
            <div class="card-body">
              <h5 class="card-title text-green">Data-Driven Care</h5>
              <p class="card-text">Securely share health data with your doctor for accurate treatment plans.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mental Health Support -->
    <div class="mb-5">
      <h2 class="text-primary">Mental Health Support</h2>
      <p>Access mental health resources anytime, anywhere.</p>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="services_img1.jpeg" class="card-img-top service-img" alt="Counseling Services">
            <div class="card-body">
              <h5 class="card-title text-green">Counseling Services</h5>
              <p class="card-text">Speak with professional counselors for support and guidance.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="services_img1.jpeg" class="card-img-top service-img" alt="Therapy Sessions">
            <div class="card-body">
              <h5 class="card-title text-green">Therapy Sessions</h5>
              <p class="card-text">Join individual or group sessions remotely to improve mental health.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="services_img1.jpeg" class="card-img-top service-img" alt="Crisis Support">
            <div class="card-body">
              <h5 class="card-title text-green">24/7 Crisis Support</h5>
              <p class="card-text">Immediate support during challenging times with trained professionals.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="services" class="padding-medium page-container">
    <div class="container mb-4">
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