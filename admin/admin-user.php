<html lang="en">
<?php 
  $title = 'Admin | Users';
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

  <section id="users">
    <h1 class="text-center my-3">Users</h1>

    <div class="container text-center mt-5 px-5">
      <ul class="list-group">
        <a href="#">
          <li class="list-group-item my-2 p-2 border-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-1">
                <i class='bx bx-user-pin text-danger' ></i>
              </div>
              <div class="col-10 text-start ms-3 w-25">
                <p class="fs-3 mb-0">Doctors Accounts</p>
              </div>
              <div class="col-1">
                <i class='bx bx-chevron-right'></i>
              </div>
            </div>
          </li>
        </a>

        <a href="#">
          <li class="list-group-item my-2 p-2 border-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-1">
                <i class='bx bx-user text-danger'></i>
              </div>
              <div class="col-10 text-start ms-3 w-25">
                <p class="fs-3 mb-0">Patients Accounts</p>
              </div>
              <div class="col-1">
                <i class='bx bx-chevron-right'></i>
              </div>
            </div>
          </li>
        </a>
      </ul>
    </div>


  </section>

</body>
</html>