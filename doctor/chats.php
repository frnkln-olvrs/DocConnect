<?php
session_start();

// Verify if the user is logged in, verified, and is a doctor
if (isset($_SESSION['verification_status']) && $_SESSION['verification_status'] != 'Verified') {
    header('location: ../user/verification.php');
    exit();
} else if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 1) {
    header('location: ../index.php');
    exit();
}

$doctor_id = $_SESSION['account_id'];
$receiver_id = 1;
?>

<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Chats';
$chat = 'active';
include '../includes/head.php';
?>

<body>
    <?php require_once('../includes/header-doctor.php'); ?>

    <div class="container-fluid">
        <div class="row" style="height: 89vh;">
            <?php require_once('../includes/sidepanel-doctor.php'); ?>

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
                                                <h6 class="mb-0">Fname Lname</h6>
                                                <small class="text-muted">Due to high blo...</small>
                                            </div>
                                        </div>
                                        <small class="text-muted">20m</small>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-9 p-0 h-100">
                            <div class="card h-100 border-0 rounded-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/defualt_profile.png" class="rounded-circle me-2" alt="User" height="40" width="40">
                                        <h6 class="mb-0">Fname Lname</h6>
                                    </div>
                                </div>
                                <div class="card-body" id="chat-messages" style="overflow-y: auto; height: calc(100% - 112px);">
                                    <!-- Messages will load here -->
                                </div>
                                <form id="sendMessage" class="card-footer">
                                    <div class="input-group">
                                        <input type="text" id="message" name="message" class="form-control" placeholder="Aa">
                                        <button class="btn btn-primary" onclick="sendMessage()">
                                            <i class='bx bx-send text-white fs-5'></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        //let receiverId = 1; // Replace this with the actual receiver ID (either patient or doctor)
        let receiverId = <?php echo $receiver_id; ?>;
    
        function fetchMessages() {
          $.ajax({
            url: '../tools/chat.php',
            method: 'POST',
            data: { fetch_messages: 1, receiver_id: receiverId },
            dataType: 'json',
            success: function(data) {
              let chatBox = '';
              data.forEach(function(msg) {
                if (msg.sender_id == receiverId) {
                  chatBox += `<div class="d-flex align-items-end justify-content-start mb-3">
                                  <img src="../assets/images/defualt_profile.png" alt="Profile" class="rounded-circle me-3" height="30" width="30">
                                  <div class="bg-secondary text-light p-2 rounded-3">${msg.message}</div>
                              </div>`;
                } else {
                  chatBox += `<div class="d-flex align-items-end justify-content-end mb-3">
                                  <div class="bg-primary text-light p-2 rounded-3">${msg.message}</div>
                                  <img src="../assets/images/defualt_profile.png" alt="Profile" class="rounded-circle ms-3" height="30" width="30">
                              </div>`;
                }
              });
              $('.card-body').html(chatBox);
            }
          });
        }
    
        // Fetch messages every 2 seconds
        setInterval(fetchMessages, 2000);
    
        // Function to send a message
        function sendMessage() {
          let message = $('input[name="message"]').val();
          if (message !== '') {
            $.ajax({
              url: 'chat.php',
              method: 'POST',
              data: { send_message: 1, receiver_id: receiverId, message: message },
              success: function() {
                $('input[name="message"]').val('');
                fetchMessages();
              }
            });
          }
        }
    
        $('.btn-primary').click(function() { sendMessage(); });

    
        $('input[name="message"]').keypress(function(event) {
          if (event.keyCode === 13) {
            sendMessage();
          }
        });
    </script>
</body>
</html>
