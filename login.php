<?php
    /*en lugar de incluir una página extensa donde gestionemos la sesión del usuario,
        validemos los campos del formulario, 
        comprobemos las credenciales en la base de datos, realicemos alguna operación con la base de datos,
        mostremos los mensajes de error y posteriormente el formulario

        y tenerlo todo mezclado, separamos en distintos archivos cada parte.
    */
?>

<?php
    // página login
    // validaremos que el usuario está autenticado ya que si lo está lo redirigiremos a la página principal index.php
    //desde esta página el usuario se autenticará en la base de datos y almacenará en sesión sus credenciales.

    // INCLUDES:
    //incluiremos en esta parte los includes necesarios para gestionar las sesiones.
    //incluiriamos el modelo que necesitemos, llamando a la función correspondiente
    include "includes/sesiones.php";
    include "models/login_modelo.php";
    
    // CONTENIDO
    //validamos datos que nos lleguen por POST o GET si es que tenemos que validar algo
    //llamamos a una o varias funciones del modelo si es necesario
    /*
        aquí validaríamos por ejemplo por POST los datos que nos llegan del usuario y password que no vienen vacíos, etc...
        si la validación es correcta llamaríamos a una función del modelo --> validarusuario
        si todo es correcto --> redirigimos a la página principal
        si es incorrecto seguimos mostrando la vista con los errores.

    */

    //VISTA
    //incluimos la vista de login
    include "views/login_vista";

?>
