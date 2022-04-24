<?php
    require_once("model/tareaModel.php");
    
    //CAPTURAMOS LOS DATOS QUE MANDAMOS DE LA PAG. PRINCIPAL
    $nombreTarea = $_POST['nombreTareaIns'];

    $data = "'" . $nombreTarea . "', 'En progreso'";
    $tarea = new TareaModelo();
    $dato = $tarea->insertar("Tarea", $data);  //EJECUTAMOS LA FUNCION PARA INSERTAR

    if($dato){        //SI ELIMINO, REGRESARA TRUE Y PROCEDEMOS A RECARGAR LA PAG. PRINCIPAL
        Header("Location: index.php");
    }
?>