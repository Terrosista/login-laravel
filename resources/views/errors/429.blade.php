<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demasiados Intentos</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #ffdddd;
            padding: 50px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: red;
        }
        p {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚨 Demasiados Intentos 🚨</h1>
        <p>Has intentado iniciar sesión demasiadas veces. <br>Por favor, espera unos minutos antes de intentarlo nuevamente.</p>
        <p>⏳ Intenta de nuevo en unos minutos.</p>
        <a href="{{ url('/') }}">Volver al Login</a>
    </div>
</body>
</html>
