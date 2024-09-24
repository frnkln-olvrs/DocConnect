<!DOCTYPE html>
<html lang="en">
<?php
  $title = 'Massage';
  include '../includes/head.php';
?>
<body class="pt-5 bg-white">
  <?php
    require_once ('../includes/header.php');
  ?>

  <section id="chat" class="padding-medium">
    <div class="d-flex h-100">
      <!-- Left Sidebar (Chats List) -->
      <div id="chat_sidepanel" class="d-flex flex-column bg-light border-end p-3" style="width: 25%;">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <span class="fs-5 fw-bold">Chats</span>
          <i class='bx bx-edit fs-4'></i>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control border-2" placeholder="Search">
        </div>
        <ul class="list-unstyled mb-0">
          <li class="mb-3">
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
              <img src="../assets/images/defualt_profile.png" alt="Profile" class="rounded-circle me-3" height="40" width="40">
              <div>
                <strong>Dr. Fname Lname</strong>
                <small class="d-block">Due to high blo...</small>
              </div>
              <small class="ms-auto text-muted">20m</small>
            </a>
          </li>
          <li class="mb-3">
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
              <img src="../assets/images/defualt_profile.png" alt="Profile" class="rounded-circle me-3" height="40" width="40">
              <div>
                <strong>Chat Bot</strong>
                <small class="d-block"></small>
              </div>
              <small class="ms-auto text-muted">40m</small>
            </a>
          </li>
          <!-- Add more chat items similarly -->
        </ul>
      </div>

      <!-- Chat Box -->
      <div id="chat_box" class="flex-grow-1 d-flex flex-column">
        <!-- Chat Header -->
        <div class="head border-bottom bg-light  py-3 px-3">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <img src="../assets/images/defualt_profile.png" alt="Profile" class="rounded-circle me-3" height="40" width="40">
              <span>Dr. Fname Lname</span>
            </div>
            <div>
              <i class='bx bx-dots-horizontal-rounded fs-4'></i>
            </div>
          </div>
        </div>

        <!-- Chat Messages -->
        <div class="body flex-grow-1 d-flex flex-column p-3 bg-light">
          <!-- Sent message -->
          <div class="d-flex align-items-end justify-content-start mb-3">
            <img src="../assets/images/defualt_profile.png" alt="Profile" class="rounded-circle me-3" height="30" width="30">
            <div class="bg-primary text-light p-2 rounded-3">
              Due to high blood
            </div>
          </div>

          <!-- Received message -->
          <div class="d-flex align-items-end justify-content-end mb-3">
            <div class="bg-secondary text-light p-2 rounded-3">
              OK?
            </div>
            <img src="../assets/images/defualt_profile.png" alt="Profile" class="rounded-circle ms-3" height="30" width="30">
          </div>

          <!-- Additional messages -->
          <!-- Add more messages similarly -->
        </div>

        <!-- Chat Input -->
        <div class="chat_input d-flex align-items-center p-3 border-top bg-light">
          <input type="text" class="form-control border-2 text-dark rounded-pill me-3" placeholder="Aa">
          <button class="btn btn-light d-flex justify-content-center">
            <i class='bx bx-send text-datrk fs-4'></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- <?php
    require_once ('../includes/footer.php');
  ?> -->

</body>
</html>
