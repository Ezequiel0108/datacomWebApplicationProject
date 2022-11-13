<?php
include_once "conexion.php";

class users extends conexion{
    public $id;
    public $nombre;
    public $email;
    public $contra;

    //leere usuarios si existen
        public function read($email,$contra){
            $sql=$this->conectar();
            $sql=$this->conexion->prepare("SELECT * FROM users WHERE correo=:email AND contra=:contra;");
            $sql->bindParam(":email",$email);
            $sql->bindParam(":contra",$contra);
            $sql->execute();
            $todo=$sql->fetchAll();
            
            return $todo;

        
        }
        public function readALL(){
            $sql=$this->conectar();//primero hacemos la conexion 
            $sql=$this->conexion->prepare("SELECT * FROM users");//aqui decimos que si hay conexion
            $sql->execute();
            $todo=$sql->fetchAll();
            return $todo;
        }
       
       


        


    }

?>