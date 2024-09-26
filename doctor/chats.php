<?php
session_start();

if (isset($_SESSION['verification_status']) && $_SESSION['verification_status'] != 'Verified') {
    header('location: ../user/verification.php');
} else if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 1) {
    header('location: ../index.php');
}

?>
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
        <div class="row">
            <?php
            require_once('../includes/sidepanel-doctor.php');
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10">
                <div class="col-md-10 mt-4">
                    <div class="chat-container-wrapper">
                        <div class="receiver-name mb-3" style="font-size: 20px; font-weight: bold;">
                            Patients Full Name
                        </div>

                        <div class="chat-container border rounded p-3">
                            <div class="chat-messages mb-3" style="height: 500px; overflow-y: auto;">
                                <div class="message doctor mb-2" style="display: flex; align-items: flex-start; margin-bottom: 10px;">
                                    <i class='bx bx-user-circle profile-icon' style="font-size: 30px; margin-right: 10px;"></i> 
                                    <div class="message-content" style="max-width: 75%; background: #d1e7dd; padding: 10px; border-radius: 10px;">
                                        <p style="border: none; margin: 0;">Hello, how can I assist you today?</p>
                                    </div>
                                </div>
                                <div class="message patient mb-2" style="display: flex; align-items: flex-start; margin-bottom: 10px; justify-content: flex-end;">
                                    <div class="message-content" style="max-width: 75%; background: #e9ecef; padding: 10px; border-radius: 10px; text-align: right;">
                                        <p style="border: none; margin: 0;">I have a question about my medication.</p>
                                    </div>
                                    <i class='bx bx-user-circle profile-icon' style="font-size: 30px; margin-left: 10px;"></i>
                                </div>
                            </div>

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Aa" aria-label="Message" style="color: black; border-radius: 20px; background: #D9D9D9;">
                            <button class="btn-icon ms-2" type="button" style="background: none; border: none; cursor: pointer; color: #007bff;">
                                <i class='bx bx-send' style="font-size: 30px; color: black;"></i> 
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
</body>

</html>
