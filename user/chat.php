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

        <div class="body d-flex flex-column justify-content-end bg-light p-2">
          <div class="d-flex align-items-end mb-2">
            <div class="bg-secondary-subtle p-2 me-3 rounded-5">
              <i class='bx bxs-bot fs-3 text-primary'></i>
            </div>
            <div id="chat_text" class="bg-secondary-subtle p-2 rounded-3">
              <p class="fw-light mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?</p>
            </div>
          </div>
          <div class="d-flex justify-content-end align-items-end">
            <div id="chat_text" class="bg-secondary-subtle p-2 rounded-3">
              <p class="fw-light mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?</p>
            </div>
            <div class="bg-secondary-subtle p-2 ms-3 rounded-5">
              <i class='bx bxs-bot fs-3 text-primary'></i>
            </div>
          </div>
        </div>

        <div class="chat_input pt-4 d-flex justify-content-end align-items-center p-2 bg-light">
          <input type="text" name="" id="" placeholder="Aa" class="p-2 ps-4 rounded-5 w-100 fs-6 bg-secondary-subtle">
          <button class="bg-light" ><i class='bx bx-send text-dark ps-3 pe-1 fs-4' ></i></button>
        </div>
      </div>
    </div>
  </section>

  <!-- <?php
    require_once ('../includes/footer.php');
  ?> -->

</body>
</html>