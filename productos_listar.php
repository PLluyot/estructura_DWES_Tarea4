<?php
    // página listado de productos
    // validaremos que el usuario está autenticado ya que si lo está lo redirigiremos a la página principal index.php
    //desde esta página el usuario visualizará los productos existentes en la base de datos.

    // INCLUDES:
    //incluiremos en esta parte los includes necesarios para gestionar las sesiones.
    //incluiriamos el modelo que necesitemos, llamando a la función correspondiente
    include "includes/sesiones.php";
    include "models/productos_modelo.php";
    
    // CONTENIDO
    //validamos datos que nos lleguen por POST o GET si es que tenemos que validar algo
    //llamamos a una o varias funciones del modelo si es necesario
    /*
        aquí validaríamos por ejemplo por POST o GET los datos que nos llegan que no vienen vacíos, que cumplen tales condiciones,etc...
        si la validación es correcta llamaríamos a una función del modelo --> listarProductos por ejemplo

    */

    //VISTA
    //incluimos la vista de listar los productos
    include "views/productos/productos_listar_vista.php";

?>