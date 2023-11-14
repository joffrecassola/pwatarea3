<?php
session_start();

// Verificar si el formulario se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $usuarioNuevo = isset($_POST['usuario']) ? $_POST['usuario'] : "";
    $claveNueva = isset($_POST['clave']) ? $_POST['clave'] : "";

    // Validar que el usuario no exista
    if (!isset($_SESSION['usuarios'][$usuarioNuevo])) {
        // Agregar el nuevo usuario al array
        $_SESSION['usuarios'][$usuarioNuevo] = $claveNueva;
        $mensaje = "¡Registro exitoso! Ahora puedes iniciar sesión.";
    } else {
        $error = "El usuario ya existe. Por favor, elige otro nombre de usuario.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html,body{
            height: 100%;
            background: linear-gradient(rgb(129, 246, 224), rgb(75, 134, 185));
        }

        .transparent-container {
            background-color: transparent;
        }
    </style>
</head>  

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <a href="../index.php">Menú principal</a>

                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($mensaje)) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php endif; ?>

                <h2>Registro de Usuario</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="clave">Clave:</label>
                        <input type="password" class="form-control" id="clave" name="clave" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
            </div>      
        </div>      
    </div>      
</body>
</html>
