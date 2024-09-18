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
                        <div class="col-md-4 col-12 d-flex align-items-stretch">
                            <div class="card overview border-0 text-start d-flex justify-content-center p-3 w-100">
                                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
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

                        <div class="col-md-4 col-12 d-flex align-items-stretch">
                            <div class="card overview border-0 text-start d-flex justify-content-center p-3 w-100">
                                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
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

                        <div class="col-md-4 col-12 d-flex align-items-stretch">
                            <div class="card overview border-0 text-start d-flex justify-content-center p-3 w-100">
                                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
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
            type: 'pie',
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
