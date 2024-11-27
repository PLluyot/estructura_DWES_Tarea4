<?php
    // el modelo login, incluye todas las operaciones CRUD relacionadas con el login.
    // lo implementaremos en forma de funciones (ya que aun no hemos tratado los objetos)
    //por ejemplo
    require_once "bd.php";
    function comprobar_usuario($usuario, $password){
        //establece una conexion con la BD
        //lanza una consulta para comprobar si el usuario y passwd es correcto
            //devuelte true o false
        //cierra la conexion con la BD
    }

    function actualizar_ultimoacceso($usuario){
        //establece una conexion con la BD
        //hace un update en la tabla de usuario poniendo la fecha actual como ultimo acceso.
        //cierra la conexion con la BD
    }
?>