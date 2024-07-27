<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <div class="password-reset-container">
        <form method="POST" action="#">
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit">Enviar enlace de recuperación</button>
        </form>
    </div>
</body>
</html>
