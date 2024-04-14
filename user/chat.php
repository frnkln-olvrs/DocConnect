<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'Appointment';
	include '../includes/head.php';
?>
<body class="pt-5">
  <?php 
    require_once ('../includes/header.php');
  ?>

  <section id="chat" class="padding-medium">
    <div class="d-flex flex-column flex-shrink-0 bg-light h-100 border-end" style="width: 4.5rem;">
      <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <li class="nav-item">
          <a href="#" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="chatbot">
            <i class='bx bxs-bot'></i>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link py-3 border-bottom rounded-0" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="chatdoc">
            <i class='bx bxs-user-plus'></i>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>