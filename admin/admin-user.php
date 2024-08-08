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
        <a href="#" class="d-flex justify-content-center">
          <li class="list-group-item my-2 p-2 border-0 w-75">
            <div class="row align-items-center justify-content-center">
              <div class="col-2 p-0">
                <i class='bx bx-user-pin text-danger' ></i>
              </div>
              <div class="col-9 text-start w-75">
                <p class="fs-3 mb-0">Doctors Accounts</p>
              </div>
              <div class="col-1 p-0">
                <i class='bx bx-chevron-right fs-1'></i>
              </div>
            </div>
          </li>
        </a>

        <a href="#" class="d-flex justify-content-center">
          <li class="list-group-item my-2 p-2 border-0 w-75">
            <div class="row align-items-center justify-content-center">
              <div class="col-2 p-0">
                <i class='bx bx-user text-danger'></i>
              </div>
              <div class="col-9 text-start w-75">
                <p class="fs-3 mb-0">Patients Accounts</p>
              </div>
              <div class="col-1 p-0">
                <i class='bx bx-chevron-right fs-1'></i>
              </div>
            </div>
          </li>
        </a>
      </ul>
    </div>


  </section>

</body>
</html>