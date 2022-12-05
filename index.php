<?php 
    require("con_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="imagenes/logo/logo2.0.png">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leon Motos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="keywords" content="motos, moto, bici, bicicleta, venta, bicicletas, accesorios motos, bicis"><!-- recomendacion para busqueda -->
    <meta name="description" content="Venta motos, bicis y accesorios">
    <meta name="author" content="Sanjurjo Alan">
</head>
<body class="bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <header class="bg-primary" id="cabeceraH">
        <div class="px-3 py-2">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <img class="bi me-2" width="60" height="52" src="imagenes/logo/logo2.0.png" alt="Logo Leon Motos">
                <span class="ms-1 fs-3 text-dark">Leon Motos</span>
            </a>
            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                <a href="includes/productos/moto.php" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="imagenes/logito/motorcycle-solid.svg" alt="Logo Moto">
                    Motocicletas
                </a>
                </li>
                <li>
                <a href="includes/productos/bici.php" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="imagenes/logito/bicycle.svg" alt="Logo Moto">
                    Bicicletas
                </a>
                </li>
                <li>
                <a href="includes/productos/accesorio.php" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="imagenes/logito/grid.svg" alt="Logo Moto">
                    Accesorios
                </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </header>
    <main>        
        <div class="mt-1">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>            
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="includes/productos/moto.php"><img src="imagenes/promocionales/banner_Motos.jpg" class="d-block w-100" alt="Banner Bicis"></a>
                </div>
                <div class="carousel-item">
                    <a href="includes/productos/bici.php"><img src="imagenes/promocionales/banner_bici.jpg" class="d-block w-100" alt="Banner Bicis"></a>
                </div>
                <div class="carousel-item">
                    <a href="includes/productos/bici.php"><img src="imagenes/promocionales/banner_madre.jpg" class="d-block w-100" alt="Banner Bicis"></a>
                </div>
            </div>
            <button class="carousel-control-prev bg-secondary bg-opacity-50" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next bg-secondary bg-opacity-50" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
            </div>
        </div>
        
        <div class="container-fluid">
            <p class="text-center bg-success mt-1"><img src="imagenes/logito/formapago.svg" alt="Logo Leon Motos" width="45" height="33" class="mb-2"><span class="ms-1 fs-2 text-white">Aceptamos Todos los Medios de Pago</span></p>
        </div>
        
        <div class="bg-secondary bg-opacity-50 py-4">
            <div class="container my-2">
                <div class="d-flex flex-wrap justify-content-center">
                    <img width="450" src="imagenes/muestra/imbatible.jpeg" alt="imbatible titulo">
                </div>
                <div class="row">
                    <div class="col-md-4 order-md-1"><!--MOTOS-->
                        <div id="carouselExampleControls1" class="carousel slide mt-1" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                $consultaPromocion = $conex->query("SELECT * FROM promocion where tipo = 'Motocicleta'");
                                $i=0;
                                while($imgPromocion = mysqli_fetch_assoc($consultaPromocion)){ 
                                $i++;
                                ?>
                                <div class="carousel-item <?php if($i == 1){echo "active";} ?>">
                                    <a class="carousel" href="includes/productos/descripcion/descripcionMoto.php?codigoMoto=<?php echo $imgPromocion['codigo'];?>"><img src="<?php echo $imgPromocion['url']; ?>" class="d-block w-100" height="284" alt="<?php echo $imgPromocion['marca']; echo $imgPromocion['modelo']; ?>"></a>                                    
                                </div>
                                <?php }?>
                            </div>
                            <button class="carousel-control-prev bg-secondary bg-opacity-75" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next bg-secondary bg-opacity-75" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 order-md-1"><!--BICICLETAS-->
                        <div id="carouselExampleControls3" class="carousel slide mt-1" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                $consultaPromocion = $conex->query("SELECT * FROM promocion where tipo = 'Motocicleta'");
                                $i=0;
                                while($imgPromocion = mysqli_fetch_assoc($consultaPromocion)){ 
                                $i++;
                                ?>
                                <div class="carousel-item <?php if($i == 1){echo "active";} ?>">
                                    <a class="carousel" href="includes/productos/descripcion/descripcionMoto.php?codigoMoto=<?php echo $imgPromocion['codigo'];?>"><img src="<?php echo $imgPromocion['url']; ?>" class="d-block w-100" height="284" alt="<?php echo $imgPromocion['marca']; echo $imgPromocion['modelo']; ?>"></a>                                    
                                </div>
                                <?php }?>
                            </div>
                            <button class="carousel-control-prev bg-secondary bg-opacity-75" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next bg-secondary bg-opacity-75" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 order-md-1"> <!--ACCESORIOS-->
                        <div id="carouselExampleControls2" class="carousel slide mt-1" data-bs-ride="carousel">
                             <div class="carousel-inner">
                                <?php
                                $consultaPromocion = $conex->query("SELECT * FROM promocion where tipo = 'Bicicleta'");
                                $i=0;
                                while($imgPromocion = mysqli_fetch_assoc($consultaPromocion)){ 
                                $i++;
                                ?>
                                <div class="carousel-item <?php if($i == 1){echo "active";} ?>">
                                    <a class="carousel" href="includes/productos/descripcion/descripcionMoto.php?codigoMoto=<?php echo $imgPromocion['codigo'];?>"><img src="<?php echo $imgPromocion['url']; ?>" class="d-block w-100" height="284" alt="<?php echo $imgPromocion['marca']; echo $imgPromocion['modelo']; ?>"></a>                                    
                                </div>
                                <?php }?>
                            </div>
                            <button class="carousel-control-prev bg-secondary bg-opacity-75" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next bg-secondary bg-opacity-75" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="my-2">
            <div class="container w-100">
                <ul class="container w-75 d-flex flex-wrap justify-content-center list-group list-group-horizontal">
                    <li class="list-group-item m-1 border rounded"><div><img src="imagenes/logo/marcas/herologo.jpg" width="75" height="68" alt="logo Hero"></div></li>
                    <li class="list-group-item m-1 border rounded"><div><img src="imagenes/logo/marcas/gileralogo.jpg" width="75" height="68" alt="Logo gilera"></div></li>
                    <li class="list-group-item m-1 border rounded"><div><img src="imagenes/logo/marcas/zanellalogo.jpg" width="75" height="68" alt="logo Zanella"></div></li>
                    <li class="list-group-item m-1 border rounded"><div><img src="imagenes/logo/marcas/motomellogo.jpeg" width="75" height="68" alt="logo Motomel"></div></li>
                    <li class="list-group-item m-1 border rounded"><div><img src="imagenes/logo/marcas/mondiallogo.gif" width="75" height="68" alt="logo Mondial"></div></li>
                </ul>
            </div>
        </div>

        <section id="nuestros-productos">
            <div class="container">
                <h2>Nuestros Productos</h2>
                <div class="programas">
                    <div class="carta">
                        <h3>Motocicletas</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero corporis incidunt saepe qui commodi quasi neque veniam quam, aspernatur est beatae maxime animi sed reiciendis mollitia ducimus veritatis repellendus?</p>
                        <a href="includes/productos/moto.php"><button class="boton">Mas Info</button></a>
                    </div>
                    <div class="carta">
                        <h3>Bicicletas</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero corporis incidunt saepe qui commodi quasi neque veniam quam, aspernatur est beatae maxime animi sed reiciendis mollitia ducimus veritatis repellendus?</p>
                        <a href="includes/productos/bici.php"><button class="boton">Mas Info</button></a>
                    </div>
                    <div class="carta">
                        <h3>Accesorios</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero corporis incidunt saepe qui commodi quasi neque veniam quam, aspernatur est beatae maxime animi sed reiciendis mollitia ducimus veritatis repellendus?</p>
                        <a href="includes/productos/accesorio.php"><button class="boton">Mas Info</button></a>
                    </div>  
                </div>
            </div>
        </section>
    <div class="album mt-3 bg-white bg-opacity-75">
            <div class="container w-100%">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="m-5">
                            <p class="card-title text-center m-auto pt-1 display-4 text-success" id="titulo">Somos Leon Motos</p>
                            <p class="card-text py-5 px-0 mx-2 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur facere odio? Rerum atque dignissimos, modi debitis obcaecati nisi rem provident commodi molestiae eveniet neque? Sunt perspiciatis neque labore magni?</p>
                            <div class="row" >
                                <div class="col m-auto">
                                    <a class="navbar-brand my-1 text-primary" href="https://wa.me/542615015652" target="_blank"><img src="imagenes/logito/whatsapp.svg" alt="Logo Whatsapp" width="33" height="27" class=""><span class="my-2 fs-5">Contactanos <br> <span class="text-success">261-5015652</span></span></a>
                                </div>
                                <div class="col m-auto">
                                    <a class="navbar-brand my-1 text-primary" href="mailto:sanjurjoalan77@gmail.com" target="_blank"><img src="imagenes/logito/envelope.svg" alt="Logo Whatsapp" width="33" height="27" class=""><span class="my-2 fs-5">Contactanos <br> <span class="text-success">sanjurjoalan77@gmail.com</span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col pb-1">
                        <div class="card m-auto border border-dark">
                            <iframe class="m-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d209.79263342701222!2d-68.59147841672515!3d-32.72107323381253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e197a92b8d317%3A0x2aa199b05810ebd7!2sLe%C3%B3n%20motos%20Lavalle!5e0!3m2!1ses-419!2sar!4v1666199857966!5m2!1ses-419!2sar" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-dark py-2">
            <div class="container w-75">
                <form class="bg-dark bg-50 rounded py-2" action="https://formsubmit.co/sanjurjoalan77@gmail.com" method="post">
                    <h1 class="display-5 mb-3 text-white text-center fw-bold">Su Consulta no Molesta</h1>
                        <div class="form-floating my-1 m-auto w-75">
                            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Nombre:" require>
                            <label for="floatingInput">Nombre:</label>
                        </div>
                        <div class="form-floating my-1 m-auto w-75">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="Email:" require>
                            <label for="email">Email:</label>
                        </div>
                        <div class="form-floating my-1 m-auto w-75">
                            <input type="text" class="form-control" name="subject" id="floatingInput" placeholder="Asunto:" require>
                            <label for="floatingInput">Asunto:</label>
                        </div>
                        <div class="my-1 m-auto w-75">
                            <label for="commets" class="form-label bg-white p-1 rounded">Comentario</label>
                            <textarea name="commets" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    <div class="col text-center mt-2">
                        <button type="submit" class="btn btn-lg btn-success w-50"><i class="bi bi-send"></i> ENVIAR</button>
                    </div>
                    <input type="hidden" name="_next" value="http://localhost/leonMotos/">
                    <input type="hidden" name="_captcha" value="false">
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-white">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="index.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <img class="bi" width="30" height="24" src="imagenes/logo/logo2.0.png"  alt="Logo Leon Motos">
                    </a>
                    <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Leon Motos</span>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="https://wa.me/542615015652" target="_blank"><img class="bi" width="24" height="24" src="imagenes/logito/whatsapp.svg" alt="Logo whatsapp"></a></li>
                    <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/profile.php?id=100084474042634" target="_blank"><img class="bi" width="24" height="24" src="imagenes/logito/facebook.svg" alt="Logo Facebook"></a></li>
                    <li class="ms-3"><a class="text-muted" href="mailto:sanjurjoalan77@gmail.com" target="_blank"><img class="bi" width="24" height="24" src="imagenes/logito/envelope.svg" alt="Logo Mail"></a></li>
                </ul>
            </footer>
        </div>
    </footer>
</body>
</html>