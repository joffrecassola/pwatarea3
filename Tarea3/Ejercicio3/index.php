<?php
session_start();

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}


$_SESSION['visitas']++;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 </title>
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

            <div class="col-md-12 text-center">
                <a href="..\index.php">Menú principal</a>
                <p>¡Has visitado esta página <?php echo $_SESSION['visitas']; ?> veces!</p>                
            </div>      
        </div>      
    </div>      
    
</body>