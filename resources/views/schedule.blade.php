<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios - MyApp</title>
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
            max-width: 600px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .footer {
            margin-top: 20px;
            text-align: right;
        }

        .footer a {
            color: #0078d4;
            text-decoration: none;
            font-size: 14px;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Horarios de Recolección de Basura Tecamac</h1>
        </div>
        <table>
            <tr>
                <th>Zona</th>
                <th>Día</th>
                <th>Hora</th>
            </tr>
            <tr>
                <td>Centro</td>
                <td>Lunes</td>
                <td>8:00 - 10:00</td>
            </tr>
            <tr>
                <td>Sur</td>
                <td>Miércoles</td>
                <td>9:00 - 11:00</td>
            </tr>
            <tr>
                <td>Norte</td>
                <td>Viernes</td>
                <td>10:00 - 12:00</td>
            </tr>
            <tr>
                <td>Este</td>
                <td>Sábado</td>
                <td>7:00 - 9:00</td>
            </tr>
            <tr>
                <td>Oeste</td>
                <td>Domingo</td>
                <td>12:00 - 14:00</td>
            </tr>
        </table>
        <div class="footer">
            <a href="#">Volver al inicio</a>
        </div>
    </div>
</body>
</html>
