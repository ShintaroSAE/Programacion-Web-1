<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Registrar Usuario</title>
 <meta charset = "utf-8">
</head>


<script>

    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;
        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

        //patron de entrada, en este caso solo acepta numero
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>

<body>
 <header>
 <h2 style="text-align:center">Registro </h2>
</header>

<form action="funcion_registro.php" method="post">

 <hr />
 <!--Nombre-->
 <div class="form-group">
 <label for="nombre">Nombre Completo:</label><br>
 <input type="text" name="nombre" maxlength="255"  required>
 <br/><br/>
 </div>
 <!--Nombre Usuario-->
<div class="form-group">
<label for="nombre_usuario">Nombre Usuario:</label><br>
<input type="text" name="nombre_usuario" maxlength="255"  required>
<br/><br/>
</div>
<!--Numero De Cuenta-->
<div class="form-group">
<label for="no_cuenta">Numero De Cuenta:</label><br>
<input type="text" name="no_cuenta" maxlength="255"  required>
<br/><br/>
</div>
 <!-- Direcion -->
<div class="form-group">
<label for="direccion">Direccion:</label><br>
<input type="text" name="direccion" maxlength="255" required>
<br/><br/>
</div>
<!-- Telefono -->
<div class="form-group">
<label for="telefono">Telefono:</label><br>
<input type="text" onkeypress="return valida(event)" name="telefono" maxlength="15" required>
<br/><br/>
</div>
<!-- Correo -->
<div class="form-group">
<label for="correo">Email:</label><br>
<input type="email" name="correo" maxlength="35" required>
<br/><br/>
</div>
</div>
 <br/><br/>
 <input type="submit" name="submit" class="btn btn-primary" value="Registrarme">
 <input type="reset" name="clear" class="btn btn-primary" value="Borrar"> 

 </form>
 
 <h1><a href="index.php">Tabla de Registros</a></h1>

 <h1><a href="EliminarUsuario.php">Eliminar Usuario</a></h1>

 </body>
</html>
