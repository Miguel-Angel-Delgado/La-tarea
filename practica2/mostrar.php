<?php
    include 'conexion.php';
    $sentencia = $conectar->query("SELECT * FROM videojuegos;");
    $videojuegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
<title>MOSTRAR</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/mostrar.css">
</head>
<body>
<h1>Tabla de videojuegos</h1>

<form method="post" class="form-btn">
<div class="container-table">
    <div class="table__title">Videojuegos</div>
    <div class="table__header">no_serie</div>
    <div class="table__header">Nombre</div>
    <div class="table__header">Desarrolladora</div>
    <div class="table__header">Precio</div>

    <?php foreach ($videojuegos as $dato) {
                ?>
    <div class="table__item"><?php echo $dato->no_serie; ?></div>
    <div class="table__item"><?php echo $dato->nombre; ?></div>
    <div class="table__item"><?php echo $dato->desarrolladora; ?></div>
    <div class="table__item"><?php echo $dato->precio; ?></div>
    <?php
            }
        ?>
</div>
</form>
</body>
</html>