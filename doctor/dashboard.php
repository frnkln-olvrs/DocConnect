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
            <main class="col-md-9 ms-sm-auto col-lg-10">
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
                    <div class="card chart_appointment border-0">
                        <div class="row g-0">
                            <div class="col-md-6 d-flex">
                                <div class="card bg-transparent border-0 flex-fill">
                                    <div class="card-body">
                                        <h5 class="card-title">Patients Summary December 2021</h5>
                                        <canvas id="patientSummaryChart" width="350" height="350"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex">
                                <div class="card border-primary flex-fill m-4">
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
                        </div>
                    </div>


                    
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Chart.js script for pie chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('patientSummaryChart').getContext('2d');
        var patientSummaryChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['New Patients', 'Old Patients', 'Total Patients'],
                datasets: [{
                    data: [30, 70, 100],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>

</html>
