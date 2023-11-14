<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html,body{
            height: 100%;
            background: linear-gradient(rgb(129, 246, 224), rgb(75, 134, 185));
        }


    </style>
    	<style type="text/css">
            .submenu {
                display: none;
            }
            .opacity {
                opacity: 0.5;
            }
            li{
                list-style: none;
            }
        </style>
</head>

<body>
    <div class="container">
        <div class="row" >
            <div class="col-md-12 text-center">
                <a href="..\index.php">Menú principal</a>
            </div>   
            
            <div class="col-md-12 text-center">
                <ul>
                    <li class="subtitle">
                        <a href="#" class="action">Inicio</a>
                    </li>
                    <li class="subtitle">
                        <a href="#" class="action">Nosotros</a>
                        <ul class="submenu">
                            <li>
                                <a href="#">Nosotros 1</a>
                            </li>
                            <li>
                                <a href="#">Nosotros 2</a>
                            </li>
                            <li>
                                <a href="#">Nosotros 3</a>
                            </li>
                        </ul>

                    </li>
                    <li class="subtitle">
                        <a href="#" class="action">Contacto</a>
                        <ul class="submenu">
                            <li>
                                <a href="#">Contacto 1</a>
                            </li>
                            <li>
                                <a href="#">Contacto 2</a>
                            </li>
                            <li>
                                <a href="#">Contacto 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="subtitle">
                        <a href="#" class="action">Empresa</a>
                        <ul class="submenu">
                            <li>
                                <a href="#">Empresa 1</a>
                            </li>
                            <li>
                                <a href="#">Empresa 2</a>
                            </li>
                            <li>
                                <a href="#">Empresa 3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script>
        $(".subtitle .action").click(function(event){
        var subtitle = $(this).parents(".subtitle");
        var submenu = $(subtitle).find(".submenu");
        
        $(".submenu").not($(submenu)).slideUp("slow").removeClass("opacity");
        $(".open").not($(subtitle)).removeClass("open");

        $(subtitle).toggleClass("open");
        $(submenu).slideToggle("slow").toggleClass("opacity");

        return false;
        });
    </script>
</body>
</html>