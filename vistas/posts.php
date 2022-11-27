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
  <meta name="description" content="Hardware and Software Solutions - fibra óptica, redes de voz y datos, almacenamiento en red, sistemas de energía, tierras físicas, enlaces inalámbricos, paginas web, controles de acceso biometricos, video vigilancia CCTV/IP" />
  <meta name="keywords" content="fibra optica,redes,voz y datos, almacenamiento en red, enlaces inalambricos, hardware, software, desarrollo web, paginas web,video vigilancia, cctv, biometricos" />
  <meta name="Distribution" content="Global" />
  <meta name="Rating" content="General" />
  <meta name="Revisit-after" content="5 Days" />

  <link rel="stylesheet" href="../bootstrap-5.2.0-dist/css/bootstrap.css" />
  <link rel="stylesheet" href="../cssPersonalizado/style.css" />

</head>

<?php
session_start();

include_once "../crudPosts/posts.php";
$obj = new posts();
$datos = $obj->read();

?>

<body class="fondo4">
  <script src="code.js"></script>
  <header>
    <nav class="navbar  fixed-top navbar-expand-lg fondo12 ">
      <div class="container-fluid ">
        <img src="../imagenes/logo(3).png" class=" d-inline-block align-text-top" alt="logo" />
        <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-3 ms-4 "></div>
        <div class="collapse navbar-collapse mt-4" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
          <li class="nav-item dropdown ">
              <a style="<?php echo empty($_SESSION['correo']) ? 'display:none' : '' ?>" class=" efecto btn btn-danger  mx-1 nav-link active fw-bold" aria-current="page" href="../crudPosts/index.php"> Posts</a>
            </li>
  
          <li class="nav-item dropdown ">
              <a class=" efecto btn btn-warning  mx-1 nav-link active fw-bold" aria-current="page"
                href="../index.html">Inicio</a>
              <ul class="dropdown-menu fw-bold  text-center ">
                <li>Inicio</li>
              </ul>
            </li>
            <li class="nav-item dropdown">

              <a class="  efecto  btn btn-warning   mx-1 nav-link active fw-bold" href="posts.php">Publicaciones</a>
              <ul class="dropdown-menu fw-bold text-center">
                <li>Conoce nuestras publicaciones</li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class=" efecto btn btn-warning  mx-1 nav-link active fw-bold" href="contactanos.html">Contactanos</a>
              <ul class="dropdown-menu fw-bold text-center">
                <li>¿Tienes alguna duda?</li>
              </ul>
            </li>

            <li class="nav-item dropdown fs-5 ">
              <a class=" efecto btn btn-warning  mx-1 nav-link dropdown-toggle active fw-bold" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Servicios
              </a>
              <ul class="dropdown-menu  ">
                <li><a class="dropdown-item fw-bold" href="videoPortero.html">Video Portero</a></li>
                <li><a class="dropdown-item fw-bold" href="AccesoBiometrico.html">sistemas de seguridad</a></li>
                <li><a class="dropdown-item fw-bold" href="#">Action</a></li>
                <li><a class="dropdown-item fw-bold" href="#">Another action</a></li>
                <li><a class="dropdown-item fw-bold" href="#">Action</a></li>
                <li><a class="dropdown-item fw-bold" href="#">Another action</a></li>
                <li><a class="dropdown-item fw-bold" href="../crudPosts/login.php">Login</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>




    <article class="mt-5 py-5">

      <section>


        <div class=" margen "></div>

        <div class=" row">


          <div class=" col-lg-8 col-sm-10  ">
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
                    <div class="modal-content " style="background-color:black">
                      <div class="modal-header">
                        <h5 class="modal-title text-warning fw-bold" id="exampleModalLabel">Descripción </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <b class="text-white fw-bold"><?php echo $dato["descripcion"];  ?></b>
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-warning ms-4 text-black fw-bold" href="contactanos.html">Comunicate con nosotros</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </div>
                </div>
                <!--fin modal-->

                <div class="container-fluid  py-4">


                  <div class="row">

                    <div class="col-12 ">
                      <img class="img-fluid " style="" src="../crudPosts/imagenes/<?php echo $dato["imagen"]; ?> ">
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

          <div class="col-lg-4  ocultar-div fijo">

          </div>

        </div>
      </section>



    </article>



    <script src="../bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>

  </main>

</body>

</html>