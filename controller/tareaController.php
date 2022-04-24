<?php
require_once("model/tareaModel.php");

class tareaController{
	private $model;

	function __construct(){
        $this->model = new TareaModelo();
    }

    // MOSTRAR PAGINA PRINCIPAL
    static function mostrarPrincipal(){
    	$tarea = new TareaModelo();
		$dato = $tarea->mostrar("Tarea");

		require_once("view/index.php");
    }
}
?>