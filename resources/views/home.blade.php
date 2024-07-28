<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Home</title>
</head>
<body>
    <div class="container">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.
            </div>
        @endif

        Antes de continuar, por favor revise su correo electrónico para un enlace de verificación.
        Si no recibió el correo electrónico, <a href="{{ route('verification.resend') }}">haga clic aquí para solicitar otro</a>.
    </div>
</body>
</html>
