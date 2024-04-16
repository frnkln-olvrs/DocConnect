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
   <div class="container mb-4 pt-2">
     <div class="p-3 pb-md-4 mx-auto text-center">
       <p class="fs-5 text-muted text-uppercase mx-5">What we do</p>
       <h1 class="display-6 fw-normal">Providing medical care for the <br> sickest in our University</h1>
     </div>
 
     <div class="row row-cols-1 row-cols-md-3">
       <div class="col mb-4">
         <img src="../assets/images/sevices_img1.jpeg" alt="sevices_img1.jpeg" class="rounded-2 shadow-lg">
         <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm">
           <div class="card-body d-flex flex-column justify-content-between shadow-sm">
             <div>
               <h3 class="card-title pricing-card-title">Second Opinions</h3>
               <p class="fs-6 text-muted">Seek expert medical opinions from specialists across various fields without the need for in-person visits.</p>
             </div>
             <button type="button" class="w-100 btn btn-outline-primary">Read More</button>
           </div>
         </div>
       </div>
       <div class="col mb-4">
         <img src="../assets/images/sevices_img2.jpeg" alt="sevices_img1.jpeg" class="rounded-2 shadow-lg">
         <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm">
           <div class="card-body d-flex flex-column justify-content-between shadow-sm">
             <div>
               <h3 class="card-title pricing-card-title">Accessibility</h3>
               <p class="fs-6 text-muted">Reach healthcare providers easily, even in remote or underserved areas, ensuring equitable access to medical care.</p>
             </div>
               <button type="button" class="w-100 btn btn-outline-primary">Read More</button>
           </div>
         </div>
       </div>
       <div class="col mb-4">
         <img src="../assets/images/sevices_img3.jpeg" alt="sevices_img1.jpeg" class="rounded-2 shadow-lg">
         <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm">
           <div class="card-body d-flex flex-column justify-content-between shadow-sm">
             <div>
               <h3 class="card-title pricing-card-title">Patient Portal</h3>
               <p class="fs-6 text-muted">Manage appointments, view medical records, and communicate securely with healthcare providers through a user-friendly online portal.</p>
             </div>
             <button type="button" class="w-100 btn btn-outline-primary">Read More</button>
           </div>
         </div>
       </div>
     </div>
   </div>
  </section>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>