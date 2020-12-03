<?php

$codigo = $_POST['no_serie'];
include ('conexion.php');


$sentencia = $conectar->prepare("DELETE FROM electrodomesticos WHERE no_serie = ?;");
$resultado = $sentencia->execute([$codigo]);

mysqli_close($conexion);

echo '<script>
    alert("Eliminado correctamente");
    window.history.go(-1);
    </script>';
?>