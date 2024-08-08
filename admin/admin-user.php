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

  <section id="dashboard">
    <h1 class="text-center my-3">Users</h1>

    <div class="container text-center mt-5 px-5">
      <ul class="list-group">
        <a href="#">
          <li class="list-group-item my-2 py-2 px-5 border-0">
            <div class="row align-items-center">
              <div class="col-1">
                <i class='bx bx-user-pin' ></i>
              </div>
              <div class="col-10">
                Doctors Accounts
              </div>
              <div class="col-1">
                <i class='bx bx-chevron-right'></i>
              </div>
            </div>
          </li>
        </a>

        <a href="#">
          <li class="list-group-item my-2 p-3">
            <div class="row">
              <div class="col-1">
                <i class='bx bx-user'></i>
              </div>
              <div class="col-10">
                Patients Accounts
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