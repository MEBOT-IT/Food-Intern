// Establish a WebSocket connection
const socket = new WebSocket('ws://localhost:8080'); // Replace with your server URL

// Elements
const chatLog = document.getElementById('chat-log');
const userInput = document.getElementById('user-input');
const sendBtn = document.getElementById('send-btn');

// Event listener for send button click
sendBtn.addEventListener('click', sendMessage);

// Event listener for Enter key press in input field
userInput.addEventListener('keydown', function(event) {
  if (event.key === 'Enter') {
    sendMessage();
  }
});

// Function to send a message
function sendMessage() {
  const message = userInput.value.trim();
  if (message !== '') {
    // Display the user's message in the chat log
    displayMessage('You', message);

    // Send the message to the server
    socket.send(message);

    // Clear the input field
    userInput.value = '';
  }
}

// Function to display a message in the chat log
function displayMessage(sender, message) {
  const messageElement = document.createElement('div');
  messageElement.innerHTML = `<strong>${sender}:</strong> ${message}`;
  chatLog.appendChild(messageElement);
  chatLog.scrollTop = chatLog.scrollHeight;
}

// Event listener for WebSocket messages
socket.addEventListener('message', function(event) {
  const message = event.data;

  // Display the received message in the chat log
  displayMessage('Server', message);
});
