<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visión Limpieza Hogar</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <header>
        Visión Limpieza Hogar
    </header>

    <div class="top-nav">
        <div class="logo">
            <img src="https://via.placeholder.com/150" alt="Logo"> <!-- Reemplaza con la ruta de tu logo -->
            Visión Limpieza Hogar
        </div>
        <div class="search-container">
            <input type="text" placeholder="Buscar en vision.com">
            <button type="submit"><img src="https://via.placeholder.com/20" alt="Buscar"></button> <!-- Reemplaza con la ruta de tu icono de búsqueda -->
        </div>
        <div class="account-cart">
            <a href="#"><img src="https://via.placeholder.com/20" alt="Ubicación"> ¿Cómo quieres recibir tu pedido?</a> <!-- Reemplaza con la ruta de tu icono de ubicación -->
            <a href="#"><img src="https://via.placeholder.com/20" alt="Cuenta"> Mi cuenta</a> <!-- Reemplaza con la ruta de tu icono de usuario -->
            <a href="#"><img src="https://via.placeholder.com/20" alt="Carrito"> Carrito</a> <!-- Reemplaza con la ruta de tu icono de carrito -->
        </div>
        <button class="menu-btn" onclick="toggleSidebar()">☰ Menú</button>
    </div>

    <div class="sidebar" id="sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="toggleSidebar()">&times;</a>
        <a href="#">Inicio</a>
        <a href="#">Productos</a>
        <a href="#">Ofertas</a>
        <a href="#">Contacto</a>
        <a href="proveedores.html">Proveedores</a>
        <div class="category-title">Novedades</div>
        <a href="#">Colombiamoda <span class="new-label">Exclusivo</span></a>
        <a href="#">Precio insuperable <span class="new-label">Nuevo</span></a>
        <div class="category-title">Categorías</div>
        <a href="#">Mercado</a>
        <a href="#">Vinos y licores</a>
        <a href="#">Tecnología</a>
        <a href="#">Celulares</a>
        <a href="#">Electrodomésticos</a>
        <a href="#">Dormitorio</a>
        <a href="#">Hogar y muebles</a>
        <a href="#">Moda y accesorios</a>
        <a href="#">Belleza <span class="new-label">Nuevo</span></a>
        <a href="#">Cuidado personal</a>
        <a href="#">Bebés</a>
    </div>

    <div class="main-content">
        <div class="container">
            <h2>Bienvenido a Visión Limpieza Hogar</h2>
            <img src="https://via.placeholder.com/800x400" alt="Limpieza Hogar"> <!-- Reemplaza con la URL de una imagen relacionada -->
            <p>Encuentra los mejores productos para la limpieza de tu hogar. ¡Calidad garantizada y a precios increíbles!</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Visión Limpieza Hogar. Todos los derechos reservados.</p>
    </footer>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            if (sidebar.style.left === "-250px") {
                sidebar.style.left = "0";
            } else {
                sidebar.style.left = "-250px";
            }
        }
    </script>
</body>
</html>
