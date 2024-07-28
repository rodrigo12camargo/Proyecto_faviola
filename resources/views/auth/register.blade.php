<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta - MyApp</title>
    <style>
        body, html {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f2f1;
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #1a1a1a;
        }

        .container {
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .header {
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
            color: #333;
            font-weight: 400;
        }

        .header p {
            color: #666;
            font-size: 14px;
            margin-top: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            padding: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f3f2f1;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            border-color: #0078d4;
            outline: none;
            box-shadow: 0 0 0 1px #0078d4;
        }

        button {
            padding: 14px;
            background-color: #0078d4;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #005a9e;
        }

        .help-links {
            margin-top: 20px;
        }

        .help-links a {
            color: #0078d4;
            text-decoration: none;
            font-size: 14px;
        }

        .help-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Crear una cuenta</h1>
            <p>Introduce tus datos para registrarte</p>
        </div>
        <form method="POST" action="{{ route('register.post') }}" id="registerForm">
            @csrf
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
        <div class="help-links">
            <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a></p>
        </div>
    </div>
</body>
</html>
