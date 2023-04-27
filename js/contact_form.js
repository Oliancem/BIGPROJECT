const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const header = document.querySelector('header');


function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        messageContainer.classList.add('dark-theme');
        header.style.backgroundColor = 'var(--primary)';

    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        messageContainer.classList.remove('dark-theme');
        header.style.backgroundColor = 'white';

    }
}

toggleSwitch.addEventListener('change', switchTheme, false);


const name = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');
const contactForm = document.getElementById('contact-form');
const errorElement = document.getElementById('error');
const successMsg = document.getElementById('success-msg');
const submitBtn = document.getElementById('submit');

// Récupérez les messages du serveur
fetch("../php/database.php")
    .then((response) => response.json())
    .then((messages) => {
        const guestbookMessages = document.getElementById("guestbook-messages");
        messages.forEach((message) => {
            const messageElement = document.createElement("div");
            messageElement.className = "message";
            messageElement.innerHTML = `
          <div class="message-header">
            <span class="name">${message.name}</span>
            <span class="timestamp">${message.timestamp}</span>
          </div>
          <div class="message-body">${message.message}</div>
      `;
            guestbookMessages.appendChild(messageElement);
        });
    });

const messageContainer = document.querySelector('#guestbook-messages');
