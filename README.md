# Desarrollo_Proyecto_2875784
Desarrollo de los bloques de comisionistas y proveedores, Jose Alejandro Moreno, Julián Duque, Josué Martínez
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limpieza Hogar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="productos">
            <h2>Productos de Limpieza</h2>
            <ul>
            
            </ul>
        </section>
        <section id="servicios">
            <h2>Servicios de Limpieza</h2>
            <ul>
                <li>
                    <h3>Limpieza de Hogar</h3>
                    <p>Nuestro servicio de limpieza de hogar es personalizado y adaptado a las necesidades de cada cliente.</p>
                </li>
                <li>
                    <h3>Limpieza de Oficinas</h3>
                    <p>Nuestro servicio de limpieza de oficinas es rápido y eficiente, para que puedas concentrarte en tu trabajo.</p>
                </li>
                <li>
                    <h3>Limpieza de Ventanas</h3>
                    <p>Nuestro servicio de limpieza de ventanas es seguro y eficiente, para que puedas disfrutar de una vista clara.</p>
                </li>
            </ul>
        </section>
        <section id="contacto">
            <h2>Contacto</h2>
            <form action="contacto.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje"></textarea><br><br>
                <input type="submit" value="Enviar">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Limpieza Hogar</p>
    </footer>
</body>
</html>
