<?php
// se usa el requiere para si psi se necesita el archivo conexion
require "conexion.php";
mysqli_set_charset($conexion,'utf8');


//genear el query
$consulta_sql="SELECT * FROM usuarios";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
echo "<table border='2' >
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Nombre De Usuario</th>
        <th>Numero De Cuenta</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['id'] ."</td>";
     echo"<td>". $row['nombre'] ."</td>";
     echo"<td>". $row['nombre_usuario'] ."</td>";
     echo"<td>". $row['no_cuenta'] ."</td>";
     echo"<td>". $row['direccion'] ."</td>";
     echo"<td>". $row['telefono'] ."</td>";
     echo"<td>". $row['correo'] ."</td>";
     echo "</tr>";
     
    }
    echo "</table>";

}else{
    
    
    echo"<h1 style='color:red' >Sin Ningun registro</h1>";
    }

    echo "<h1><a href='EliminarUsuario.php'>Eliminar Usuarios</a></h1>";

    echo "<h1><a href='formulario.php'>Formulario De Registro</a></h1>";

?>


