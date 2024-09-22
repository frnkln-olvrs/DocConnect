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
                            <div class="chat-messages mb-3" id="chatMessages" style="height: 500px; overflow-y: auto;">
                                <!-- Doctor message -->
                                <div class="message doctor mb-2" style="display: flex; align-items: flex-start; margin-bottom: 10px;">
                                    <i class='bx bx-user-circle profile-icon' style="font-size: 30px; margin-right: 10px;"></i>
                                    <div class="message-content" style="max-width: 75%; background: #d1e7dd; padding: 10px; border-radius: 10px;">
                                        <p style="border: none; margin: 0;">Hello, how can I assist you today?</p>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" id="userMessage" placeholder="Aa" aria-label="Message" style="color: black; border-radius: 20px; background: #D9D9D9;">
                                <button class="btn-icon ms-2" type="button" id="sendMessage" style="background: none; border: none; cursor: pointer; color: #007bff;">
                                    <i class='bx bx-send' style="font-size: 30px; color: black;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        async function sendMessageToChatGPT(message) {
            const url = '../includes/chatgpt_proxy.php';

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        model: "gpt-4",
                        messages: [
                            { "role": "system", "content": "You are a helpful assistant." },
                            { "role": "user", "content": message }
                        ]
                    })
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }

                const data = await response.json();
                return data.choices[0].message.content;
            } catch (error) {
                console.error('Error fetching ChatGPT response:', error);
                return 'Sorry, I am unable to respond right now.';
            }
        }

        function addMessageToChat(role, message) {
            const chatMessages = document.getElementById('chatMessages');
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', role, 'mb-2');
            messageElement.style.display = 'flex';
            messageElement.style.alignItems = 'flex-start';
            messageElement.style.marginBottom = '10px';

            const icon = document.createElement('i');
            icon.classList.add('bx', 'bx-user-circle', 'profile-icon');
            icon.style.fontSize = '30px';
            icon.style.marginRight = role === 'doctor' ? '10px' : '0';
            icon.style.marginLeft = role === 'patient' ? '10px' : '0';

            const messageContent = document.createElement('div');
            messageContent.classList.add('message-content');
            messageContent.style.maxWidth = '75%';
            messageContent.style.background = role === 'doctor' ? '#d1e7dd' : '#e9ecef';
            messageContent.style.padding = '10px';
            messageContent.style.borderRadius = '10px';
            messageContent.innerHTML = `<p style="border: none; margin: 0;">${message}</p>`;

            if (role === 'doctor') {
                messageElement.appendChild(icon);
                messageElement.appendChild(messageContent);
            } else {
                messageElement.appendChild(messageContent);
                messageElement.appendChild(icon);
            }

            chatMessages.appendChild(messageElement);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        document.getElementById('sendMessage').addEventListener('click', async () => {
            const userMessage = document.getElementById('userMessage').value;
            if (userMessage.trim() === '') return;

            addMessageToChat('patient', userMessage);

            document.getElementById('userMessage').value = '';

            const chatGPTResponse = await sendMessageToChatGPT(userMessage);

            addMessageToChat('doctor', chatGPTResponse);
        });
    </script>
</body>

</html>
