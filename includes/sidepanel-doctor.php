<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block border-end sidebar collapse min-vh-100 p-0">
    <div class="position-sticky pt-3">
        <div class="pt-1 pb-2 mb-2 border-bottom d-flex align-items-center flex-column">
            <img src="../assets/images/defualt_profile.png" alt="" height="100" width="100" class="rounded rounded-circle border border-2 border-primary mb-2">
            <p class="h5 text-dark fw-semibold">Dr. John Doe</p>
            <p class="h6 text-secondary">Medical Practitioner</p>
        </div>
        <ul class="nav doctors_nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-dark <?= $dashboard ?>" href="../doctor/index">
                    <i class='bx bx-bar-chart-square me-2'></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark <?= $profile ?>" href="../doctor/profile">
                    <i class='bx bxs-user-detail me-2'></i>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark <?= $patient ?>" href="../doctor/patients">
                    <i class='bx bx-group me-2'></i>
                    Patients
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark <?= $chat ?>" href="../doctor/chats">
                    <i class='bx bx-chat me-2'></i>
                    Chats
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark <?= $notification ?>" href="../doctor/notifications">
                    <i class='bx bx-bell me-2'></i>
                    Notification
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark <?= $setting ?>" href="../doctor/settings_profile">
                    <i class='bx bx-cog me-2'></i>
                    Settings
                </a>
            </li>
        </ul>
    </div>
</nav>