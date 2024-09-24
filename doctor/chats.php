<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Chats';
$chat = 'active';
include '../includes/head.php';
?>

<body>
    <?php
    require_once('../includes/header-doctor.php');
    ?>
    <div class="container-fluid">
        <div class="row" style="height: 89vh;">
            <?php
            require_once('../includes/sidepanel-doctor.php');
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 p-0" style="height: 100%;">
                <div class="container-fluid h-100">
                    <div class="row h-100">
                        <div class="col-3 p-0 h-100">
                            <div class="card rounded-0 border-0 border-end h-100">
                                <div class="card-header">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <ul class="list-group list-group-flush" style="height: calc(100% - 56px); overflow-y: auto;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/defualt_profile.png" class="rounded-circle me-2" alt="User" height="40" width="40">
                                            <div>
                                                <h6 class="mb-0">Dr. Fname Lname</h6>
                                                <small class="text-muted">Due to high blo...</small>
                                            </div>
                                        </div>
                                        <small class="text-muted">20m</small>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/defualt_profile.png" class="rounded-circle me-2" alt="User" height="40" width="40">
                                            <div>
                                                <h6 class="mb-0">Chat Bot</h6>
                                                <small class="text-muted">How can I assist?</small>
                                            </div>
                                        </div>
                                        <small class="text-muted">40m</small>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-9 p-0 h-100">
                            <div class="card h-100 border-0 rounded-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/defualt_profile.png" class="rounded-circle me-2" alt="User" height="40" width="40">
                                        <h6 class="mb-0">Dr. Fname Lname</h6>
                                    </div>
                                </div>
                                <div class="card-body" style="overflow-y: auto; height: calc(100% - 112px);">
                                    <div class="d-flex align-items-end mb-3">
                                        <img src="../assets/images/defualt_profile.png" class="rounded-circle me-2" alt="User" height="40" width="40">
                                        <div>
                                            <span class="badge bg-danger text-white p-2">Due to high blood</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-end justify-content-end mb-3">
                                        <div>
                                            <span class="badge bg-secondary text-white p-2">OK?</span>
                                        </div>
                                        <img src="../assets/images/defualt_profile.png" class="rounded-circle ms-2" alt="User" height="40" width="40">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Aa">
                                        <button class="btn btn-primary"><i class='bx bx-send text-white fs-5'></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
