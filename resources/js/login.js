// public/js/login.js

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loginForm');

    form.addEventListener('submit', function(event) {
        const email = form.querySelector('input[name="email"]').value;
        const password = form.querySelector('input[name="password"]').value;

        if (!email || !password) {
            event.preventDefault();
            alert("Por favor, complete todos los campos.");
        }
    });
});
