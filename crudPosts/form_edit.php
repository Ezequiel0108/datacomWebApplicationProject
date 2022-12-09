<?php session_start();
if (empty($_SESSION['correo'])) { //si esta vacio la variable de sesion entonces... validamos el true de empty
    header("location:login.php");
} ?>
<?php

include "posts.php";


$idEdit=(isset($_POST['id'])?$_POST['id']:"");

$obj= new posts();
$obj->id=$idEdit;
$Datos= $obj->Datosid();
foreach ($Datos as $dato){
  $imagend=$dato['imagen']; 
  $descripciond=$dato['descripcion'];


}
$imagene=(isset($_FILES['imagen']['name'])?$_FILES['imagen']['name']:"");
$descripcione=(isset($_POST['descripcion'])?$_POST['descripcion']:"");
$ide=(isset($_POST['ide'])?$_POST['ide']:"");
//echo $imagene;
//echo $descripcione;


if($_POST){
    //se dan acciones dependiendo que ingrese el usuario

      
    $boton3=(isset($_POST['accion3'])?$_POST['accion3']:"");

        
        switch ($boton3) {
            case 'Guardarcambios':
              $datos= new posts();
              $datos->id=$ide;
              $imagenB=$datos->datosId();
              $selectImagen=$imagenB[0]['imagen'];
              if(file_exists("imagenes/".$selectImagen)){
                  unlink("imagenes/".$selectImagen);}

                $fecha= new DateTime();
                $imagene=$fecha->getTimestamp()."_".$_FILES['imagen']['name'];
                $imagenTemporal=$_FILES['imagen']['tmp_name'];
                move_uploaded_file($imagenTemporal,'imagenes/'.$imagene);
                
                $objposte= new posts();
                $objposte->imagen=$imagene;
                $objposte->descripcion=$descripcione;
                $objposte->id=$ide;
                $objposte->edit();
                header("location:index.php");
     
            break;
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="../bootstrap-5.2.0-dist/css/bootstrap.css">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">-->
    
  </head>
  <body >
<div class="col-sm-12 col-md-12 col-xs-12 ">
       
       <div class="col-12 container mt-5  border border-5  rounded-5 border-primary bg-info bg-opacity-10   ">
                   
           <h3 class="card-title text-center ">Formulario de edición de posts</h3>
           </br>
               <form action="form_edit.php" method="post" enctype="multipart/form-data" id='form'> 
                   <input type="text" hidden name="ide" value="<?php echo $idEdit;?>">
                   <div class="mb-3">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                       <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                       </svg>
                       <label  class="form-label"> <img src="imagenes/<?php echo $imagend ?>" width="100"  alt="100px"></label>
                      
                       <input name="imagen" type="file" class="form-control" id="imagen" placeholder="imagene.jpgp">
                   </div>
                   <div class="mb-3">
                   
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                       <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                       <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                       </svg>
                       <label  class="form-label">Ingresa tu descripción del post</label>
                       
                       <textarea name="descripcion" id='descripcion'   class="form-control"   cols="10">
                       <?php  echo (isset($descripciond)?$descripciond:"");?>               
                       </textarea>
                   
                   </div>
                   <div class="row">
                   <div class="col-12">
                   
                   <input type="submit" value="Guardarcambios" name="accion3" class="btn btn-success"   >
                   <a class="btn btn-primary" href="index.php">Cancelar</a>
                </div>
                  
       
                  
                </div>
                </br>
                 
                       
               </form>
             
       </div>
       <script src="../bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
       <script>
        
       $form=document.getElementById('form').addEventListener('submit',(e)=>{
        
        $descripcion=document.getElementById('descripcion')
        
        $imagen=document.getElementById('imagen');
        let error="";
         if($imagen.files.length==0){
          error+="Por favor no dejes tu imagen vacía\n"
         }
         if($descripcion.value.trim().length<10){
          error+="No olvides dejar una pequeña descripción jeje "
         }
         if(error.length>0){
          e.preventDefault()
          alert(error);
         }
       });

       </script>
  </body>
</html>