<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'DocConnect | Contacts';
  $contact = 'active';
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
          <p class="fs-4 my-4 pb-2 text-white text-center text-md-start">Want to get in touch? we’d love to hear from you. here’s how you can reach us</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contacts" class="mt-xl-5 mx-5">
    <dic class="container border-1 p-1">
      <div class="row align-items-start">
        <div class="col-12 col-md-6">
          <div class="box-1 bg-white shadow border border-1 d-flex flex-column justify-content-center p-4">
            <i class='bx bxs-phone-call'></i>
            <h4 class="text-center mb-3">Talk to Doctors</h4>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, vitae, sed quia quis totam blanditiis nisi, nam aperiam consequuntur possimus similique. Nihil ipsum omnis ex mollitia nulla accusantium quidem expedita!</p>
            <a href="#">+63 912 345 6789</a>
            <a href="#" class="align-content-center">
              <h5>More info here</h5>
              <i class='bx bxs-chevron-down'></i>
            </a>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="box-1 shadow bg-white border border-1 d-flex flex-column justify-content-center p-4">
            <i class='bx bxs-phone-call'></i>
            <h4 class="text-center mb-3">Talk to Doctors</h4>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, vitae, sed quia quis totam blanditiis nisi, nam aperiam consequuntur possimus similique. Nihil ipsum omnis ex mollitia nulla accusantium quidem expedita!</p>
            <a href="#">+63 912 345 6789</a>
          </div>
        </div>

      </div>
    </dic>
  </section>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>