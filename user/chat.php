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
    <div class="d-flex h-100">
      <div id="chat_sidepanel" class="d-flex flex-column flex-shrink-0 bg-light h-100 border-end border-primary" style="width: 4.5rem;">
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
          <li class="nav-item">
            <a href="#" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="chatbot">
              <i class='bx bxs-bot fs-3'></i>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="chatdoc">
              <i class='bx bxs-user-plus fs-3'></i>
            </a>
          </li>
        </ul>
      </div>

      <div id="chat_box" class="w-100">
        <div class="head border-bottom bg-green py-3 px-2">
          <div class="d-flex justify-content-between align-items-center">
            <span class="ms-2 text-light" >Chat with Bot</span>
            <i class='bx bx-dots-horizontal-rounded fs-3 text-light me-3' ></i>
          </div>
        </div>

        <div class="body bg-dark">
          dasd
        </div>

        <div class="chat_input p-2">
          <input type="text" name="" id="">
        </div>
      </div>
    </div>
  </section>

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>