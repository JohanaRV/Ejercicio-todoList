<?php
    require_once("model/tareaModel.php");
    
    //CAPTURAMOS LOS DATOS QUE MANDAMOS DE LA PAG. PRINCIPAL
    $idTarea = $_POST['idTareaAct'];
    $nombreTarea = $_POST['nombreTareaAct'];
    $estadoTarea = $_POST['estadoTareaAct'];

    if($estadoTarea === "En progreso"){
        $estadoTarea = "Terminado";     //SI EL ESTADO ES "EN PROGRESO" CAMBIAMOS A "TERMINADO"
    } else{        
        $estadoTarea = "En progreso";   //SINO, CAMBIAMOS A "EN PROGRESO"
    }

    $data ="nombreTarea='".$nombreTarea."', estadoTarea='".$estadoTarea."'";
    $tarea = new TareaModelo();
    $dato = $tarea->actualizar("Tarea", $data, $idTarea);  //EJECUTAMOS LA FUNCION PARA ACTUALIZAR

    if($dato){        //SI ELIMINO, REGRESARA TRUE Y PROCEDEMOS A RECARGAR LA PAG. PRINCIPAL
        Header("Location: index.php");
    }
?>