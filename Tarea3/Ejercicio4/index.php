<?php
session_start();


if (!isset($_SESSION['numero_secreto'])) {
    $_SESSION['numero_secreto'] = rand(1, 10);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $numero_usuario = isset($_POST['numero_usuario']) ? (int)$_POST['numero_usuario'] : 0;


    if ($numero_usuario === $_SESSION['numero_secreto']) {
        $mensaje = "¡Felicidades! Has adivinado el número secreto: {$_SESSION['numero_secreto']}.";

        $_SESSION['numero_secreto'] = rand(1, 10);
    } else {
        $mensaje = "Lo siento, ese no es el número correcto. ¡Inténtalo de nuevo!";
    }
} else {

    $mensaje = "Bienvenido al juego de adivinanzas. Adivina el número entre 1 y 10.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 </title>
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
    
    <body>
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <a href="..\index.php">Menú principal</a>
                </div>      
            <h1>Juego de Adivinanzas</h1>
            <p><?php echo $mensaje; ?></p>

            <?php if (isset($_SESSION['numero_secreto'])) : ?>
                <form method="post">
                    <label for="numero_usuario">Adivina el número:</label>
                    <input type="number" name="numero_usuario" id="numero_usuario" required>
                    <button type="submit">Comprobar</button>
                </form>
            <?php endif; ?>

            <p><button onclick="reiniciarJuego()">Reiniciar Juego</button></p>
            </div>
        </div>
    </body>
</html>
