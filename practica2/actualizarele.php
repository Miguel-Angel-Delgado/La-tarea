<?php
include ('conexion.php');

$no_serie = $_POST['no_serie'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];

try{
    $actualizar ="UPDATE electrodomesticos SET modelo=:modelo,marca=:marca,precio=:precio WHERE no_serie = :no_serie";
    $resultado=$conectar->prepare($actualizar);
    $resultado->execute(array(":no_serie"=>$no_serie,":modelo"=>$modelo,":marca"=>$marca,":precio"=>$precio));
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