<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8" />
  <!--Para dispositivos moviles-->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>
    <!-- Máximo 55-60 o no superar los 70 caracteres-->
    Datacom Sureste - Hardware and Network Solutions
  </title>
  <meta name="robots" content="index,follow" />
  <meta name="googlebot" content="noodp" />
  <!-- Máximo 155 caracteres-->
  <meta name="description"
    content="En datacom sureste, contamos con diversos servicios como control de acceso biométricos, equipos wifi, redes de voz y datos entre otros. ¡Contactanos!" />
  <!-- Palabras clave desuso-->
  <meta name="keywords"
    content="Datacom sureste, control de acceso, wifi, video vigilancia, sistemas de automatización " />
  <!-- Distribución de la página-->
  <meta name="Distribution" content="Global" />
  <!--audiciencia-->
  <meta name="Rating" content="General" />
  <!-- Los motores de busqueda no lo usan lo hacen automatico-->
  <meta name="Revisit-after" content="5 Days" />

  <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css" />

  <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" href="cssPersonalizado/style.css" />
  <link rel="stylesheet" href="Servicios/style.css">
  <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
  <!-- El favicon mejora el seo-->
  <link rel="shortcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
</head>
<body class="fondo4">
  <header>
    <nav class="navbar    fixed-top navbar-expand-lg fondo12 ">
      <div class="container-fluid ">
        <img src="imagenes/datacomblanco1.png" class=" pequeña d-inline-block align-text-top" alt="logo" />
        <button class=" navbar-toggler bg-warning" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-lg-4 ocultar-div "></div>
       
        <div class="collapse ms-auto navbar-collapse mt-4 " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
            <li class="nav-item dropdown ">
              <a class=" efecto btn btn-warning  mx-1 nav-link active fw-bold" aria-current="page"
                href="index.html">Inicio</a>
              <ul class="dropdown-menu fw-bold  text-center ">
                <li>Inicio</li>
              </ul>
            </li>
            <li class="nav-item dropdown">

              <a class="  efecto  btn btn-warning   mx-1 nav-link active fw-bold"
                href="vistas/posts.php">Publicaciones</a>
              <ul class="dropdown-menu fw-bold text-center">
                <li>Conoce nuestras publicaciones</li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class=" efecto btn btn-warning  mx-1 nav-link active fw-bold"
                href="vistas/contactanos.html">Contactanos</a>
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
                <li><a class="dropdown-item fw-bold" href="servicios/videoPortero.html">Video Portero</a></li>
                <li><a class="dropdown-item fw-bold" href="Servicios/accesoBiometrico.html">Sistemas de intrusión</a></li>
                <li><a class="dropdown-item fw-bold" href="Servicios/videoVigilancia.html">Video vigilancia</a></li>
                <li><a class="dropdown-item fw-bold" href="Servicios/redes.html">Redes de voz y datos</a></li>
                <li><a class="dropdown-item fw-bold" href="Servicios/automatizacion.html">Sistemas de automatización</a></li>
                <li><a class="dropdown-item fw-bold" href="Servicios/wifi.html">Equipos wifi</a></li>
                <li><a class="dropdown-item fw-bold" href="crudPosts/login.php">Login</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="">
    <article>
      <!-- -----------------------------------section--------------------------->
      <!--------------------------------------Nosotros----------------------------->
      <section>
        <div style="overflow: hidden;" class=" mt-5 py-5 ">
          <div  class="row ml-2 mt-3 py-5 ms-3  ">
            <div  class="col-lg-6 col-xl-6  order-2 order-lg-1 col-sm-12 col-md-12  ">
              <p class="  text-white animate__animated animate__backInLeft fw-bold mt-4 lh-lg display-4  ">¿Quiénes
                somos?
              </p>
              <h1 class="text-white lh-lg fs-5 animate__animated animate__backInLeft fw-bold">
                somos una empresa especializada en ofrecer soluciones en redes de voz y datos, camaras de seguridad,
                sistemas de wifi
                residenciales, sistemas de control de acceso y asistencia, contactanos estamos para ayudarte.
              </h1>


              <a href="#cards"><button type="button"
                  class="mt-5 efecto  btn btn-warning fw-bold animate__animated animate__backInLeft">
                  Conoce nuestros servicios
                </button></a>
            </div>
            <div class="col-lg-6 order-1">
              

            </div>
          </div>
        </div>
      </section>
      <!-- -----------------------------------section--------------------------->
      <!--------------------------------------cards----------------------------->
      <section class="mt-5">
        <h2 id="cards" class="center text-white ms-4 fw-bold">Conoce nuestros servicios</h2>
        <div class="card-body   ">
          <div class="borderCard">
            <!--------------------------------------card1----------------------------->
            <div class="cardBox borderCard2">
              <div class="card2 ">
                <div class="front">
                  <img src="imagenes/video1.jpg" style="border-radius:10px;border:solid; " class="card-img-top "
                    alt="video portero">
                </div>
                <div class="back">
                  <h3 class="fw-bold text-warning ">Video portero</h3>
                  <p class="text-break lh-sm">Venta, instalación y programación de conmutadores telefonicos para casas u
                    oficinas,
                    también
                    realizamos instalaciones y reubicaciones de extensiones telefonicas. </p>
                  <a class=" fw-bold efecto  btn btn-warning" href="Servicios/videoPortero.html">Más información</a>
                </div>
              </div>
            </div>
            <!--------------------------------------card2----------------------------->
            <div class="cardBox borderCard2">
              <div class="card2">
                <div class="front">

                  <img src="imagenes/camara1.jpg" class="card-img-top " style="border-radius:10px;border:solid; "
                    alt="video vigilancia">
                  <!--<strong class="strong">&#x21bb;</strong>-->
                </div>
                <div class="back">
                  <h3 class="fw-bold text-warning">Video vigilancia</h3>
                  <p class="text-break lh-sm"> Nuestros equipos pueden transmitir
                    constantemente vía remota o Internet, tambien pueden avisar a tu dispositivo móvil si existe algún
                    incidente o movimiento cuando no estés presente.</p>
                  <a class="fw-bold efecto  btn btn-warning" href="Servicios/videoVigilancia.html">Más información</a>
                </div>
              </div>
            </div>
            <!--------------------------------------card3----------------------------->
            <div class="cardBox borderCard2  ">
              <div class="card2">
                <div class="front">
                  <img src="imagenes/redes.jpg" class="card-img-top" style="border-radius:10px;border:solid; "
                    alt="Redes de voz y datos">
                </div>
                <div class="back">
                  <h3 class="fw-bold text-warning">Redes</h3>
                  <p class="text-break lh-sm">Redes de datos, instalaciones de red, servidores, configuraciones, redes
                    inalámbricas, routers, switchs, access point, cable UTP, Redes de voz, conmutadores,
                    configuraciones.
                  </p>
                  <a class="fw-bold efecto  btn btn-warning" href="Servicios/redes.html">Más información</a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!--------------------------------------cards segunda fila----------------------------->
        <div class="card-body ocultar-div borderCard  ">
          <div class="">
            <!--------------------------------------card4 izquierda----------------------------->
            <div class="cardBox  ">
              <div class="card2">
                <div class="front">
                  <img src="imagenes/wifi2.jpg" class="card-img-top" style="border-radius:10px;border:solid; "
                    alt="Equipos wifi">
                </div>
                <div class="back">
                  <h3 class="fw-bold text-warning">Equipos de wifi</h3>
                  <p class="text-break lh-sm">¿Interesado en configurar una red inalámbrica en tu casa? Con la red
                    inalámbrica hay tantas cosas que puedes hacer, pero primero tienes que
                    asegurarte que tienes el equipo de red correcto.
                  </p>
                  <a class="fw-bold efecto  btn btn-warning" href="Servicios/wifi.html">Más información</a>
                </div>
              </div>
            </div>
            <!--------------------------------------card5----------------------------->
            <div class="cardBox ocultar-div">
              <div class="card2">
                <div class="front">
                  <img src="imagenes/intrusion.jpg" class="card-img-top" style="border-radius:10px;border:solid; "
                    alt="Sistemas de intrusión">
                </div>
                <div class="back">
                  <h3 class="fw-bold text-warning">Sistemas de Intrusión</h3>
                  <p class="text-break lh-sm">Los sistemas de intrusión son de vital importancia para asegurar cualquier
                    tipo de espacio, ayudándole a detectar la presencia de una persona no autorizada en un área
                    determinada.</p>
                    <a class="fw-bold efecto  btn btn-warning" href="Servicios/accesoBiometrico.html">Más información</a>
                </div>
              </div>
            </div>
            <!--------------------------------------card6----------------------------->
            <div class="cardBox ocultar-div ">
              <div class="card2 ">
                <div class="front">
                  <img src="imagenes/Automatización.jpg" class="card-img-top" style="border-radius:10px;border:solid; "
                    alt="sistemas de automatización">
                </div>
                <div class="back">
                  <h3 class="fw-bold text-warning">Sistemas de atumatización</h3>
                  <p class="text-break lh-sm">La automatización consiste en usar la tecnología para realizar tareas con
                    muy poca intervención humana. Se puede implementar en cualquier sector en el que se lleven a cabo
                    tareas repetitivas.</p>
                    <a class="fw-bold efecto  btn btn-warning" href="Servicios/automatizacion.html">Más información</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- -----------------------------------section--------------------------->
      <!--------------------------------------Sistemas de seguridad----------------------------->
      <section >
       
          <div class="row mt-5 container-fluid  ">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 ms-3">
              <p class="text-warning  display-5 fw-bold "> Sistemas de seguridad</p>
              <p class="text-white fw-bold ">El control de acceso biométrico es un sistema de identificación que permite
                registrar algunas características únicas de los seres humanos con el objetivo de registrar y autorizar
                la entrada y salida de un lugar. El uso de sistemas de control de personal por huella se ha generalizado
                durante la pandemia debido a la alta seguridad que proporcionan, ya que a pesar de lo que pueda parecer,
                no existen dos huellas digitales en el mundo ni existe una forma de falsificar su uso.</p>
              <p class="text-white fs-2">Llevar control de acceso es algo indispensable <a class="btn text-white fs-2 "
                  href="vistas/contactanos.html">¡Contactanos!</a></p>
            </div>
          </div>
      </section>
    </article>
  </main>
  <!--------------------------------------Footer----------------------------->
  <!-- Footer -->
  <footer class="text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <span class="d-flex justify-content-center align-items-center text-warning"> Teléfono: (999)
          2875920
        </span>
        <p class="d-flex justify-content-center align-items-center text-warning">
          <span class="me-3"> Dirección: Calle 4 No. 59 por 5 y 7 Col. Felipe Carrillo Puerto, Mérida, Yucatán, CP
            97136
          </span>
        </p>
        <span class="d-flex justify-content-center align-items-center text-warning"> © 2022 Copyright: Datacom
          Sureste
        </span>
      </section>
      <!-- Section: CTA -->
    </div>
  </footer>
  <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
