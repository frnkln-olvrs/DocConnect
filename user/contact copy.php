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
  $title = 'DocConnect | Contacts';
  $contact = 'active';
	include '../includes/head.php';
?>
<body>
<style>
    body {
      font-family: Arial, sans-serif;
    }
    .contact-header {
      background: url('https://via.placeholder.com/1920x400') no-repeat center center/cover;
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .contact-section {
      margin-top: -100px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    .contact-section h4 {
      font-weight: bold;
    }
    .social-icons a {
      color: #007bff;
      font-size: 20px;
      margin-right: 15px;
    }
    .form-control {
      border-radius: 0.3rem;
    }
    .map-container {
      margin-top: 20px;
    }
  </style>
  <?php 
    require_once ('../includes/header.php');
  ?>

  <!-- Header Section -->
<section class="contact-header">
  <h1>Contact us</h1>
  <p>Kassapay is ready to provide the right solution according to your needs</p>
</section>

<!-- Contact Section -->
<div class="container">
  <div class="row contact-section">
    <!-- Left: Contact Details -->
    <div class="col-md-6">
      <h4>Get in touch</h4>
      <p>Sociis natoque penatibus et magnis dis parturient montes nascetur.</p>
      <div class="mb-3">
        <i class="fas fa-map-marker-alt text-primary"></i> <strong>Head Office</strong><br>
        Jalan Cempaka Wangi No 22<br>
        Jakarta - Indonesia
      </div>
      <div class="mb-3">
        <i class="fas fa-envelope text-primary"></i> <strong>Email Us</strong><br>
        support@yourdomain.tld<br>
        hello@yourdomain.tld
      </div>
      <div class="mb-3">
        <i class="fas fa-phone text-primary"></i> <strong>Call Us</strong><br>
        Phone: +6221.2002.2012<br>
        Fax: +6221.2002.2013
      </div>
      <div>
        <strong>Follow our social media</strong><br>
        <div class="social-icons mt-2">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>

    <!-- Right: Contact Form -->
    <div class="col-md-6">
      <h4>Send us a message</h4>
      <form>
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Company">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Phone">
          </div>
          <div class="col-md-6">
            <input type="email" class="form-control" placeholder="Email">
          </div>
        </div>
        <input type="text" class="form-control mt-3" placeholder="Subject">
        <textarea class="form-control mt-3" rows="4" placeholder="Message"></textarea>
        <button type="submit" class="btn btn-primary mt-3 w-100">Send</button>
      </form>
    </div>
  </div>
</div>

<!-- Map Section -->
<div class="container map-container">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.05560961138!2d-74.24789558739484!3d40.697149414385116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250b6e1c91803%3A0x7d3d08c55b0dff8d!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1628765432109!5m2!1sen!2sin"
    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
  </iframe>
</div>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>