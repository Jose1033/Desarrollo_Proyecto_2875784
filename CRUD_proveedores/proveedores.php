<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'proveedor');

// Crear conexión
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificar la conexión
if (!$link) {
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}

// Manejar solicitudes de CRUD
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'] ?? '';
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $city = $_POST['city'] ?? '';
    $postalCode = $_POST['postal-code'] ?? '';

    switch ($action) {
        case 'create':
            $sql = "INSERT INTO proveedores (nombre, correo_electronico, telefono, direccion, ciudad, codigo_postal)
                    VALUES ('$name', '$email', '$phone', '$address', '$city', '$postalCode')";
            mysqli_query($link, $sql);
            break;
        
        case 'update':
            $sql = "UPDATE proveedores
                    SET nombre='$name', correo_electronico='$email', telefono='$phone', direccion='$address', ciudad='$city', codigo_postal='$postalCode'
                    WHERE id=$id";
            mysqli_query($link, $sql);
            break;

        case 'delete':
            $sql = "DELETE FROM proveedores WHERE id=$id";
            mysqli_query($link, $sql);
            break;
    }

    header("Location: index.php");
    exit();
}

// Leer datos
$result = mysqli_query($link, "SELECT * FROM proveedores");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD proveedores</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 2px 1px;
            cursor: pointer;
            border-radius: 4px;
        }
        .delete-btn {
            background-color: #dc3545;
        }
        .delete-btn:hover {
            background-color: #c82333;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>CRUD proveedores</h1>
        <form id="crud-form" method="POST">
            <input type="hidden" id="edit-id" name="id">
            <input type="hidden" name="action" id="form-action" value="create">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Dirección:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="city">Ciudad:</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="postal-code">Código postal:</label>
                <input type="text" id="postal-code" name="postal-code" required>
            </div>
            <button type="submit">Agregar</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Código Postal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr data-id="<?php echo $row['id']; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['correo_electronico']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>
                            <td><?php echo $row['ciudad']; ?></td>
                            <td><?php echo $row['codigo_postal']; ?></td>
                            <td>
                                <button onclick="editItem(<?php echo $row['id']; ?>)">Editar</button>
                                <button class="delete-btn" onclick="deleteItem(<?php echo $row['id']; ?>)">Eliminar</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8">No hay datos disponibles.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
        const form = document.getElementById('crud-form');
        let editId = null;

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;
            const city = document.getElementById('city').value;
            const postalCode = document.getElementById('postal-code').value;

            const action = editId ? 'update' : 'create';
            document.getElementById('form-action').value = action;
            form.submit();
        });

        function editItem(id) {
            const row = document.querySelector(`tr[data-id='${id}']`);
            const cells = row.querySelectorAll('td');
            document.getElementById('name').value = cells[1].innerText;
            document.getElementById('email').value = cells[2].innerText;
            document.getElementById('phone').value = cells[3].innerText;
            document.getElementById('address').value = cells[4].innerText;
            document.getElementById('city').value = cells[5].innerText;
            document.getElementById('postal-code').value = cells[6].innerText;
            document.getElementById('edit-id').value = id;
            document.getElementById('form-action').value = 'update';
            editId = id;
        }

        function deleteItem(id) {
            if (confirm('¿Estás seguro de que quieres eliminar este proveedor?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '';

                const inputId = document.createElement('input');
                inputId.type = 'hidden';
                inputId.name = 'id';
                inputId.value = id;
                form.appendChild(inputId);

                const actionInput = document.createElement('input');
                actionInput.type = 'hidden';
                actionInput.name = 'action';
                actionInput.value = 'delete';
                form.appendChild(actionInput);

                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
</body>
</html>

<?php
// Cerrar la conexión
mysqli_close($link);
?>
