<?php
    $contrasena = '';
    $usuario = 'root';
    $nombrebd = 'registro';

    try {
        $bd = new PDO(
           'mysql:host=localhost; 
            dbname='.$nombrebd,
            $usuario,
            $contrasena
        
        );
    } catch (Exception $e) {
        echo "Error de conexion ".$e->getMessage();
    }

?>