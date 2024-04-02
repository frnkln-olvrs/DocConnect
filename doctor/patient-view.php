<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Patients';
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
                <div class="p-0 m-0 row">
                    <div class="col-12 pt-2 mt-4 mb-3 border-bottom">
                        <p class="m-0 p-0 fs-5 text-dark fw-semibold">Jane Smith</p>
                        <p class="m-0 p-0 fs-6 text-secondary fw-semibold">Age: <span class="text-dark">30</span></p>
                        <p class="m-0 p-0 fs-6 text-secondary fw-semibold">Date of Birth: <span class="text-dark">March 3, 1994</span></p>
                        <p class="m-0 p-0 fs-6 text-secondary fw-semibold">Address: <span class="text-dark">101 KCC Mall, Guiwan, Zamboanga City</span></p>
                        <p class="m-0 p-0 fs- text-secondary fw-semibold">Contact: <span class="text-dark">09774513378</span></p>
                        <p class="m-0 p-0 fs- text-secondary fw-semibold  mb-3">Email: <span class="text-dark">janesmith@gmail.com</span></p>
                        <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Parent | Guardian</p>
                        <p class="m-0 p-0 fs- text-secondary fw-semibold">Name: <span class="text-dark">Josh Smith</span></p>
                        <p class="m-0 p-0 fs- text-secondary fw-semibold mb-3">Contact: <span class="text-dark">09224517374</span></p>
                    </div>
                    <div class="col-6 mb-3">
                        <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Medical History</p>
                        <p class="m-0 p-0 fs-6 text-dark">- Hypertension (diagnosed in 2010)</p>
                        <p class="m-0 p-0 fs-6 text-dark">- Hyperlipidemia (diagnosed in 2015)</p>
                    </div>
                    <div class="col-6 mb-3">
                        <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Allegies</p>
                        <p class="m-0 p-0 fs-6 text-dark">- Peanuts (anaphylactic reaction)</p>
                    </div>
                    <div class=" col-6 mb-3">
                        <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Medications</p>
                        <p class="m-0 p-0 fs-6 text-dark">- Lisinopril (blood pressure) - 10 mg daily</p>
                        <p class="m-0 p-0 fs-6 text-dark">- Atorvastatin (cholesterol) - 20 mg daily</p>
                    </div>
                    <div class=" col-6 mb-3">
                        <p class="m-0 p-0 fs-6 fw-semibold text-dark mb-2">Immunizations</p>
                        <p class="m-0 p-0 fs-6 text-dark">- Influenza Vaccine</p>
                        <p class="m-0 p-0 fs-6 text-dark">- Tetanus-diphtheria-pertussis</p>
                    </div>
                    <div class="col-12 pt-2 border-top">
                        <p class="m-0 p-0 fs-6 text-dark fw-semibold mb-2">Prescriptions</p>
                        <div class="mb-2">
                            <p class="m-0 p-0 fs-6 text-secondary">Drug: <span class="text-dark">Amoxicillin</span></p>
                            <p class="m-0 p-0 fs-6 text-secondary">Dosage: <span class="text-dark">10 mg</span></p>
                            <p class="m-0 p-0 fs-6 text-secondary">Instruction: <span class="text-dark">Take 1 capsule orally every 8 hours for 10 days.</span></p>
                        </div>
                        <div class="mb-2">
                            <p class="m-0 p-0 fs-6 text-secondary">Drug: <span class="text-dark">Loratadine</span></p>
                            <p class="m-0 p-0 fs-6 text-secondary">Dosage: <span class="text-dark">500 mg</span></p>
                            <p class="m-0 p-0 fs-6 text-secondary">Instruction: <span class="text-dark">Take 1 tablet orally once daily as needed for allergy symptoms.</span></p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>