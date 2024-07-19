
<?php

/*necesito que el index.php de views integre la plantilla llamada template asi que lo hacemos desde aqui del controlador*/

class TemplateController{


	/*=============================================
	= Metodo index que trae la vista o plantilla principal del sitio =
	=============================================*/
	
	
	//metodo publico llamado index que va a llamar a views/template.php
	public function index(){

		include "views/template.php";

	}//cierre del metodo index


	/*=============================================
	=           Ruta Principal o Dominio de Sitio =
	=============================================*/
	
	
	static public function path(){

		//si es diferente a vacio, y si esta encendida la variable HTTPS 
		if (!empty($_SERVER['HTTPS']) && ("on" == $_SERVER['HTTPS'])) {
			
		//retornara el dominio que tenemos vinculado a nuestro sistema ecommerce
			return "https://".$_SERVER["SERVER_NAME"]."/"; //concatenando
		}else{
			return "http://".$_SERVER["SERVER_NAME"]."/"; //concatenando
		}

		return $_SERVER['SERVER_NAME'];




	}//cierre del metodo path


}//cierre de la clase
