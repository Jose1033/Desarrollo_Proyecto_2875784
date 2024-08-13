<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proveedores";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para seleccionar todos los registros de la tabla "proveedores"
$sql = "SELECT * FROM proveedores";

// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Mostrar los resultados en una tabla
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Correo electrónico</th>";
    echo "<th>Teléfono</th>";
    echo "<th>Dirección</th>";
    echo "<th>Ciudad</th>";
    echo "<th>Código postal</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["telefono"] . "</td>";
        echo "<td>" . $row["direccion"] . "</td>";
        echo "<td>" . $row["ciudad"] . "</td>";
        echo "<td>" . $row["codigo_postal"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay resultados";
}

// Cerrar la conexión
$conn->close();
?>