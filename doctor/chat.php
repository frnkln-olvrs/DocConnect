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

<<<<<<< Updated upstream
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
=======
            <div class="col-10">
                <div class="chat-container">
                    <div class="chat-box" id="chat-box">
                        <!-- Messages will be appended here -->
                    </div>
                    <div class="chat-input">
                        <form id="chat-form">
                            <input type="text" id="chat-message" placeholder="Type your message here..." required>
                            <button type="submit">Send</button>
                        </form>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </div>
    </div>

<<<<<<< Updated upstream
    
=======
    <style>
        .chat-container {
            display: flex;
            flex-direction: column;
            height: 80vh;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            margin-top: 20px;
        }

        .chat-box {
            flex: 1;
            overflow-y: auto;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .chat-message {
            padding: 5px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .chat-message.sent {
            background-color: #dcf8c6;
            align-self: flex-end;
        }

        .chat-message.received {
            background-color: #fff;
            align-self: flex-start;
        }

        .chat-input {
            display: flex;
            padding: 10px;
        }

        .chat-input input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }

        .chat-input button {
            padding: 10px 15px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #0056b3;
        }
    </style>

    <script>
        document.getElementById('chat-form').addEventListener('submit', function (e) {
            e.preventDefault();
            var messageInput = document.getElementById('chat-message');
            var messageText = messageInput.value.trim();

            if (messageText !== '') {
                var chatBox = document.getElementById('chat-box');
                var messageElement = document.createElement('div');
                messageElement.classList.add('chat-message', 'sent');
                messageElement.innerText = messageText;
                chatBox.appendChild(messageElement);
                messageInput.value = '';
                chatBox.scrollTop = chatBox.scrollHeight;
            }
        });
    </script>
>>>>>>> Stashed changes
</body>

</html>
