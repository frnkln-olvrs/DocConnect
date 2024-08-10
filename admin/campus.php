<html lang="en">
<?php 
  $title = 'Admin | Campuses';
	include './includes/admin_head.php';
  function getCurrentPage() {
    return basename($_SERVER['PHP_SELF']);
  }
?>
<body>
  <?php 
    require_once ('./includes/admin_header.php');
  ?>
  <?php 
    require_once ('./includes/admin_sidepanel.php');
  ?>

  <section id="campus">
    <h1 class="text-center my-3">Campuses</h1>

    <div class="row row-cols-1 row-cols-md-2 mx-1 mx-md-5">
      <div class="col p-0 mb-3">
        <a href="#" class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <img src="../assets/images/bg-1.png" alt="" class="w-100 rounded-2">
              <div class="d-flex mt-2 align-items-center">
                <i class='bx bxs-school fs-2'></i>
                <p class="m-0 ms-3 fs-4">Campus A</p>
              </div>
              <div class="d-flex mt-2 align-items-center">
                <i class='bx bxs-map fs-2'></i>
                <p class="m-0 ms-3 fs-4 text-start">Location</p>
              </div>
            </div>  
          </div>
        </a>
      </div>

      <div class="col p-0 mb-3">
        <a href="#" class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <img src="../assets/images/bg-1.png" alt="" class="w-100 rounded-2">
              <div class="d-flex mt-2 align-items-center">
                <i class='bx bxs-school fs-2'></i>
                <p class="m-0 ms-3 fs-4">Campus B</p>
              </div>
              <div class="d-flex mt-2 align-items-center">
                <i class='bx bxs-map fs-2'></i>
                <p class="m-0 ms-3 fs-4 text-start">Location</p>
              </div>
            </div>  
          </div>
        </a>
      </div>

      <div class="col p-0 mb-3">
        <a href="#" class="card mx-3 mb-sm-3 rounded-3 shadow-sm h-100">
          <div class="card-body d-flex flex-column justify-content-between shadow-sm">
            <div class="align-content-center text-center">
              <img src="../assets/images/bg-1.png" alt="" class="w-100 rounded-2">
              <div class="d-flex mt-2 align-items-center">
                <i class='bx bxs-school fs-2'></i>
                <p class="m-0 ms-3 fs-4">Campus C</p>
              </div>
              <div class="d-flex mt-2 align-items-center">
                <i class='bx bxs-map fs-2'></i>
                <p class="m-0 ms-3 fs-4 text-start">Location</p>
              </div>
            </div>  
          </div>
        </a>
      </div>
    </div>
  </section>

</body>
</html>