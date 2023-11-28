<?php
//conexion a la base datos
include "conexion.php";
mysqli_set_charset($conexion,'utf8');

//declaracion de varibales para formulario


$buscarUsuario = "SELECT * FROM usuarios where nombre_usuario = '$_POST[nombre_usuario]'";

$result = $conexion -> query($buscarUsuario);
$count = mysqli_num_rows($result);

if($count ==1 ){
    echo'El nombre se usuario ya ha sido ocupado';
    header('Location: ./formulario.php');
    
}else{
    mysqli_query($conexion, "INSERT INTO usuarios (
    nombre,
    nombre_usuario,
    no_cuenta,
    direccion,
    telefono,
    correo)
    VALUES(
    '$_POST[nombre]',
    '$_POST[nombre_usuario]',
    '$_POST[no_cuenta]',
    '$_POST[direccion]',
    '$_POST[telefono]',
    '$_POST[correo]'        
    )");

echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
echo "<h4>" . "Bienvenido: " . $_POST['usuario'] . "</h4>" . "\n\n";
echo "<h5>" . "<a href='./formulario.php'>Registro</a>" . "</h5>";

//termina el else
}



?>