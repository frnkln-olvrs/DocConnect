<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'DocConnect | Contacts';
  include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>

  <section class="main contact">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 pe-3 pe-md-5 mt-5 mt-md-0">
          <h2 class="display-1 text-uppercase text-light text-center text-md-start">Get in Touch</h2>
          <p class="fs-4 my-4 pb-2 text-white text-center text-md-start">Want to get in touch? We’d love to hear from you. Here’s how you can reach us</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contacts" class="mt-xl-5 mx-5">
    <div class="container border-1 p-1">
      <div class="row align-items-start">
        <div class="col-12 col-md-6">
          <div class="box-1 bg-white shadow border border-1 d-flex flex-column justify-content-center p-4">
            <i class='bx bxs-phone-call'></i>
            <h4 class="text-center mb-3">Talk to Doctors</h4>
            <p class="text-center">Our experienced team of medical professionals is ready to assist you with your health concerns. Reach out to us for reliable medical advice and support.</p>
            <a href="tel:+639123456789" class="text-center d-block">+63 912 345 6789</a>
            <a href="#" class="align-content-center d-flex justify-content-center mt-3">
              <h5 class="mb-0">More info here</h5>
              <i class='bx bxs-chevron-down ms-2'></i>
            </a>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="box-1 shadow bg-white border border-1 d-flex flex-column justify-content-center p-4">
            <i class='bx bxs-phone-call'></i>
            <h4 class="text-center mb-3">Customer Support</h4>
            <p class="text-center">For any inquiries about our services, appointments, or other general information, please do not hesitate to contact our customer support team.</p>
            <a href="tel:+639123456789" class="text-center d-block">+63 912 345 6789</a>
          </div>
        </div>
      </div>
    </div>

    <section id="contact-us" class="contact-us mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
          <h3>Contact Us</h3>
          <p>We're here to help and answer any question you might have. We look forward to hearing from you!</p>
            <div class="card p-4 shadow bg-white border border-1">
              
              <form action="#" method="post" class="contact-form">
                <div class="form-group mb-3">
                  <label for="name">Full Name</label>
                  <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                  <label for="email">Email Address</label>
                  <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                  <label for="phone">Phone Number</label>
                  <input type="tel" id="phone" name="phone" class="form-control">
                </div>
                <div class="form-group mb-3">
                  <label for="message">Your Message</label>
                  <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3 w-100">
                  <i class="bx bx-send"></i> Send Message
                </button>
              </form>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-info mb-4">
              <h3>Contact Information</h3>
              <p><i class="bx bx-map"></i> Normal Road, Baliwasan, 7000 Zamboanga City</p>
              <p><i class="bx bx-phone"></i> <a href="tel:+11234567890">+1 123 456 7890</a></p>
              <p><i class="bx bx-envelope"></i> <a href="mailto:info@example.com">info@example.com</a></p>
              <p><i class="bx bx-time"></i> Monday - Friday: 9:00 AM - 6:00 PM</p>
            </div>

            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1583.6559281874215!2d122.05575931530544!3d6.912249445888473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x325041c4e06f1d37%3A0x5d59835bfb6321a5!2sWestern%20Mindanao%20State%20University!5e0!3m2!1sen!2sph!4v1607473587923!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>

        <div class="faq">
          <h3>Frequently Asked Questions</h3>
          <div class="faq-item">
            <h5>How can I make an appointment?</h5>
            <p>You can make an appointment by calling us at +1 123 456 7890 or by filling out the contact form above.</p>
          </div>
          <div class="faq-item">
            <h5>What are your office hours?</h5>
            <p>Our office is open Monday to Friday, from 9:00 AM to 6:00 PM.</p>
          </div>
        </div>
      </div>
    </section>
  </section>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>
