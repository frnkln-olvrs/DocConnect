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
          <h2 class="display-1 text-uppercase text-light">Master Your Skills Online</h2>
          <p class="fs-4 my-4 pb-2">Online Courses Taught by Industry Titans!</p>
          <div>
            <form id="form" class="d-flex align-items-center position-relative ">
              <input type="text" name="email" placeholder="what are you trying to learn?"
                class="form-control bg-white border-0 rounded-4 shadow-none px-4 py-3 w-100">
              <button class="btn btn-primary rounded-4 px-3 py-2 position-absolute align-items-center m-1 end-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                  <use href="#search" />
                </svg>
              </button>
            </form>

          </div>
        </div>
        <div class="col-md-6 mt-5">
          <img src="images/billboard-img.jpg" alt="img" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
</body>
</html>