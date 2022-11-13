<?php
include "users.php";
session_start();

if($_POST){
$correo=$_POST['correo'];
$contra=$_POST['contrasenia'];

$objU= new users();

$datos=$objU->read($correo,$contra);
//print_r(count($datos));
//print_r(count($datos));


if ((count($datos))==0) {//aqui retorno el total de filas o datos que me trae el array
    echo "<script> window.alert('El usuario o contraseña es incorrecto'); </script>";
  }else{
    // si existe datos entonces guardo esos datos en la variable de sesion
    
    $_SESSION['correo'] = $datos[0]['correo'];
    $_SESSION['contraseña'] = $datos[0]['contra'];
header("location:index.php");

}
}





?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
    </head>
    <body>
<div class="row">
      <div class="col s3">
        
      </div> 
    <div class="col s6">
    
      <form action="login.php" method="post">
            
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="correo" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="contrasenia" id="exampleInputPassword1">
        </div>
  
        <button type="submit"  class="btn btn-primary">Submit</button>

       
        
        </form>
   
        
    </div>
    <div class="col s3">
        
    </div> 
</div>

    
    </body>
</html>