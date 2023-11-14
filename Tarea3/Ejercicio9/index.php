<?php
session_start();

// Función para obtener comentarios
function getComments() {
    return isset($_SESSION['comments']) ? $_SESSION['comments'] : array();
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
        <h1>Comentarios</h1>
        <a href="..\index.php">Menú principal</a>
        <?php
        
        $comments = getComments();
        foreach ($comments as $comment) {
            echo '<div class="comment">';
            echo '<p><strong>' . $comment['username'] . ':</strong> ' . $comment['comment'] . '</p>';
            echo '</div>';
        }
        ?>

        <!-- Enlace al formulario de comentarios en comment.php -->
        <a href="comment.php">Dejar un comentario</a>
    </div>
</body>
</html>
