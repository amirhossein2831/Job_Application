const button = document.getElementById('register-btn');
button.addEventListener('click', event => {
    button.innerHTML = 'Sending Email...';
    button.classList.add('sending');
});
