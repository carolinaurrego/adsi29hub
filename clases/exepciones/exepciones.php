<! DOCTYPE html >
< html  lang = " en " >
< cabeza >
    < meta  charset = " UTF-8 " >
    < meta  http-equiv = " X-UA-Compatible " content = " IE = edge " >
    < meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
    < título > Excepciones </ título >
</ cabeza >
< cuerpo >
    <! - EXCEPCIONES ->
    <? php
        / * $ num = 20;
         tratar {
            para ($ i = 0; $ i <$ num; $ i ++) { 
                if ($ num% $ i == 0) {
                    echo $ i. 'Es divisor';
                }
            }
         } captura (Error $ e) {
             echo $ e-> getMessage (). ' Error de salida ';
         }
         echo '<br> Despues del ciclo for'; * /
    ?>
    <! - CONEXION A LA BASE DE DATOS DOP ->
    <? php
        // Objetos de datos PDO
        $ dns = 'mysql: host = localhost; dbname = colegio_pru' ;
        $ nombre de usuario = 'raíz' ;
        $ contraseña = '' ;
        prueba {
            $ conexion = nuevo  PDO ( $ dns , $ nombre de usuario , $ contraseña );
            $ declaración = $ conexión -> preparar ( 'seleccionar * de estudiantes' );
            $ declaración -> ejecutar ();
        } captura ( PDOException  $ obj ) {
            echo  $ obj -> getMessage ();
            / * echo '<br>';
            echo '<br> Este mensaje lo escribe el programador <br>'; * /
        }
        / * echo '<br>';
        echo 'No se genero el objeto DOP'; * /
        / * var_dump ($ conexión); * /
        var_dump ( $ declaración );
        / * foreach ($ declaración como $ clave) {
            echo '<br> --------------------------------------------- ----------- ';
            echo '<br> -'. 'id estudiante -'. $ clave ['id_estudiante']. '<br>';
            echo '<br> -'. 'nombre estudiante -'. $ clave ['nombres_est']. '<br>';
            echo '<br> -'. 'apellido estudiante -'. $ clave ['apellido_est']. '<br>';
            echo '<br> -'. 'direccion -'. $ clave ['direccion_est']. '<br>';
            echo '<br> -'. 'telefono -'. $ key ['telefono_est']. '<br>';
            echo '<br> -'. 'contraseña -'. $ key ['password_est']. '<br>';
            echo '<br> -'. 'id grupo -'. $ clave ['id_grupo']. '<br>';
        } * /
        while ( $ clave = $ declaración -> fetch ()) {
            echo  '<br>' ;
            echo  '° id estudiante -' . $ clave [ 'id_estudiante' ];
            echo  '° nombre estudiante -' . $ clave [ 'nombres_est' ];
            echo  '° apellido estudiante -' . $ clave [ 'apellido_est' ];
            echo  '° direccion -' . $ clave [ 'direccion_est' ];
            echo  '° telefono -' . $ clave [ 'telefono_est' ];
            echo  '° contraseña -' . $ clave [ 'contraseña_est' ];
            echo  '° id grupo -' . $ clave [ 'id_grupo' ];
            echo  '<br>' ;
        }
    ?>
</ cuerpo >
</ html >