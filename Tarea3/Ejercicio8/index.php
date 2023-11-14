<?php
$productos = array(
    array("id" => 1, "nombre" => "Bebidas", "imagen" => "images/img1.jpg", "descripcion" => "Bebidas a elegir", "precio" => 0.60),
    array("id" => 2, "nombre" => "Salchipapa", "imagen" => "images/img2.jfif", "descripcion" => "Salchipapa personal", "precio" => 2.60),
    array("id" => 3, "nombre" => "Salchipapa Grande", "imagen" => "images/img3.jpeg", "descripcion" => "Salchipapa grande", "precio" => 3.85),
    array("id" => 4, "nombre" => "Salchipapa Familiar", "imagen" => "images/img4.jfif", "descripcion" => "Salchipapa familiar (p/5)", "precio" => 7),
    array("id" => 5, "nombre" => "Hamburpizza", "imagen" => "images/img5.jpg", "descripcion" => "Descripcion del producto 2", "precio" => 10),        
);
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mi tienda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div id="listaProductos">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($productos); $i++) { ?>
                <tr>
                    <td><img src="<?php echo $productos[$i]["imagen"];?>" alt="<?php echo $productos[$i]["descripcion"];?>" style="width: 100px; height: 100px;"></td>
                    <td><?php echo $productos[$i]["nombre"];?></td>
                    <td><?php echo $productos[$i]["descripcion"];?></td>
                    <td>$<?php echo $productos[$i]["precio"];?></td>
                    <td><button class="btn btn-primary" onclick="agregarAlCarrito(<?php echo $productos[$i]['id']; ?>)">Agregar al carrito</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="mt-5">
        <h3>Pedido:</h3>
        <div id="carritoItems"></div>
    </div>

<script type="text/javascript">
    let productos = <?php echo json_encode($productos, JSON_PRETTY_PRINT); ?>;
</script>
<script src="script.js"></script>
</body>
</html>