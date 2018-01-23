<?PHP

require("../modelo/BBDD.php");

class Series{


	private $bbdd;

	public function __construct(){
		$this->bbdd = new BBDD;
	}

	public function analizar($url){

		$consulta = "select nombre,tag,dia_nuevo_cap,capitulos,nota from ANIMES join FECHA where ANIMES.nombre = FECHA.nombre_anime";
		$datosSeries = $this->bbdd->obtener($consulta,$this->bbdd->columnaSeries);

		//echo $datosSeries[0]->dato["nombre"];


		if(!isset($_SESSION))
			session_start();
		
		if(!isset($_SESSION["series"]))	
			$_SESSION["series"] = $datosSeries;						            

		$vista = "./series.php";

		$distina_pagina = "localhost/Trackime/php/controlador/front.php?link=series";
		if($url == $distina_pagina)
			$vista = "../vista/series/series.php";




		return $vista;
		
	}

}

?>