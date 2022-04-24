<?php
    require_once("model/tareaModel.php");
    
    $idTarea = $_POST['idTareaEli'];

    $tarea =	new TareaModelo();
    $dato = $tarea->eliminar("Tarea", $idTarea);  

    if($dato){        //SI ELIMINO, REGRESARA TRUE Y PROCEDEMOS A RECARGAR LA PAG. PRINCIPAL
        Header("Location: index.php");
    }
?>