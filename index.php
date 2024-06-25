<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Limpieza Hogar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em 0;
        }
        header img {
            width: 100px;
            height: 100px;
            vertical-align: middle;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .buttons {
            margin: 20px 0;
        }
        .buttons h2 {
            margin-bottom: 10px;
            font-size: 24px;
            color: #333;
        }
        .buttons button {
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .carousel {
            position: relative;
            max-width: 100%;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 10px;
        }
        .carousel img {
            width: 100%;
            display: none;
        }
        .carousel img.active {
            display: block;
        }
    </style>
</head>
<body>
    <header>
    <img src="logo.png" alt="Proyecto Limpieza Hogar">
    <h1>Proyecto Limpieza Hogar</h1>
    </header>
    <div class="container">
        <div class="buttons">
            <h2>¿Desea ingresar como?</h2>
            <button onclick="location.href='#comisionistas'">Comisionistas</button>
            <button onclick="location.href='#proveedores'">Proveedores</button>
        </div>
        <div class="carousel">
            <img src="imagen 1.jpeg" alt="Producto 1" class="active">
            <img src="imagen2.jpeg" alt="Producto 2">
            <img src="imagen 3.jpeg" alt="Producto 3">
            <img src="imagen 4.jpeg" alt="Producto 4">
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.carousel img');

        function showNextImage() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
        }

        setInterval(showNextImage, 3000);
    </script>
</body>
</html>
