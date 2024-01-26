<?php
// Establecer la conexión a la base de datos
$server = "localhost";
$user = "root";
$pass = "";
$baseDeDatos = "bd_patitassv";

$conexion = new mysqli($server, $user, $pass, $baseDeDatos);

//Por si hay algun error
/*if($conexion->connect_errno){
    die("Conexion Fallida" . $conexion->connect_errno);
}else{
    echo "Base de Datos conectada";
}*/

?>