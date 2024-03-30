<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'Home';
	include './includes/head.php';
?>
<body>
  <?php 
    require_once ('./includes/header.php');
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
              <button class="btn btn-green rounded-2 px-3 py-2 position-absolute align-items-center m-1 end-0">
                <i class='bx bx-search text-white' width="22px" height="22px"></i>
              </button>
            </form>

          </div>
        </div>
        <div class="col-md-6 mt-5">
          <img src="./img/billboard-img.png" alt="img" class="img-fluid rounded-circle">
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="padding-medium mt-xl-5">
    <div class="container my-4">
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
          <a href="about.html" class="btn btn-green px-5 py-3 mt-4 link-light">Learn more</a>
        </div>
        <div class="offset-md-1 col-md-4">
          <img src="./img/billboard-img.png" alt="img" class="img-fluid rounded-circle">
        </div>
      </div>
    </div>
  </section>

  <section id="info" class="container py-3">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Pricing</h1>
      <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
    </div>
  </section>

<footer class="pt-4 my-md-5 pt-md-5 border-top">
  <h1 class="d-flex justify-content-center">FOOTER</h1>
</footer>

</body>
</html>