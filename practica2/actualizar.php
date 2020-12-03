<?php
include ('conexion.php');

$no_serie = $_POST['no_serie'];
$nombre = $_POST['nombre'];
$desarrolladora = $_POST['desarrolladora'];
$precio = $_POST['precio'];

try{
    $actualizar ="UPDATE videojuegos SET nombre=:nombre,desarrolladora=:desarrolladora,precio=:precio WHERE no_serie = :no_serie";
    $resultado=$conectar->prepare($actualizar);
    $resultado->execute(array(":no_serie"=>$no_serie,":nombre"=>$nombre,":desarrolladora"=>$desarrolladora,":precio"=>$precio));
    echo "registro actualizado";
    $resultado->closecursor();
    }
    catch (PDOException $pe){
        die ("Error al actualizar $ventas :" . $pe->getMessage());
        }
        echo '<script>
    alert("actualizado correctamente");
    window.history.go(-1);
    </script>';