<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 </title>
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
<div class="col-md-12 text-center">
                    <a href="..\index.php">Menú principal</a>
                </div>  
    <h1>Calculadora de Promedios</h1>

    <?php
  

    // Inicializar el array de alumnos si no existe
    if (!isset($_SESSION['alumnos'])) {
        $_SESSION['alumnos'] = [];
    }

    // Verificar si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los datos del formulario
        $apellido = htmlspecialchars($_POST['apellido']);
        $nombre = htmlspecialchars($_POST['nombre']);
        $notas = array_map('intval', $_POST['notas']);

        // Calcular el promedio individual
        $promedioIndividual = array_sum($notas) / count($notas);

        // Agregar al array de alumnos
        $_SESSION['alumnos'][] = array("apellido" => $apellido, "nombre" => $nombre, "notas" => $notas, "promedio" => $promedioIndividual);
    }

    // Mostrar todos los registros y calcular el promedio general
    $promedioGeneral = 0;
    foreach ($_SESSION['alumnos'] as $alumno) {
        $apellido = $alumno["apellido"];
        $nombre = $alumno["nombre"];
        $promedioIndividual = $alumno["promedio"];

        // Mostrar el resultado
        echo "<p>$apellido, $nombre: Promedio = $promedioIndividual</p>";

        // Sumar al promedio general
        $promedioGeneral += $promedioIndividual;
    }

    // Calcular el promedio general
    $totalRegistros = count($_SESSION['alumnos']);
    if ($totalRegistros > 0) {
        $promedioGeneral /= $totalRegistros;
        echo "<p>Promedio General de todos los alumnos = $promedioGeneral</p>";
    }
    ?>

    <h2>Ingresar Datos del Alumno</h2>
    <form action="index.php" method="post">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="notas[]" required>
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="notas[]" required>
        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="notas[]" required>
        <button type="submit">Calcular Promedio</button>
    </form>
</body>
</html>
