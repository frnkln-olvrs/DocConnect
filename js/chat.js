document.addEventListener('DOMContentLoaded', () => {
  // Load the chat list
  fetch('../handlers/get_chats.php')
    .then(response => response.json())
    .then(data => {
      const chatList = document.getElementById('chatList');
      data.forEach(chat => {
        let listItem = document.createElement('li');
        listItem.classList.add('mb-3');
        listItem.innerHTML = `
          <a href="#" class="d-flex align-items-center text-dark text-decoration-none" onclick="loadChat(${chat.account_id})">
            <img src="../assets/images/default_profile.png" alt="Profile" class="rounded-circle me-3" height="40" width="40">
            <div>
              <strong>${chat.firstname} ${chat.lastname}</strong>
            </div>
          </a>`;
        chatList.appendChild(listItem);
      });
    });

  // Send message
  document.getElementById('sendMessage').addEventListener('click', () => {
    const messageInput = document.getElementById('messageInput').value;
    const receiverId = window.currentChatUserId; // Assume this is set when a chat is selected

    fetch('../handlers/send_message.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `message=${encodeURIComponent(messageInput)}&receiver_id=${receiverId}`,
    }).then(response => response.json())
      .then(data => {
        // Update chat box with new message
        const chatMessages = document.getElementById('chatMessages');
        const messageElement = document.createElement('div');
        messageElement.classList.add('d-flex', 'align-items-end', 'justify-content-end', 'mb-3');
        messageElement.innerHTML = `
          <div class="bg-primary text-light p-2 rounded-3">${messageInput}</div>
          <img src="../assets/images/default_profile.png" alt="Profile" class="rounded-circle ms-3" height="30" width="30">`;
        chatMessages.appendChild(messageElement);
      });
  });
});

// Load selected chat
function loadChat(userId) {
  window.currentChatUserId = userId;
  fetch('../handlers/fetch_messages.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `chat_with=${userId}`,
  })
    .then(response => response.json())
    .then(messages => {
      const chatMessages = document.getElementById('chatMessages');
      chatMessages.innerHTML = '';
      messages.forEach(msg => {
        const isSender = msg.sender_id === window.currentChatUserId;
        const messageElement = document.createElement('div');
        messageElement.classList.add('d-flex', 'align-items-end', isSender ? 'justify-content-start' : 'justify-content-end', 'mb-3');
        messageElement.innerHTML = `
          <img src="../assets/images/default_profile.png" alt="Profile" class="rounded-circle ${isSender ? 'me-3' : 'ms-3'}" height="30" width="30">
          <div class="${isSender ? 'bg-secondary' : 'bg-primary'} text-light p-2 rounded-3">
            ${msg.message}
          </div>`;
        chatMessages.appendChild(messageElement);
      });
    });
}
