document.addEventListener('DOMContentLoaded', () => {
  let lastMessageId = 0; // Keep track of the last message ID
  let lastBotMessage = ''; // Keep track of the last bot message

  // Load the chat list
  function loadChats(searchTerm = '') {
    fetch(`../handlers/get_chats.php?search=${encodeURIComponent(searchTerm)}`)
      .then(response => response.text())
      .then(data => {
        try {
          const jsonData = JSON.parse(data);
          const chatList = document.getElementById('chatList');
          chatList.innerHTML = '';

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

  function loadChatBot() {
    const chatMessages = document.getElementById('chatMessages');
    const chatUser = document.getElementById('chatUser');

    window.currentChatAccountId = '9999';
    console.log('Chatbot loaded, currentChatAccountId:', window.currentChatAccountId);

    chatUser.textContent = 'Chatbot';
    chatMessages.innerHTML = '';

    const botMessage = document.createElement('div');
    botMessage.classList.add('d-flex', 'align-items-start', 'mb-3');
    botMessage.innerHTML = `
        <div class="bg-secondary text-light p-2 rounded-3" style="max-width: 52%;">
            Hello! How can I assist you today?
        </div>
        <img src="../assets/images/chatbot_profile.png" alt="Bot" class="rounded-circle ms-3" height="30" width="30">`;

    chatMessages.appendChild(botMessage);
    lastBotMessage = botMessage.innerHTML; // Store the last bot message content
  }

  function formatMessage(message) {
    message = message.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
    const lines = message.split('\n');
    let formattedMessage = '';
    lines.forEach(line => {
      line = line.trim();
      if (line.startsWith('* ')) {
        formattedMessage += `<li>${line.substring(2)}</li>`;
      } else {
        formattedMessage += `<p>${line}</p>`;
      }
    });
    formattedMessage = `<ul>${formattedMessage}</ul>`;
    return formattedMessage;
  }

  function escapeHtml(unsafe) {
    return unsafe
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
  }

  function sendMessage() {
    const messageInput = document.getElementById('messageInput').value;
    const receiverId = window.currentChatAccountId;
  
    if (!messageInput) {
      console.log('Message input is empty');
      return;
    }
  
    console.log('Sending message, receiverId:', receiverId);
  
    const chatMessages = document.getElementById('chatMessages');
    const messageElement = document.createElement('div');
    messageElement.classList.add('d-flex', 'align-items-end', 'justify-content-end', 'mb-3');
    
    // Escape the message input to ensure it's treated as plain text
    const escapedMessage = escapeHtml(messageInput);
  
    // Preserve whitespace with white-space CSS property
    messageElement.innerHTML = `
      <div class="bg-primary text-light p-2 rounded-3" style="max-width: 52%; white-space: pre-wrap;">${escapedMessage}</div>
      <img src="../assets/images/default_profile.png" alt="Profile" class="rounded-circle ms-3" height="30" width="30">`;
    
    chatMessages.appendChild(messageElement);
  
    document.getElementById('messageInput').value = '';
    scrollChatToBottom();
  
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
  
      // Only update lastMessageId here based on server response
      lastMessageId = data.message_id;
  
      if (receiverId === '9999' && data.reply) {
        if (data.reply !== lastBotMessage) {
          const formattedReply = escapeHtml(data.reply);
          const botMessageElement = document.createElement('div');
          botMessageElement.classList.add('d-flex', 'align-items-end', 'justify-content-start', 'mb-3');
          botMessageElement.innerHTML = `
            <div class="bg-secondary text-light p-2 rounded-3" style="max-width: 52%; white-space: pre-wrap;">${formattedReply}</div>
            <img src="../assets/images/chatbot_profile.png" alt="Bot" class="rounded-circle ms-3" height="30" width="30">`;
  
          chatMessages.appendChild(botMessageElement);
          lastBotMessage = data.reply;
        }
      }
  
      scrollChatToBottom();
    })
    .catch(error => {
      console.error('Error sending message:', error);
    });
  }  

  function fetchNewMessages() {
    const receiverId = window.currentChatAccountId;
  
    fetch('../handlers/fetch_messages.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `chat_with=${receiverId}&last_message_id=${lastMessageId}`,
    })
    .then(response => response.json())
    .then(messages => {
      const chatMessages = document.getElementById('chatMessages');
  
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
    
        const messageDiv = document.createElement('div');
        messageDiv.classList.add(isSender ? 'bg-secondary' : 'bg-primary', 'text-dark', 'p-2', 'rounded-3');
        messageDiv.style.maxWidth = '52%';
        messageDiv.style.whiteSpace = 'pre-wrap';
        messageDiv.style.wordBreak = 'break-word';
    
        messageDiv.textContent = msg.message;
    
        const img = document.createElement('img');
        img.src = '../assets/images/default_profile.png';
        img.alt = 'Profile';
        img.classList.add('rounded-circle', isSender ? 'me-3' : 'ms-3');
        img.height = 30;
        img.width = 30;
    
        messageElement.appendChild(messageDiv);
        messageElement.appendChild(img);
    
        chatMessages.appendChild(messageElement);
    
        lastMessageId = msg.id;
    });    
  
      scrollChatToBottom();
    })
    .catch(error => {
      console.error('Error fetching new messages:', error);
    });
  }  

  // function checkForUnreadMessages() {
  //   const currentChatId = window.currentChatAccountId;

  //   fetch(`../handlers/get_unread_count.php?chat_id=${currentChatId}`)
  //     .then(response => response.text()) // Use text instead of json for logging
  //     .then(data => {
  //       console.log('Raw response data:', data); // Log the raw response
  //       const jsonData = JSON.parse(data);
  //       const chatList = document.getElementById('chatList');
  //       const chatItems = chatList.querySelectorAll('.chatList');

  //       chatItems.forEach(chatItem => {
  //           const chatId = chatItem.querySelector('a').getAttribute('onclick').match(/\d+/)[0];
  //           const badge = chatItem.querySelector('.badge');

  //         if (chatId == currentChatId) {
  //           if (jsonData[chatId] > 0) {
  //             if (!badge) {
  //               const notification = document.createElement('span');
  //               notification.classList.add('badge', 'bg-danger', 'ms-auto');
  //               notification.textContent = jsonData[chatId];
  //               chatItem.querySelector('a').appendChild(notification);
  //             } else {
  //               badge.textContent = jsonData[chatId];
  //             }
  //           } else if (badge) {
  //             badge.remove(); // Remove badge if no unread messages
  //           }
  //         }
  //       });
  //     })
  //     .catch(error => {
  //       console.error('Error checking for unread messages:', error);
  //     });
  // }

  // // Poll for unread messages every 5 seconds
  // setInterval(checkForUnreadMessages, 5000);

  document.getElementById('searchChat').addEventListener('input', (event) => {
    const searchTerm = event.target.value;
    loadChats(searchTerm);
  });

  loadChats();

  function scrollChatToBottom(forceScroll = false) {
    const chatMessages = document.getElementById('chatMessages');
    
    const isNearBottom = chatMessages.scrollHeight - chatMessages.scrollTop <= chatMessages.clientHeight + 100;
  
    if (isNearBottom || forceScroll) {
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }
  }

  document.getElementById('sendMessage').addEventListener('click', sendMessage);

  document.getElementById('messageInput').addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
      if (event.shiftKey) {
        return;
      } else {
        event.preventDefault();
        sendMessage();
      }
    }
  });  

  document.getElementById('messageInput').addEventListener('input', (event) => {
    const textarea = event.target;
    textarea.style.height = '40px';
    textarea.style.height = textarea.scrollHeight + 'px';
  });  

  const messageInput = document.getElementById('messageInput');

  messageInput.addEventListener('input', (event) => {
    messageInput.style.height = '40px';
    messageInput.style.height = messageInput.scrollHeight + 'px';
  });
  
  // Listen for the "Enter" key and send the message
  messageInput.addEventListener('keydown', (event) => {
    if (event.key === 'Enter' && !event.shiftKey) {
      event.preventDefault();
      
      sendMessage();
    
      messageInput.style.height = '40px'; 
    }
  });

  window.loadChat = function(accountId, fullName, profileImage, chatElement) {
    window.currentChatAccountId = accountId;
  
    const activeChats = document.querySelectorAll('.chatList.active');
    activeChats.forEach(chat => chat.classList.remove('active'));
  
    chatElement.parentElement.classList.add('active');
  
    fetch('../handlers/mark_messages_read.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `chat_with=${accountId}`,
    });
  
    // Remove notification badge
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
        // ADD PRE-WRAP HERE KAPSGA NEEDED
        const messageDiv = document.createElement('div');
        messageDiv.classList.add(isSender ? 'bg-secondary' : 'bg-primary', 'text-light', 'p-2', 'rounded-3');
        messageDiv.style.maxWidth = '52%';
        messageDiv.style.whiteSpace = 'pre-wrap';
        messageDiv.style.wordBreak = 'break-word';
        
        // fetched message as plaon text
        messageDiv.textContent = msg.message;
        
        const img = document.createElement('img');
        img.src = '../assets/images/default_profile.png';
        img.alt = 'Profile';
        img.classList.add('rounded-circle', isSender ? 'me-3' : 'ms-3');
        img.height = 30;
        img.width = 30;
        
        messageElement.appendChild(messageDiv);
        messageElement.appendChild(img);
        
        chatMessages.appendChild(messageElement);
        
        chatMessages.appendChild(messageElement);
  
        // Track last message ID
        lastMessageId = msg.id;
      });
  
      // Scroll to the bottom after messages are loaded initially
      scrollChatToBottom(true);
  
      // Start polling for new messages
      setInterval(fetchNewMessages, 5000); // Check for new messages every 5 seconds
    })
    .catch(error => {
      console.error('Error fetching messages:', error);
    });
  
    document.getElementById('searchChat').value = '';
    loadChats();
  };
});
