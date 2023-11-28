<?php
$host_db="localhost";
$user_db="if0_35173766";
$pass_db="e5lFFaqgy3eY9";
$db_name="if0_35173766_asistencia";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
} else {
    echo"<h2 style='color: greenyellow; text-align: center;'>Hola, tu conexión está funcionando.</h2>";
}


?>