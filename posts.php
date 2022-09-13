<?php
include_once "crudPosts/posts.php";
$obj = new posts();
$datos = $obj->read();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="cssPersonalizado/style.css">


</head>

<body>


    <article>


        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php
                $cont = 0;
                foreach ($datos as $dato) {
                    if ($cont == 0) { ?>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $cont ?>" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php } else { ?>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $cont ?>" aria-label="Slide 2"></button>
                    <?php 
                    }
                    $cont++;
                } 
                ?>
            </div>

            <div class="carousel-inner">

                <?php foreach ($datos as $dato) { ?>


                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="crudPosts/imagenes/<?php echo $dato['imagen']; ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>


                <?php }; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </article>



    <script src="bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>

</html>