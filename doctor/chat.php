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

<div class="col-md-10 mt-4">
                <div class="chat-container border rounded p-3">
                    <div class="chat-messages mb-3" style="height: 500px; overflow-y: auto;">
                        <div class="message doctor mb-2">
                            <i class='bx bx-user profile-icon'></i>
                            <!-- <img src="path/to/patient-profile.jpg" alt="Patient Profile"> -->
                            <div class="message-content">
                                <strong>Doctor:</strong>
                                <p>Hello, how can I assist you today?</p>
                            </div>
                        </div>
                        <div class="message patient mb-2">
                            <i class='bx bx-user profile-icon'></i>
                            <!-- <img src="path/to/patient-profile.jpg" alt="Patient Profile"> -->
                            <div class="message-content">
                                <strong>Patient:</strong>
                                <p>I have a question about my medication.</p>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type your message here" aria-label="Message">
                        <button class="btn-icon ms-2" type="button">
                            <i class='bx bx-send'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>
