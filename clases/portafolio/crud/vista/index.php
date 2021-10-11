
<?php
   include'../modelo/conexion.php';
   $sentencia = $bd-> query("SELECT * FROM usuarios;");
   $usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
   print_r($usuario);
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista y Registro de Usuarios</title>
    <link rel="stylesheet" href="../estilos/estyle.css">
</head>

<body>
    <center>
        <table>
        <strong><h2>Lista de Usuarios</h2></strong>
            <tr id="header">
                <td><strong>id_usuario</strong></td>
                <td><strong>Apellido</strong></td>
                <td><strong>Nombre</strong></td>
                <td><strong>telefono</strong></td>
                <td><strong>correo</strong></td>
                <td><strong>contraseña</strong></td>
                <td>Editar</td>
                <td>Eliminar</td>
 
            </tr>
            <?php
               foreach  ($usuario as $dato) {
                   ?>
                       <tr>
                       <td><?php echo $dato->id_usuario; ?></td>
                       <td><?php echo $dato->Apellido; ?></td>
                       <td><?php echo $dato->nombre; ?></td>
                       <td><?php echo $dato->telefono; ?></td>
                       <td><?php echo $dato->correo; ?></td>
                       <td><?php echo $dato->contraseña; ?></td>
                       <td><a href="editar.php?id=<?php echo $dato->id_usuario; ?>" id="editar">Editar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $dato->id_usuario; ?>" id="eliminar">Eliminar</a></td>
                </tr> 

                   <?php

               }

            ?>
        </table>
       <!-- inicio insert -->
        <hr>
        <h3>Ingresar usuarios</h3>
        <form method="POST" action="insertar.php">
            <table>
                <tr>
                    <td>Apellido </td>
                    <td><input type="text" name="Apellido"></td>
                 </tr>
                 <tr>
                     <td>Nombre </td>
                     <td><input type="text" name="nombre"></td>
                 </tr>
                 <tr>
                     <td>Télefono </td>
                     <td><input type="text" name="telefono"></td>
                 </tr>
                 <tr>
                     <td>Correo </td>
                     <td><input type="text" name="correo"></td>
                 </tr>
                 <tr>
                     <td>Contraseña </td>
                     <td><input type="password" name="contraseña"></td>
                 </tr>
                 <input type="hidden" name="oculto" value="1">
                 <tr>
                     <td><input type="reset" name=""></td>
                     <td><input type="submit" value="registrar usuario" ></td>
                 </tr>
            </table>







        </form>




       <!-- fin insert -->

            
        </body>
        </html>