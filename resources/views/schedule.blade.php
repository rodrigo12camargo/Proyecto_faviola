<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios y Rutas - MyApp</title>
    <style>
        body, html {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f2f1;
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #1a1a1a;
        }

        .container {
            max-width: 600px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 20px;
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

        #map {
            width: 100%;
            height: 400px;
            margin-bottom: 20px;
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
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8aFDgZSxl3xDTPVHS_5p6E4Ne7d6cLZE&callback=initMap" async defer></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Horarios y Rutas de Recolección de Basura</h1>
        </div>
        <div id="map"></div>
        <div id="schedule-container" style="display: none;">
            <table id="schedule-table">
                <thead>
                    <tr>
                        <th>Zona</th>
                        <th>Día</th>
                        <th>Hora</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
        </div>
    </div>

    <script>
        let map;
        let routes = [
            { name: 'Centro', lat: 19.7100885, lng: -98.9659399, schedule: 'Centro' },
            { name: 'Sur', lat: 19.7000000, lng: -98.9700000, schedule: 'Sur' },
            { name: 'Norte', lat: 19.7200000, lng: -98.9600000, schedule: 'Norte' }
        ];

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 19.7100885, lng: -98.9659399 },
                zoom: 13
            });

            routes.forEach(route => {
                let marker = new google.maps.Marker({
                    position: { lat: route.lat, lng: route.lng },
                    map: map,
                    title: route.name
                });

                marker.addListener('click', () => {
                    showSchedule(route.schedule);
                });
            });
        }

        function showSchedule(zone) {
            document.getElementById('schedule-container').style.display = 'block';
            let rows = document.querySelectorAll('#schedule-table tbody tr');
            rows.forEach(row => {
                if (row.children[0].textContent === zone) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
