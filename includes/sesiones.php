<!-- aquí manejaremos todo lo relacionado a las sesiones -->
 <!-- lo habitual es que en todas las páginas gestionemos el acceso con sesiones, por lo que 
 deberíamos incluir este php en todas las páginas. -->
 <?php
    //inicializamos la sesión
    session_start();

    //por ejemplo una función que verifique si existe una variable de sesion llamada usuario
    function verificar_autentificacion()
    {
        return isset($_SESSION['usuario']) ? true : false;
    }

    //etc...
 ?>