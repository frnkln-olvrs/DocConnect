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
              <button class="btn btn-primary rounded-2 px-3 py-2 position-absolute align-items-center m-1 end-0">
                <i class='bx bx-search text-white' width="22px" height="22px"></i>
              </button>
            </form>

          </div>
        </div>
        <div class="col-md-6 mt-5">
          <img src="../img/billboard-img.jpg" alt="img" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="padding-medium mt-xl-5">
    <div class="container">
      <div class="row align-items-center mt-xl-5">
        <div class="col-md-5 mt-5 mt-md-0">
          <div class="mb-3">
            <p class="text-secondary ">Learn more about us</p>
            <h2 class="display-6 fw-semibold">About Us</h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?
            Numquam minima cum asperiores deleniti possimus provident, officia itaque esse eius, delectus incidunt
            laudantium adipisci laboriosam!
          </p>
          <div class="d-flex">
            <i class='bx bxs-message-square-check' width="22px" height="22px"></i>
            <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
          </div>
          <div class="d-flex">
            <i class='bx bxs-message-square-check' width="22px" height="22px"></i>
            <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
          </div>
          <div class="d-flex">
            <i class='bx bxs-message-square-check' width="22px" height="22px"></i>
            <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
          </div>
          <a href="about.html" class="btn btn-primary px-5 py-3 mt-4">Learn more</a>
        </div>
        <div class="offset-md-1 col-md-5">
          <img src="./img/billboard-img.jpg" alt="img" class="img-fluid rounded-circle">
        </div>
      </div>
    </div>
  </section>

</body>
</html>