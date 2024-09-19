<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Profile';
$profile = 'active';
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
            <main class="col-md-9 ms-sm-auto col-lg-10 p-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="../assets/gallery/66dd9fea898031.89869755.png" alt="Doctor's profile image" class="rounded-circle me-3" height="80" width="80">
                            <div>
                                <h5 class="card-title">Dr. John Doe</h5>
                                <p class="text-muted mb-0">Medical Practitioner</p>
                                <div class="d-flex align-items-center">
                                    <!-- <span class="text-primary me-2">★★★★★</span>
                                    <a href="#" class="text-decoration-none">More</a> -->
                                </div>
                            </div>
                            <div class="ms-auto">
                                <button class="btn btn-primary text-light">Make appointment</button>
                                <button class="btn btn-link text-muted"><i class='bx bx-dots-horizontal-rounded'></i></button>
                            </div>
                        </div>
                        <ul class="nav nav-tabs mt-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Opinions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Experience</a>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <h6>About specialist</h6>
                            <p>Orthopedist. He treats injuries and chronic musculoskeletal ailments. Especially in athletes, but not only...</p>
                            <a href="#" class="text-decoration-none">Read more</a>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h6>Services and price list</h6>
                                <ul class="list-unstyled">
                                    <li>Orthopedic consultation - $220</li>
                                    <li>Delivery blocks - $220</li>
                                    <li>Ultrasound injection - $220</li>
                                </ul>
                                <a href="#" class="text-decoration-none">Read more</a>
                            </div>
                            <div class="col-md-6">
                                <h6>Diseases treated</h6>
                                <ul class="list-unstyled">
                                    <li>Orthopedic consultation</li>
                                    <li>Delivery blocks</li>
                                    <li>Ultrasound injection</li>
                                </ul>
                                <a href="#" class="text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-body">
                        <h6 class="mb-2">Availability</h6>
                        <div class="d-flex flex-wrap">
                            <div class="card me-2 mb-2">
                                <div class="card-body p-2">
                                    <small>Wed Jun 16</small>
                                    <p class="mb-0">4:00 PM</p>
                                </div>
                            </div>
                            <div class="card me-2 mb-2">
                                <div class="card-body p-2">
                                    <small>Wed Jun 16</small>
                                    <p class="mb-0">6:00 PM</p>
                                </div>
                            </div>
                            <div class="card me-2 mb-2">
                                <div class="card-body p-2">
                                    <small>Thu Jun 17</small>
                                    <p class="mb-0">8:00 AM</p>
                                </div>
                            </div>
                            <div class="card me-2 mb-2">
                                <div class="card-body p-2">
                                    <small>Thu Jun 17</small>
                                    <p class="mb-0">10:30 AM</p>
                                </div>
                            </div>
                            <!-- Additional availability cards can be added similarly -->
                        </div>
                    </div>
                </div>  
            </main>
        </div>
    </div>
</body>

</html>