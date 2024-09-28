document.addEventListener('DOMContentLoaded', () => {
  // Load the chat list
  fetch('../handlers/get_chats.php')
  .then(response => response.text())
  .then(data => {
    try {
      const jsonData = JSON.parse(data);
      const chatList = document.getElementById('chatList');
      jsonData.forEach(chat => {
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
    } catch (error) {
      console.error('Error parsing JSON:', error);
      console.log('Raw response data:', data);
    }
  });

  // Send message
  document.getElementById('sendMessage').addEventListener('click', () => {
    const messageInput = document.getElementById('messageInput').value;
    const receiverId = window.currentChatAccountId;
  
    fetch('../handlers/send_message.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `message=${encodeURIComponent(messageInput)}&receiver_id=${receiverId}`,
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(data => {
      if (data.error) {
        console.error('Error from server:', data.error);
        return;
      }
      const chatMessages = document.getElementById('chatMessages');
      const messageElement = document.createElement('div');
      messageElement.classList.add('d-flex', 'align-items-end', 'justify-content-end', 'mb-3');
      messageElement.innerHTML = `
        <div class="bg-primary text-light p-2 rounded-3">${messageInput}</div>
        <img src="../assets/images/default_profile.png" alt="Profile" class="rounded-circle ms-3" height="30" width="30">`;
      chatMessages.appendChild(messageElement);
      document.getElementById('messageInput').value = '';
    })
    .catch(error => {
      console.error('Error sending message:', error);
    });  
  });  
});

// Load selected chat
function loadChat(accountId) {
  window.currentChatAccountId = accountId;
  fetch('../handlers/fetch_messages.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `chat_with=${accountId}`,
  })
  .then(response => response.json())
  .then(messages => {
    const chatMessages = document.getElementById('chatMessages');
    chatMessages.innerHTML = '';
    messages.forEach(msg => {
      const isSender = msg.sender_id === window.currentChatAccountId;
      const messageElement = document.createElement('div');
      messageElement.classList.add(
        'd-flex', 
        isSender ? 'flex-row-reverse' : 'flex-row',
        'align-items-end', 
        'justify-content-end',
        'mb-3'
      );
      messageElement.innerHTML = `
        <div class="${isSender ? 'bg-secondary' : 'bg-primary'} text-light p-2 rounded-3">
          ${msg.message}
        </div>
        <img src="../assets/images/default_profile.png" alt="Profile" class="rounded-circle ${isSender ? 'me-3' : 'ms-3'}" height="30" width="30">`;
      chatMessages.appendChild(messageElement);
    });
  });
}
