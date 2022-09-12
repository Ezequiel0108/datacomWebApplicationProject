<?php
include_once "posts.php";
//recibimos los datos del form si existen
$imagen=(isset($_FILES['imagen']['name'])?$_FILES['imagen']['name']:"");
$descripcion=(isset($_POST['descripcion'])?$_POST['descripcion']:"");
$id=(isset($_POST['id'])?$_POST['id']:"");


if ($_POST){
    //se dan acciones dependiendo que ingrese el usuario
        $boton=$_POST['accion'];
        
        switch ($boton) {
            case 'Guardar post':
                $fecha= new DateTime();
                $imagen=$fecha->getTimestamp()."_".$_FILES['imagen']['name'];
                $imagenTemporal=$_FILES['imagen']['tmp_name'];
                move_uploaded_file($imagenTemporal,'imagenes/'.$imagen);
                $objpost= new posts();
                $objpost->imagen=$imagen;
                $objpost->descripcion=$descripcion;
                $objpost->create();
            
            break;
            case 'Borrar':
                $datos= new posts();
                $datos->id=$id;
                $imagenB=$datos->datosId();
                $selectImagen=$imagenB[0]['imagen'];
    
                if(file_exists("imagenes/".$selectImagen)){
                    unlink("imagenes/".$selectImagen);}

                $objpost= new posts();
                $objpost->id=$id;
                $objpost->delete();

            break;
           
            switch ($boton) {
                case 'Editar':
                    # code...
                    header("location: form_edit.php");
                    break;
                
              
            }
          

            
            
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

<div class="container ">
    <div class="row">
      
        
        <div class="col-sm-6 col-md-6 col-xs-6 ">
       
                <div class="col-12 container mt-5  border border-5  rounded-5 border-primary bg-info bg-opacity-10   ">
                            
                    <h3 class="card-title text-center ">Formulario de creación de post</h3>
                    </br>
                        <form action="index.php" method="post" enctype="multipart/form-data"> 
                            <input type="text" hidden name="id" value="">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                                <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                                </svg>
                                <label  class="form-label">Selecciona tu imagen</label>
                                <input name="imagen" type="file" class="form-control" id="" placeholder="imagene.jpgp">
                            </div>
                            <div class="mb-3">
                            
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                                <label  class="form-label">Ingresa tu descripción del post</label>
                                
                                <textarea name="descripcion"  class="form-control"  rows="3" cols="10">
                                                        
                                </textarea>
                            
                            </div>
          
                            <input type="submit" value="Guardar post" name="accion" class="btn btn-success"   >
                            </br>
                          
                                
                        </form>
                </div>
          
           
        </div>
        <div class=" col-sm-6 col-xs-6 col-md-6 ">
            <table class="  table-responsive table-bordered col-12 container mt-5  border border-5  rounded-5  ">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acciones</th>
                    
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                     $obj= new posts();
                     $posts=$obj->read();
                     foreach($posts as $post){
                    
                    ?>

                    <tr>
                  
                    <td><?php echo $post['id']  ?></td>
                    <td>
                        <img src="imagenes/<?php echo $post['imagen'] ?>" width="100"  alt="100px">
                        </td>
                    <td><?php echo $post['descripcion']  ?></td>
                    <td> 
                    <form action="index.php" method="post">

                      <input type="submit" value="Borrar" name="accion" class="btn btn-danger">
                    
                      <input type="text" hidden value="<?php echo $post['id']?>" name="id";>
                    
                    
                    </form>
                    
                    <form action="form_edit.php" method="post">
                    <input type="text" hidden value="<?php echo $post['id']?>" name="id";>
                    <input type="submit" value="Editar" name="accion2" class="btn btn-warning">

                    </form>
                    </td>
                    </tr>

                    <?php } ?>
                 
                </tbody>
            </table>

        </div>
    </div>
</div>

  

     
    <!-- Bootstrap JavaScript Libraries -->
   
  
    <script src="../bootstrap-5.2.0-dist/css/bootstrap.js" ></script>
  </body>
</html>



