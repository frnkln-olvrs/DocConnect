document.addEventListener('DOMContentLoaded', () => {
  // Load the chat list
  function loadChats(searchTerm = '') {
    fetch(`../handlers/get_chats.php?search=${encodeURIComponent(searchTerm)}`)
      .then(response => response.text())
      .then(data => {
        try {
          const jsonData = JSON.parse(data);
          const chatList = document.getElementById('chatList');
          chatList.innerHTML = '';  // Clear previous chat list

          if (jsonData.length === 0) {
            chatList.innerHTML = '<li class="text-muted">No users found.</li>';
          }

          jsonData.forEach(chat => {
            let listItem = document.createElement('li');
            listItem.classList.add('mb-3');
            listItem.innerHTML = `
              <a href="#" class="d-flex align-items-center text-dark text-decoration-none" 
                 onclick="loadChat(${chat.account_id}, '${chat.firstname} ${chat.lastname}', '${chat.account_image}')">
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
  }

  // Search functionality
  document.getElementById('searchChat').addEventListener('input', (event) => {
    const searchTerm = event.target.value;
    loadChats(searchTerm);
  });

  // Load chats initially without any search term
  loadChats();

  function scrollChatToBottom() {
    const chatMessages = document.getElementById('chatMessages');
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  // SEnd message
  function sendMessage() {
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
        <div class="bg-primary text-light p-2 rounded-3" style="max-width: 52%;">${messageInput}</div>
        <img src="../assets/images/default_profile.png" alt="Profile" class="rounded-circle ms-3" height="30" width="30">`;
      chatMessages.appendChild(messageElement);

      document.getElementById('messageInput').value = '';
      scrollChatToBottom();
    })
    .catch(error => {
      console.error('Error sending message:', error);
    });
  }

  document.getElementById('sendMessage').addEventListener('click', sendMessage);

  document.getElementById('messageInput').addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
      event.preventDefault();
      sendMessage();
    }
  });

  // chat header slected
  window.loadChat = function(accountId, fullName, profileImage) {
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

      // Update chat header with user information
      document.getElementById('chatUser').textContent = fullName;
      document.querySelector('.head img').src = profileImage ? `../assets/images/${profileImage}` : '../assets/images/default_profile.png';

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
          <div class="${isSender ? 'bg-secondary' : 'bg-primary'} text-light p-2 rounded-3" style="max-width: 52%;">
            ${msg.message}
          </div>
          <img src="../assets/images/default_profile.png" alt="Profile" class="rounded-circle ${isSender ? 'me-3' : 'ms-3'}" height="30" width="30">`;
        chatMessages.appendChild(messageElement);
      });

      scrollChatToBottom();
    });
  };
});
