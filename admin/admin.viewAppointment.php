<html lang="en">
<?php
  $title = 'Campuses | Campus A';
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

  <section id="add_campus" class="page-container">
    <div class="row">

      <div class="col-2"></div>

      <div class="col-8">
        <form>
          <div class="border shadow p-3 mb-5 bg-body rounded">
            <h5 class="text-center">Status: <span class="text-success"> Completed</span></h5>

            <hr class="mx-3 my-2">



          </div>
        </form>

      </div>

      <div class="col-2"></div>

    </div>

    
  </section>

</body>
</html>
