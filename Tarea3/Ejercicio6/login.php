<?php
session_start();

// Array asociativo de usuarios y claves
$usuarios = array(
    "Andres" => "123",
    "Joffer" => "456",
    "Jailine" => "787"
);

// Mensajes de error y éxito
$error = "";
$exito = "";

// Verificar si el formulario se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $usuarioIngresado = isset($_POST['usuario']) ? $_POST['usuario'] : "";
    $claveIngresada = isset($_POST['clave']) ? $_POST['clave'] : "";

    // Validar la información
    if (isset($usuarios[$usuarioIngresado]) && $usuarios[$usuarioIngresado] === $claveIngresada) {
        $exito = "¡Inicio de sesión exitoso!";
    } else {
        $error = "Usuario o clave incorrectos. Inténtalo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
            background: linear-gradient(rgb(129, 246, 224), rgb(75, 134, 185));
        }

        .container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-6">

            <a href="..\index.php">Menú principal</a>
            <h2 class="text-center">Inicio de Sesión</h2>

            <?php if (!empty($error)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($exito)) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $exito; ?>
                </div>
            <?php endif; ?>
            <table border="1">
                    <tr>
                        <th>Usuario</th>
                        <th>Clave</th>
                    </tr>
                    <?php foreach ($usuarios as $usuario => $clave) : ?>
                        <tr>
                            <td><?php echo $usuario; ?></td>
                            <td><?php echo $clave; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            <form method="post">
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="form-group">
                    <label for="clave">Clave:</label>
                    <input type="password" class="form-control" id="clave" name="clave" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>
