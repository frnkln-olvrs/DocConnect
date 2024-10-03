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
          listItem.classList.add('chatList', 'my-1', 'rounded-1');

          let notification = chat.unread_count > 0 ? `<span class="badge bg-danger ms-auto">${chat.unread_count}</span>` : '';
          listItem.innerHTML = `
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none p-2" 
               onclick="loadChat(${chat.account_id}, '${chat.firstname} ${chat.lastname}', '${chat.account_image}', this)">
              <img src="../assets/images/default_profile.png" alt="Profile" class="rounded-circle me-3" height="40" width="40">
              <div>
                <strong>${chat.firstname} ${chat.lastname}</strong>
              </div>
              ${notification}
            </a>`;
          chatList.appendChild(listItem);
        });
      } catch (error) {
        console.error('Error parsing JSON:', error);
        console.log('Raw response data:', data);
      }
    });
  }

  // Searrch function
  document.getElementById('searchChat').addEventListener('input', (event) => {
    const searchTerm = event.target.value;
    loadChats(searchTerm);
  });

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
    .then(response => response.json())
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

  window.loadChat = function(accountId, fullName, profileImage, chatElement) {
    window.currentChatAccountId = accountId;
  
    const activeChats = document.querySelectorAll('.chatList.active');
    activeChats.forEach(chat => chat.classList.remove('active'));
  
    chatElement.parentElement.classList.add('active');
  
    // mark messages kapag open na
    fetch('../handlers/mark_messages_read.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `chat_with=${accountId}`,
    });
  
    // ereemove notification
    const notificationBadge = chatElement.querySelector('.badge');
    if (notificationBadge) {
      notificationBadge.remove();
    }
  
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
    })
    .catch(error => {
      console.error('Error fetching messages:', error);
    });
  };  
});
