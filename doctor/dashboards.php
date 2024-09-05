<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Dashboard';
include '../includes/head.php';
?>

<body>
    <?php
    require_once('../includes/header-doctor.php');
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
            require_once('../includes/sidepanel-doctor.php');
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10">
            <h1 style="text-align: left;">Dashboard</h1>

            <div class="container" style="max-width: 800px; margin-left: -15px;">
                <div class="row flex-md-nowrap row-cols-1 row-cols-md-3 mx-0 mx-md-3 mb-4">
                    <div class="mx-0 mx-md-2 p-3 text-white rounded-3 mb-3 mb-md-0" style="background: linear-gradient(to right, #0D7C47, #0EA75D, #21BF73);">
                        <div class="row g-3">
                            <p>Todays Patients</p>
                            <div class="col-6 d-flex align-items-end justify-content-start">
                            <i class='bx bx-user-vector' style="font-size: 40px;"></i>
                            </div>
                            <div class="col-6 text-end">
                                <p class="fs-1 m-0">1,100</p>
                            </div>
                        </div>
                    </div>

                    <div class="mx-0 mx-md-2 p-3 text-white rounded-3 mb-3 mb-md-0" style="background: linear-gradient(to right, #8D0A17, #CE3D4B, #E22D3F);">
                        <div class="row g-3">
                            <p>Appointments</p>
                            <div class="col-6 d-flex align-items-end justify-content-start">
                                <i class='bx bx-clipboard-check' style="font-size: 40px;"></i>
                            </div>
                            <div class="col-6 text-end">
                                <p class="fs-1 m-0">35</p>
                                
                            </div>
                        </div>
                    </div>

                    <div class="mx-0 mx-md-2 p-3 text-white rounded-3 mb-3 mb-md-0" style="background: linear-gradient(to right, #923254, #923254, #DA4A7E);">
                        <div class="row g-3">
                            <p>Online Appointment</p>
                            <div class="col-6 d-flex align-items-end justify-content-start">
                            <i class='bx bx-person-lines-fill' style="font-size: 40px;"></i>

                            </div>
                            <div class="col-6 text-end">
                                <p class="fs-1 m-0">659</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </main>
        </div>
    </div>
</body>

<script src="../js/calender.js"></script>

</html>