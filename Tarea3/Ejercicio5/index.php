<?php
$productos = array(
    array("id" => 1, "imagen" => "images/img1.png"),
    array("id" => 2, "imagen" => "images/img2.png"),
    array("id" => 3, "imagen" => "images/img3.png"),

);
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
                <div class="col-md-12 text-center">
                    <?php for($i = 0; $i < count($productos); $i++) { ?>
                        <img src="<?php echo $productos[$i]["imagen"];?>" style="width: 200px; height: 200px;">
                    <?php } ?>             
                </div>                
            </div>      
        </div>      
    </div>      
    
</body>