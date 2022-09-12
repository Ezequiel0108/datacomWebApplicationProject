<?php


class conexion{
 private $bd="datacom";
 private $usuario="root";
 private $contrasenia="";
 private  $host="localhost";
 public $conexion;



public function conectar(){
        try{
        $this->conexion= new PDO("mysql:host=$this->host;dbname=$this->bd",$this->usuario,$this->contrasenia);
            if($this->conexion){echo "";}

        }

        catch(Exception $e){
            echo $e->getMessage();

        }
    

    }
}
   
?>