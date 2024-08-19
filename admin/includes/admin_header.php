<header class="p-3 border-bottom bg-green shadow-sm position-fixed w-100 z-3 border-bottom-0">
  <div class="mx-1 mx-lg-3">
    <div class="d-flex flex-wrap justify-content-between">
      <a class="d-flex align-items-center text-dark text-decoration-none" href="./index">
        <img src="../assets/images/logo.png" class="me-2" alt="Logo" height="32">
        <h1 class="fs-4 link-light m-0 d-name">Doc<span class="link-light">Connect</span></h1>
		  </a>

      <div class="d-flex align-items-center justify-content-between">
        <div class="dropdown me-3">
          <a href="#" class="notification dropdown-toggle text-decoration-none text-dark" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class='bx bx-bell fs-5 text-white'></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="notificationDropdown">
            <li class="dropdown-item d-flex align-items-center">
              <i class='bx bx-check-circle me-2 fs-2 text-success'></i>
              <div>
                <div class="fw-bold">Operation Successful</div>
                <small class="text-muted">Your request was processed successfully.</small>
              </div>
            </li>
            <li class="dropdown-item d-flex align-items-center">
              <i class='bx bx-x-circle me-2 fs-2 text-danger'></i>
              <div>
                <div class="fw-bold">Operation Failed</div>
                <small class="text-muted">There was an error processing your request.</small>
              </div>
            </li>
            <li class="dropdown-item d-flex align-items-center">
              <i class='bx bx-error-circle me-2 fs-2 text-warning' ></i>
              <div>
                <div class="fw-bold">Warning</div>
                <small class="text-muted">Please check the details carefully.</small>
              </div>
            </li>
            <li class="dropdown-item d-flex align-items-center">
              <i class='bx bx-info-circle me-2 fs-2 text-info' ></i>
              <div>
                <div class="fw-bold">Information</div>
                <small class="text-muted">Here is some important information.</small>
              </div>
            </li>
            <li class="dropdown-item d-flex align-items-center">
              <i class='bx bx-alarm me-2 fs-2 text-warning' ></i>
              <div>
                <div class="fw-bold">Reminder.</div>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small>
              </div>
            </li>
            <li class="dropdown-item d-flex align-items-center">
              <i class='bx bx-envelope me-2 fs-2 text-blue' ></i>
              <div>
                <div class="fw-bold">LMessage</div>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small>
              </div>
            </li>

            <!-- <li class="dropdown-item d-flex align-items-center">
              <div>
                <div class="fw-bold">Lorem, ipsum dolor.</div>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small>
              </div>
              <div class="ms-auto text-success">Success</div>
            </li>
            <li class="dropdown-item d-flex align-items-center">
              <span class="icon me-2"></span>
              <div>
                <div class="fw-bold">Lorem, ipsum dolor.</div>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small>
              </div>
              <div class="ms-auto text-danger">Failed</div>
            </li> -->
            <!-- Add more notifications as needed -->
            <li class="dropdown-item text-center fw-bold text-primary">
              <a href="#">Show All Activities</a>
            </li>
          </ul>
        </div>

        <div class="dropdown text-end">
          <a href="#" class="acc d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="./../assets/images/profile_img.jpg" alt="mdo" width="32" height="32" class="rounded-circle border border-2 border-light">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</header>