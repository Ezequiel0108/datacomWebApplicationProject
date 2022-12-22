<!DOCTYPE html>

<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>
    Datacom Sureste - Hardware and Network Solutions, fibra optica, redes,
    enlaces inalámbricos, video vigilancia, paginas web
  </title>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="noodp" />
  <meta name="description"
    content="Hardware and Software Solutions - fibra óptica, redes de voz y datos, almacenamiento en red, sistemas de energía, tierras físicas, enlaces inalámbricos, paginas web, controles de acceso biometricos, video vigilancia CCTV/IP" />
  <meta name="keywords"
    content="fibra optica,redes,voz y datos, almacenamiento en red, enlaces inalambricos, hardware, software, desarrollo web, paginas web,video vigilancia, cctv, biometricos" />
  <meta name="Distribution" content="Global" />
  <meta name="Rating" content="General" />
  <meta name="Revisit-after" content="5 Days" />

  <link rel="stylesheet" href="../bootstrap-5.2.0-dist/css/bootstrap.css" />
  <link rel="stylesheet" href="../cssPersonalizado/style.css" />
</head>

<?php
include_once "../crudPosts/posts.php";
$obj = new posts();
$datos = $obj->read();

?>

<body class="azul  " >
  <script src="code.js"></script>
  <header>
  <nav class="navbar navbar-expand-lg  azul text-white">
    <div class="container-fluid">
      <img src="../imagenes/logo.png" class="img-fluid float-start" alt="..." />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="col-3 bg-warning"></div>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
          <li class="nav-item">
            <a class=" efecto  btn btn-warning  mx-1 nav-link active fw-bold" href="posts.php">Publicaciones</a>
          </li>
          <li class="nav-item">
            <a class=" efecto  btn btn-warning  mx-1 nav-link active fw-bold" aria-current="page"
              href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class=" efecto  btn btn-warning  mx-1 nav-link active fw-bold" href="nosotros.html">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class=" efecto  btn btn-warning  mx-1 nav-link active fw-bold" href="contacto.html">Contacto</a>
          </li>
          <li class="nav-item dropdown fs-5">
            <a class=" efecto btn btn-warning  mx-1 nav-link dropdown-toggle active fw-bold" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Servicios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  </header>

  <article>

    <section>


      <div class="margen"></div>

      <div class="row">
        <div class="col-8">
              <!-- codigo php-->
        <?php
        $vacio = sizeof($datos);
        if ($vacio == 0) {
          echo "Lo siento por el momento no tenemos posts actualizados una disculpa";
        } else {
        ?>
          <?php foreach ($datos as $dato) {

          ?>
            <!-- Modal -->
            <div class="modal fade " id="modal<?php echo $dato["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog ">
                <div class="modal-content ">
                  <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLabel">Descripción </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <b class="text-black"><?php echo $dato["descripcion"];  ?></b>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                  </div>
                </div>
              </div>
            </div>
            <!--fin modal-->

            <div class="container-fluid  py-4">


              <div class="row">

                <div class="col-sm-12 col-lg-12 ">
                  <img class="img-fluid" src="../crudPosts/imagenes/<?php echo $dato["imagen"]; ?> ">
                  <div class="row">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?php echo $dato["id"] ?>">
                      Más detalles
                    </button>
                  </div>
                </div>


                

              </div>

            </div>
        <?php }
        } ?>
          
        </div>

       

    

      </div>

    



    </section>



  </article>



  <script src="../bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>