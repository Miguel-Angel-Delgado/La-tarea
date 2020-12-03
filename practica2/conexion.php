<?php
$servername = "localhost";
$database = "ventas";
$username = "root";
$password = "";

$sql = "mysql: host=$servername; dbname=$database;";
$dsn_options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
$conectar = new PDO($sql, $username, $password, $dsn_options);
echo "Conexion Realizada";
} catch (PDOException $error) {
    echo 'error de conexion: ' . $error->getMessage();
}
?>