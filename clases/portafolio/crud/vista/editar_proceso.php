<?php 
    //Proceso actualizacion de datos del usuario
   // print_r($_POST);
   if (!isset($_POST['oculto'])) {
    //exit();
    header("Location: index.php");
}
include '../modelo/conexion.php';
$edit_id = $_POST['edit_id'];
$edit_Apellido = $_POST['edit_Apellido'];
$edit_nombre = $_POST['edit_nombre'];


$edit_telefono = $_POST['edit_telefono'];

$edit_correo = $_POST['edit_correo'];
$edit_contraseña = $_POST['edit_contraseña'];

$sentencia = $bd->prepare("UPDATE usuarios SET   
                                                 Apellido            = ?,
                                                  nombre       = ?,
                                                 
                                                
                                                  telefono           = ?,
                                                
                                                  correo             = ?,
                                                  contraseña         = ?
                            WHERE id_usuario = ?; ");
$resultado = $sentencia->execute([$edit_Apellido,$edit_nombre,
                               $edit_telefono,$edit_correo,$edit_contraseña,$edit_id]);

if ($resultado === TRUE) {
    //echo "<strong><h2>Los datos del usuario han sido actualizados exitosamente!!!</h2></strong>";
    header("Location: index.php");
} else {
    echo "<h2>Ups! ocurrio un error al actualizar los datos del usuario</h2>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Actualización Usuario</title>
<link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>

</body>
</html>

