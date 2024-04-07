<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'DocConnect';
	include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>
  <section class="main">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 pe-5 mt-5 mt-md-0">
          <h2 class="display-1 text-uppercase text-light">Connectivity that Heals</h2>
          <p class="fs-4 my-4 pb-2">Revolutionizing Healthcare Through Telecommunications</p>
          <div>
            <form id="form" class="d-flex align-items-center position-relative ">
              <input type="text" name="email" placeholder="What are you trying to learn?" class="form-control bg-white border-0 rounded-1 shadow-none px-4 py-3 w-100">
              <button class="btn bg-green rounded-2 px-3 py-2 position-absolute align-items-center m-1 end-0">
                <i class='bx bx-search text-white' width="22px" height="22px"></i>
              </button>
            </form>

          </div>
        </div>
        <div class="img col-md-6 mt-5">
          <img src="../assets/images/billboard-img.png" alt="img" class="img-fluid rounded-circle">
        </div>
      </div>
    </div>
  </section>

  <section id="features" class="mt-xl-5 mx-5">
    <div class="p-3 pb-md-4 mx-auto text-center">
      <p class="fs-5 text-muted text-uppercase mx-5">Key Features</p>
      <h1 class="display-6 fw-normal">Experience the Benefits of <br> Our Telecommunication Health Services</h1>
    </div>

    <div class="row row-cols-1 row-cols-md-4">
      <div class="col mb-3">
        <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <i class='bx bx-plus-medical p-3 mb-3 border-green text-green rounded-circle shadow-sm fs-3'></i>
              <h4 class="card-title pricing-card-title">Enhanced Patient Engagement and Satisfaction</h4>
              <p class="fs-6 text-muted">Empower patients to participate in their healthcare journey through telecommunication health services.</p>
            </div>  
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <i class='bx bxs-capsule p-3 mb-3 border border-2 border-primary text-primary rounded-circle shadow-sm fs-3'></i>
              <h4 class="card-title pricing-card-title">Remote Consultations</h4>
              <p class="fs-6 text-muted">Access healthcare professionals from anywhere, eliminating the need for in-person visits.</p>
            </div>  
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <i class='bx bx-plus-medical p-3 mb-3 border-green text-green rounded-circle shadow-sm fs-3'></i>
              <h4 class="card-title pricing-card-title">Specialized Telehealth Services</h4>
              <p class="fs-6 text-muted">Collaborative care coordination between your primary care provider and specialists for comprehensive treatment plans.</p>
            </div>  
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <i class='bx bx-plus-medical p-3 mb-3 border border-2 border-primary text-primary rounded-circle shadow-sm fs-3'></i>
              <h4 class="card-title pricing-card-title">Scalable Telehealth Solutions for Healthcare Providers</h4>
              <p class="fs-6 text-muted">Customizable telehealth platforms tailored to the needs of individual healthcare practices.</p>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="padding-medium mt-xl-5 py-2">
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


  <section id="info" class="padding-medium mt-xl-5 mx-5">
    <div class="p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Telemedicine</h1>
      <p class="fs-5 text-muted">Bridging the gap between distance and healthcare accessibility.</p>
    </div>

    <div class="row mb-3">
      <div class="col-sm-12 col-md-8">
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-4">
            <div class="border border-success shadow-sm rounded-2 p-3">
              <div class="row">
                <div class="col-4 d-flex align-items-sm-start align-items-center justify-content-center">
                  <i class='bx bx-plus-medical p-3 bg-green text-white rounded-1 fs-3'></i>
                </div>
                <div class="col-8">
                  <h3 class="fw-normal">Doctor on Call</h3>
                  <p class="fs-6 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="border border-success shadow-sm rounded-2 p-3">
              <div class="row">
                <div class="col-4 d-flex align-items-sm-start align-items-center justify-content-center">
                  <i class='bx bxs-school p-3 border-green text-green rounded-1 shadow-sm fs-3'></i>
                </div>
                <div class="col-8">
                  <h3 class="fw-normal">Doctor on Call</h3>
                  <p class="fs-6 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="border border-success shadow-sm rounded-2 p-3">
              <div class="row">
                <div class="col-4 d-flex align-items-sm-start align-items-center justify-content-center">
                  <i class='bx bx-plus-medical p-3 border-green text-green rounded-1 shadow-sm fs-3'></i>
                </div>
                <div class="col-8">
                  <h3 class="fw-normal">Doctor on Call</h3>
                  <p class="fs-6 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="border border-success shadow-sm rounded-2 p-3">
              <div class="row">
                <div class="col-4 d-flex align-items-sm-start align-items-center justify-content-center">
                  <i class='bx bxs-capsule p-3 bg-green text-white rounded-1 fs-3'></i>
                </div>
                <div class="col-8">
                  <h3 class="fw-normal">Doctor on Call</h3>
                  <p class="fs-6 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-4 mb-4">
        <div class="d-flex flex-column justify-content-between bg-primary p-3 rounded-2 h-100 text-white">
          <div>
            <h4>Opening Hours</h4>
            <p class="fs-6 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?</p>
            <div class="d-flex justify-content-between border-bottom mb-2">
              <p class="mb-2">Mon - Fri</p>
              <p class="mb-2">7:00am - 6:00pm</p>
            </div>
            <div class="d-flex justify-content-between border-bottom mb-2">
              <p class="mb-2">Sat - Sun</p>
              <p class="mb-2">7:00am - 4:00pm</p>
            </div>
          </div>
          <div>
            <div>
              <button type="button" class="w-100 btn btn-lg btn-outline-light mt-2">Book Appointment</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="padding-medium mt-xl-5 py-2">
    <div class="container mb-4 pt-2">
      <div class="row align-items-center justify-content-center mt-xl-5">
        <div class="col-md-6 mt-5 mt-md-0">
          <div class="mb-3">
            <p class="text-secondary ">Learn more about us</p>
            <h2 class="display-6 fw-semibold">About Us</h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?
            Numquam minima cum asperiores deleniti possimus provident, officia itaque esse eius, delectus incidunt
            laudantium adipisci laboriosam!
          </p>
          <div class="d-flex align-items-center mb-4">
            <i class='bx bxs-message-square-check c-red'></i>
            <p class="ps-3 m-0">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
          </div>
          <div class="d-flex align-items-center mb-4">
            <i class='bx bxs-message-square-check c-red'></i>
            <p class="ps-3 m-0">Learn a skill of your choice from the experts around the world from various industries</p>
          </div>
          <div class="d-flex align-items-center mb-4">
            <i class='bx bxs-message-square-check c-red'></i>
            <p class="ps-3 m-0">Learn a skill of your choice from the experts around the world from various industries</p>
          </div>
          <a href="#" class="btn bg-green px-5 py-3 mt-4 link-light">Learn more</a>
        </div>
        <div class="offset-md-1 col-md-4">
          <img src="../assets/images/billboard-img.png" alt="img" class="img-fluid rounded-circle">
        </div>
      </div>
    </div>
  </section>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>