<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Limpieza Hogar</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-image: url('logo.png'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        header {
            background-color: rgba(76, 175, 80, 0.9);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        header img {
            width: 100px;
            height: 100px;
        }
        nav {
            display: flex;
            align-items: center;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }
        nav ul li {
            margin: 0 15px;
            position: relative;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }
        .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #4CAF50;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            display: none;
        }
        .dropdown a {
            display: block;
            padding: 10px;
            color: white;
        }
        nav ul li:hover .dropdown {
            display: block.
        }
        .search-box {
            margin-left: 20px;
        }
        .search-box input {
            padding: 5px;
            border: none;
            border-radius: 3px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
            border-radius: 10px;
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
        .carousel-text {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-family: 'Pacifico', cursive;
            font-size: 36px; /* Tamaño de texto aumentado */
            color: blue;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .footer a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            margin: 0 10px;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="Proyecto Limpieza Hogar">
        <nav>
            <ul>
                <li><a href="#">Menú</a></li>
                <li><a href="#">Mi Cuenta</a></li>
                <li>
                    <div class="search-box">
                        <input type="text" placeholder="Buscar productos...">
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="buttons">
            <h2>¿Desea ingresar como?</h2>
            <button onclick="location.href='#comisionistas'">Comisionistas</button>
            <button onclick="location.href='#proveedores'">Proveedores</button>
        </div>
        <div class="carousel">
            <img src="1.png" alt="Producto 1" class="active">
            <img src="2.png" alt="Producto 2">
            <img src="3.png" alt="Producto 3">
            <img src="4.png" alt="Producto 4">
            <div class="carousel-text">conoce nuestro productos</div>
        </div>
    </div>
    <div class="footer">
        <a href="#">Carrito de Compras</a>
    </div>
    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.carousel img');
        const texts = [
            { text: "nuevo producto para la limpieza de sus baños", color: "blue" },
            { text: "set de limpieza de pisos aroma frutal", color: "red" },
            { text: "promo fabuloso por 2", color: "green" },
            { text: "comobo de papeles con limpidos con olores gran tarro", color: "purple" }
        ];
        const carouselText = document.querySelector('.carousel-text');
        
        function showNextImage() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
            carouselText.textContent = texts[currentIndex].text;
            carouselText.style.color = texts[currentIndex].color;
        }
        
        setInterval(showNextImage, 3000);
    </script>
</body>
</html>
