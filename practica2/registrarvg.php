<?php
include 'conexion.php';
$no_serie = $_POST["no_serie"];
$nombre = $_POST["nombre"];
$desarrolladora = $_POST["desarrolladora"];
$precio = $_POST["precio"];

$sentencia = $conectar->prepare("INSERT INTO videojuegos(no_serie, nombre, desarrolladora, precio) values (?,?,?,?);");
$resultado = $sentencia->execute([$no_serie, $nombre, $desarrolladora, $precio]);

$verificar_numero = mysqli_query($conectar, "SELECT * FROM videojuegos WHERE no_serie = '$no_serie'");
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