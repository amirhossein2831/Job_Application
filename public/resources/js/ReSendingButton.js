const button = document.getElementById('resend-btn');
button.addEventListener('click', event => {
    button.innerHTML = 'Sending Email...';
    button.classList.add('sending');
});
