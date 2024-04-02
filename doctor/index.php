<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Profile';
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="p-3 mt-4 mb-3 border border-1">
                    <p class="m-0 p-0 fs-5 text-dark fw-semibold">Dr. John Doe</p>
                    <p class="m-0 p-0 hs-6 text-secondary mb-3">Medical Practitioner</p>
                    <div class="pt-2 mb-3 border-top">
                        <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">About</p>
                        <p class="m-0 p-0 fs-6 text-dark">As a medical practitioner, I provide compassionate healthcare with expertise in diagnosing, treating, and preventing illnesses and injuries. My patient-centered approach emphasizes trust, communication, and personalized treatment plans. I am dedicated to staying updated on medical advancements to ensure the highest standard of care. I'm passionate about health education and disease prevention, aiming to empower patients for long-term wellness.</p>
                    </div>
                </div>
                <div class="p-3 mt-4 mb-3 border border-1">
                    <div class="mb-2 d-flex flex-row justify-content-between">
                        <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Availability for this Week</p>
                        <a href="" class="m-0 p-0 fs-6 fw-normal text-primary text-decoration-underline mb-2">Update Schedule</a>
                    </div>
                    <div class="d-flex flex-nowrap justify-content-between">
                        <div class="p-2 border border-1 border-secondary-subtle mx-1 flex-grow-1 ">
                            <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Monday</p>
                            <p class="m-0 p-0 fs-6 fw-regular text-dark mb-2">01/04/2024 <br> 9:30AM - 12:00PM</p>
                        </div>
                        <div class="p-2 border border-1 border-secondary-subtle mx-1 flex-grow-1 ">
                            <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Tuesday</p>
                            <p class="m-0 p-0 fs-6 fw-regular text-dark mb-2">02/04/2024 <br> 9:30AM - 12:00PM</p>
                        </div>
                        <div class="p-2 border border-1 border-secondary-subtle  mx-1 flex-grow-1 ">
                            <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Wednesday</p>
                            <p class="m-0 p-0 fs-6 fw-regular text-dark mb-2">03/04/2024 <br> 9:30AM - 12:00PM</p>
                        </div>
                        <div class="p-2 border border-1 border-secondary-subtle mx-1 flex-grow-1 ">
                            <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Thursday </p>
                            <p class="m-0 p-0 fs-6 fw-regular text-dark mb-2">04/04/2024 <br> 9:30AM - 12:00PM</p>
                        </div>
                        <div class="p-2 border border-1 border-secondary-subtle mx-1 flex-grow-1 ">
                            <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Friday </p>
                            <p class="m-0 p-0 fs-6 fw-regular text-dark mb-2">05/04/2024 <br> 9:30AM - 12:00PM</p>
                        </div>
                        <div class="p-2 border border-1 border-secondary-subtle mx-1 flex-grow-1 ">
                            <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Saturday </p>
                            <p class="m-0 p-0 fs-6 fw-regular text-dark mb-2">06/04/2024 <br> Not Available</p>
                        </div>
                        <div class="p-2 border border-1 border-secondary-subtle mx-1 flex-grow-1 ">
                            <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Sunday </p>
                            <p class="m-0 p-0 fs-6 fw-regular text-dark mb-2">07/04/2024 <br> Not Available</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>