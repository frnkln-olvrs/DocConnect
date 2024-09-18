<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Dashboard';
$dashboard = 'active';
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
            <main class="col-md-9 ms-sm-auto col-lg-10 bg-light">
                <div class="container my-4">
                    <div class="row">
                        <!-- Overview Cards -->
                        <div class="col-md-4 col-12 d-flex align-items-stretch mb-4">
                            <div class="card overview border-0 text-start d-flex justify-content-center p-3 w-100">
                                <div class="d-flex flex-sm-row flex-md-column flex-lg-row justify-content-center align-items-center">
                                    <div class="card-title">
                                        <div class="border border-5 rounded-5 border-primary me-3">
                                            <i class='bx bxs-user display-3 p-3 text-primary'></i>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <p class="card-title mb-0">Total Patients</p>
                                        <p class="card-text display-6 mb-0">2000+</p>
                                        <p class="text-muted">Till Today</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12 d-flex align-items-stretch mb-4">
                            <div class="card overview border-0 text-start d-flex justify-content-center p-3 w-100">
                                <div class="d-flex flex-sm-row flex-md-column flex-lg-row justify-content-center align-items-center">
                                    <div class="card-title">
                                        <div class="border border-5 rounded-5 border-primary me-3">
                                            <i class='bx bxs-user-plus display-3 p-3 text-primary'></i>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <p class="card-title mb-0">Today Patients</p>
                                        <p class="card-text display-6 mb-0">68</p>
                                        <p class="text-muted">Sep 18 2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12 d-flex align-items-stretch mb-4">
                            <div class="card overview border-0 text-start d-flex justify-content-center p-3 w-100">
                                <div class="d-flex flex-sm-row flex-md-column flex-lg-row justify-content-center align-items-center">
                                    <div class="card-title">
                                        <div class="border border-5 rounded-5 border-primary me-3">
                                            <i class='bx bxs-calendar display-3 p-3 text-primary'></i>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <p class="card-title mb-0">Today Appointments</p>
                                        <p class="card-text display-6 mb-0">85</p>
                                        <p class="text-muted">Sep 18 2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chart and Appointments -->
                    <div class="card chart_appointment border-0 mb-4">
                        <div class="row g-0">
                            <div class="col-md-6 d-flex">
                                <div class="card bg-transparent border-0 flex-fill">
                                    <div class="card-body">
                                        <h5 class="card-title">Patients Summary September 2024</h5>
                                        <canvas id="patientSummaryChart" width="350" height="350"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex">
                                <div class="card next_patient border-0 w-100 m-4">
                                    <div class="card-body">
                                        <h5 class="card-title">Next Patient Details</h5>
                                        <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-start">
                                            <div class="mb-2 mb-lg-0">
                                                <img src="../assets/images/66e7db42336204.60963457.jpg" class="rounded-circle" width="80" height="80" alt="Patient Profile">
                                            </div>
                                            <div class="ms-3">
                                                <h6>Bruce Willis - <span class="text-primary">Health Checkup</span></h6>
                                                <p>Patient ID: 2021-00001</p>
                                                <p>D.O.B: 15 January 1999 | Sex: Male | Weight: 59 kg</p>
                                                <p>Last Appointment: Sep 29 2024</p>
                                                <p>Height: 172 cm | Reg. Date: Sep 11 2024</p>
                                                <button class="btn btn-outline-primary btn-sm">Document</button>
                                                <button class="btn btn-outline-secondary btn-sm">Chat</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Next Patient and Prescriptions -->
                    <div class="row d-flex">
                        <div class="col-md-6 mb-4 d-flex">
                            <div class="card border-primary flex-fill">
                                <div class="card-body">
                                    <h5 class="card-title">Today Appointments</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            M.J. Mical - Health Checkup <span>On Going</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Sanath Deo - Health Checkup <span>12:30 PM</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Loeara Phanj - Report <span>1:00 PM</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Komola Haris - Common Cold <span>1:30 PM</span>
                                        </li>
                                        <a href="#" class="text-center mt-3">See All</a>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Appointment Request and Calendar -->
                        <div class="col-md-6 mb-4 d-flex">
                            <div class="card w-100 h-100 border-primary">
                                <div class="card-body">
                                    <h5 class="card-title">Appointment Requests</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Maria Sarafat - Cold <span class="badge bg-success">Approved</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Jhon Deo - Over Swing <span class="badge bg-warning">Pending</span>
                                        </li>
                                        <a href="#" class="text-center mt-3">See All</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CALENDAR -->
                     <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Calendar - December 2021</h5>
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Chart.js script for pie chart -->
    <script src="../js/calender.js"></script>
    <script src="../js/dashboard-donutChart.js"></script>

</body>

</html>
