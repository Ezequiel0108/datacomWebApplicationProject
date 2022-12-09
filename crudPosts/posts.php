<?php
include_once 'conexion.php';

class posts extends conexion{
    public $id;
    public $descripcion;
    public $imagen;


    public function create(){
   
        $pre= $this->conectar();
        $pre=$this->conexion->prepare("INSERT INTO `posts` (`descripcion`, `imagen`) VALUES (:descripcion, :imagen);");
        $pre->bindParam(":descripcion",$this->descripcion);
        $pre->bindParam(":imagen",$this->imagen);
        $pre->execute();

    }
    
    public function edit(){
        $pre=$this->conectar();
        $pre=$this->conexion->prepare("UPDATE posts SET imagen=:imagen , descripcion=:descripcion  WHERE id=:id ");
        $pre->bindParam(":descripcion",$this->descripcion);
        $pre->bindParam(":imagen",$this->imagen);
        $pre->bindParam(":id",$this->id);
        $pre->execute();

    }

    public function delete(){
        $pre= $this->conectar();
        $pre=$this->conexion->prepare("DELETE FROM `posts` WHERE `posts`.`id` = :id;");
        $pre->bindParam(":id",$this->id);
        $pre->execute();
        

    }

    public function read(){
       
        $pre=$this->conectar();
        $pre=$this->conexion->prepare("SELECT * FROM posts");
        $pre->execute();
        $ALL=$pre->fetchALL();
        return $ALL;

    }
    public function datosId(){
        $pre=$this->conectar();
        $pre=$this->conexion->prepare("SELECT * FROM posts WHERE `posts`.`id` = :id;");
        $pre->bindParam(":id",$this->id);
        $pre->execute();
        $ALL=$pre->fetchALL();
        return $ALL;
    }

}
