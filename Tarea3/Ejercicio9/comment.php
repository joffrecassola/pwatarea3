<?php
session_start();

// Procesar el formulario de comentario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $comment = htmlspecialchars($_POST['comment']);

    if (!empty($comment)) {
        // Guardar el nuevo comentario en la sesión
        if (!isset($_SESSION['comments'])) {
            $_SESSION['comments'] = array();
        }

        $newComment = array('username' => $username, 'comment' => $comment);
        array_push($_SESSION['comments'], $newComment);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 </title>
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
        <h1>Dejar un Comentario</h1>
        
        <!-- Formulario para dejar comentarios -->
        <form action="comment.php" method="post">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="comment">Comentario:</label>
            <textarea id="comment" name="comment" required></textarea>
            <button type="submit">Enviar Comentario</button>
        </form>

        <!-- Enlace de regreso a la página principal -->
        <a href="index.php">Volver a los comentarios</a>
    </div>
</body>
</html>
