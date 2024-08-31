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
                <div class="row h-100">
                    <div class="col-12 col-md-8 p-2 shadow-sm h-auto">
                        <div id='calendar'></div>
                    </div>
                    <div class="col-12 col-md-4 p-3">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h3>April Event List</h3>
                            <button type="button" class=" btn btn-outline-primary">New Event</button>
                        </div>
                        <div class="row mb-3 border-bottom border-primary">
                            <div class="col-4">
                                <p>Start</p>
                            </div>
                            <div class="col-4 ">
                                <p>Title</p>
                            </div>
                            <div class="col-4">
                                <p>End</p>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom border-primary">
                            <div class="col-4">
                                <b>Apr 01</b>
                            </div>
                            <div class="col-4">
                                <p>Title</p>
                            </div>
                            <div class="col-4">
                                <p>Apr 01</p>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom border-primary">
                            <div class="col-4">
                                <b>Apr 18</b>
                            </div>
                            <div class="col-4">
                                <p>Title</p>
                            </div>
                            <div class="col-4">
                                <p>Apr 18</p>
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