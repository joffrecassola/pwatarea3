<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 </title>
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
            </div>            

            <div class="col-md-12 text-center">
                <form id="registration-form">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" ><br>

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" ><br>

                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" ><br>

                    <button type="submit">Registrar</button>
                </form>
            </div>            
        </div>
    </div>    

    <script>
        document.getElementById('registration-form').addEventListener('submit', function(event) {
            const nombre = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!nombre || !email || !password) {
                alert('Por favor, complete todos los campos antes de enviar el formulario.');
                event.preventDefault(); // Evitar que se envíe el formulario
            }
        });
    </script>
</body>
</html>