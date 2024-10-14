<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de Bienvenida</title>
    <style>
        body {
            background: linear-gradient(120deg, #a1c4fd, #c2e9fb);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .mensaje-contenedor {
            background-color: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }

        .mensaje-contenedor h1 {
            font-size: 2.5rem;
            color: #333;
            margin: 0;
            animation: bounce 1.5s ease infinite;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
    <div class="mensaje-contenedor">
        <h1><?php 
            $mensaje = "Hola, Jimena Mendoza Bienvenida";
            echo $mensaje; 
        ?></h1>
    </div>
</body>
</html>
