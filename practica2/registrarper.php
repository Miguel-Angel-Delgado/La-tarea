<?php
include 'conexion.php';
$no_serie = $_POST["no_serie"];
$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$precio = $_POST["precio"];

$sentencia = $conectar->prepare("INSERT INTO perfumes(no_serie, nombre, marca, precio) values (?,?,?,?);");
$resultado = $sentencia->execute([$no_serie, $nombre, $marca, $precio]);

$verificar_numero = mysqli_query($conectar, "SELECT * FROM perfumes WHERE no_serie = '$no_serie'");
if (mysqli_num_rows($verificar_numero) > 1){
    echo '<script>
    alert("Numero de serie ya existente");
    window.history.go(-1);
    </script>';
    exit;
}

if(!$resultado) {
    echo 'Error al registrar';
} else {
    echo '<script>
    alert("Producto registrado exitosamente");
    window.history.go(-1);
    </script>';
}

mysqli_close($conectar);