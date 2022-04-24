<?php
class TareaModelo{
    private $Modelo;
    private $db;
    private $datos;

    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=127.0.0.1;dbname=todolist',"root","");  //CONEXION A LA DB
    }
    
    //MUESTRA TODOS LOS REGISTROS DE LA TABLA
    public function mostrar($tabla){
        $consul = "select * from ".$tabla.";";
        $resu = $this->db->query($consul);

        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[]=$filas;
        }

        return $this->datos;
    } 

    //GUARDA LOS REGISTROS EN LA DB
    public function insertar($tabla, $data){
        $consulta = "insert into ".$tabla." values (NULL, ". $data .");";
        $resultado = $this->db->query($consulta);

        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }

    //MODIFICA UN REGISTRO DE LA DB
    public function actualizar($tabla, $data, $condicion){       
        $consulta = "update ".$tabla." set ". $data ." where idTarea=".$condicion.";";
        $resultado = $this->db->query($consulta);

        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }

    //ELIMINA UN REGISTRO DE LA DB
    public function eliminar($tabla, $condicion){
        $eli = "delete from ".$tabla." where idTarea=".$condicion.";";
        $res = $this->db->query($eli);

        if ($res) {
            return true; 
        }else {
            return false;
        }
    }
}