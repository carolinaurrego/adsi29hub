<?php
    //print_r($_GET);
    if (!isset($_GET['id'])) {
        //exit();
        header("Location: index.php");
    }

    include '../modelo/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("SELECT * FROM usuarios WHERE id_usuario = ?;");
    $resultado = $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <center>
        <h2 id="h2">Editar Usuario</h3>
        <form method="POST" action="editar_proceso.php">
            <table>
                <tr>
                   
                    <tr>
                        <td>Apellido </td>
                        <td><input type="text" name="edit_Apellido" value="<?php echo $persona->Apellido ?>"></td>
                    </tr>
                    <tr>
                        <td>nombre </td>
                        <td><input type="text" name="edit_nombre" value="<?php echo $persona->nombre ?>"></td>
                    </tr>
                   
                   
                    <tr>
                        <td>Télefono </td>
                        <td><input type="text" name="edit_telefono" value="<?php echo $persona->telefono ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Correo </td>
                        <td><input type="text" name="edit_correo" value="<?php echo $persona->correo ?>"></td>
                    </tr>
                    <tr>
                        <td>Contraseña </td>
                        <td><input type="password" name="edit_contraseña" value="<?php echo $persona->contraseña ?>"></td>
                    </tr>
                    <tr>
                    <input type="hidden" name="oculto">
                    
                    <input type="hidden" name="edit_id" value="<?php echo $persona->id_usuario ?>">
                    <br>
                    <td><input type="submit" value="Guardar Cambios" id="cambios"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>