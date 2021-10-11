<?php
   // print_r($_POST); si esxiste $oculto  si no deten todo debe viahjar variable 
   if (!isset($_POST['oculto'])) {
    exit();
}

include '../modelo/conexion.php';


$Apellido = $_POST['Apellido'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$sentencia = $bd->prepare("INSERT INTO usuarios (Apellido,nombre,telefono,correo,contraseña)  VALUES (?,?,?,?,?);");
$resultado = $sentencia->execute([$Apellido,$nombre,$telefono,$correo,$contraseña]);

if ($resultado === TRUE) {
    //echo "<strong><h2>Los datos del usuario han sido ingresados exitosamente!!!</h2></strong>";
   
   //hacer una redireccion de los datos 
    header("Location: index.php");
} else {
    echo "<h2> ocurrio un error </h2>";
}
?>
    
    