const inputs = document.querySelectorAll('.input-box input');
const labels = document.querySelectorAll('.input-box label');
const value = [];

for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('focus', evt => {
        labels[i].classList.add('stay');
    });
    inputs[i].addEventListener('blur', evt => {
        if (inputs[i].value !== "") {
            labels[i].classList.add('stay');
        } else {
            labels[i].classList.remove('stay');
        }
    });
}
const div = document.getElementById("container");
window.addEventListener('DOMContentLoaded', function () {
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value.trim() !== '') {
            labels[i].classList.add('stay');
        } else {
            labels[i].classList.remove('stay');
        }
    }
    div.classList.remove("hidden");
    div.classList.add("visible", "fade-in-on-load");
});
