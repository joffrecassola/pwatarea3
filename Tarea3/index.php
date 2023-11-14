<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Cards</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html {
            height: 100%;
        }
        body {
            background: linear-gradient(to bottom, #b61818, #591da8);
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            height: 6em;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" onclick="goPage('1')">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 1: Menú desplegable</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" onclick="goPage('2')">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 2: Formulario de Contacto</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" onclick="goPage('3')">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 3: contador de visitas en PHP</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" onclick="goPage('4')">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 4: Juego de adivinanzas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" onclick="goPage('5')">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 5: Galería de imágenes</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" onclick="goPage('6')">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 6: Sistema de login</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" onclick="goPage('7')">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 7: Formulario de registro</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" onclick="goPage('8')">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 8: Carrito de compras</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" onclick="goPage('9')">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 9: Sistema de comentarios</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" onclick="goPage('10')">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 10: Cálculo de promedios en PHP</h5>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <script>
        function goPage(pageNumber){
            
            if (pageNumber === '6'){
                var pagUrl = 'Ejercicio'+pageNumber+'/login.php';
                window.location.href = pagUrl;
            }
            else if (pageNumber === '7') {
                var pagUrl = 'Ejercicio'+pageNumber+'/register.php';
                window.location.href = pagUrl;
            }else{
                var pagUrl = 'Ejercicio'+pageNumber+'/index.php';
                window.location.href = pagUrl;
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
