<?php

/*=======================================
=            Depurar errores            =
=======================================*/
ini_set("display_errors", 1);	//iniciar o activar la visualizacion de errores
ini_set("log_errors", 1);		//crear un archivo donde se guarden los errores, 1 significa activo
ini_set("error_log", "C:/MAMP/htdocs/ecommerce/web/php_error_log"); //depurador de errores php - ruta donde guardamos el log

/*=====  End of Depurar errores  ======*/


//de pirmera mano siempre se ejecuta el index.php de la carpeta views
//mandamos llamar al controlador para que ejecute lo que hay ahi que en este caso ejecuta el archivo template.php
require_once "controllers/controller.template.php";

//para poder instanciar y crear un objeto que se llamara index, esto me permite ejecutar los metodos que hay dentro de esa
//clase
$index = new TemplateController();
//ahora el objeto que llamamos index ejecuta el metodo que hay dentro de esa clase que se llama index();
$index->index();

