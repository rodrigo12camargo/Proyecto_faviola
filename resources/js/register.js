// public/js/register.js

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registerForm');

    form.addEventListener('submit', function(event) {
        const password = form.querySelector('input[name="password"]').value;
        const confirmPassword = form.querySelector('input[name="password_confirmation"]').value;

        if (password !== confirmPassword) {
            event.preventDefault();
            alert("Las contraseñas no coinciden.");
        }
    });
});
