<?php
    include 'conexion.php';
    $sentencia = $conectar->query("SELECT * FROM perfumes;");
    $perfumes = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
<h1>Tabla de perfumes</h1>

<form method="post" class="form-btn">
<div class="container-table">
    <div class="table__title">Perfumes</div>
    <div class="table__header">no_serie</div>
    <div class="table__header">nombre</div>
    <div class="table__header">marca</div>
    <div class="table__header">precio</div>

    <?php foreach ($perfumes as $dato) {
                ?>
    <div class="table__item"><?php echo $dato->no_serie; ?></div>
    <div class="table__item"><?php echo $dato->nombre; ?></div>
    <div class="table__item"><?php echo $dato->marca; ?></div>
    <div class="table__item"><?php echo $dato->precio; ?></div>
    <?php
            }
        ?>
</div>
</form>
</body>
</html>