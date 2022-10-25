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
<body >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <header>
        <div class="px-3 py-2 border-bottom">
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
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a class="carousel" href="includes/productos/bici.php"><img src="imagenes/Promocionales/banner_Bici.jpg" class="d-block w-100" alt="Banner Bicis"></a>
                </div>
                <div class="carousel-item">
                    <a class="carousel" href="includes/productos/moto.php"><img src="imagenes/Promocionales/banner_Motos.jpg" class="d-block w-100" alt="Banner Motos"></a>
                </div>
                <div class="carousel-item">
                    <a class="carousel" href=""><img src="imagenes/Promocionales/banner_madre.jpg" class="d-block w-100" alt="Banner Dia Madre"></a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
            </div>
        </div>
        
        <div class="container-fluid">
            <p class="text-center bg-success mt-1"><img src="imagenes/logito/formapago.svg" alt="Logo Leon Motos" width="45" height="33" class="mb-2"><span class="ms-1 fs-2 text-white">Aceptamos Todos los Medios de Pago</span></p>
        </div>

        <div class="album bg-secondary bg-opacity-25">
            <div class="container w-100%">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="m-5">
                            <p class="card-title text-center m-auto pt-1 display-4 text-success" id="titulo">Somos Leon Motos</p>
                            <p class="card-text py-5 px-0 mx-2 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur facere odio? Rerum atque dignissimos, modi debitis obcaecati nisi rem provident commodi molestiae eveniet neque? Sunt perspiciatis neque labore magni?</p>
                            <div class="row" >
                                <div class="col m-auto">
                                    <a class="navbar-brand my-1 text-primary" href="https://wa.me/542615015652" target="_blank"><img src="imagenes/logito/whatsappLogo.svg" alt="Logo Whatsapp" width="33" height="27" class=""><span class="my-2 fs-5">Contactanos <br> <span class="text-success">261-5015652</span></span></a>
                                </div>
                                <div class="col m-auto">
                                    <a class="navbar-brand my-1 text-primary" href="mailto:sanjurjoalan77@gmail.com" target="_blank"><img src="imagenes/logito/envelope.svg" alt="Logo Whatsapp" width="33" height="27" class=""><span class="my-2 fs-5">Contactanos <br> <span class="text-success">sanjurjoalan77@gmail.com</span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col pb-1">
                        <div class="card m-auto">
                            <iframe class="m-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d209.79263342701222!2d-68.59147841672515!3d-32.72107323381253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e197a92b8d317%3A0x2aa199b05810ebd7!2sLe%C3%B3n%20motos%20Lavalle!5e0!3m2!1ses-419!2sar!4v1666199857966!5m2!1ses-419!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
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

        <div class="album py-5 bg-dark">
            <div class="container">
                <p class="text-title text-center m-auto pb-4 display-4 text-white">Nuestros Productos</p>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                    <div class="card shadow-sm bg-secondary border-dark rounded">
                        <img src="imagenes/muestra/moto.jpg" class="p-1" alt="moto">
                        <div class="card-body">
                        <p class="card-title text-center display-4 text-white">Motocicletas</p>
                        <p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group m-auto">
                                <a href="includes/productos/moto.php" type="button" class="btn btn-sm btn-outline-warning">Mas Info</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card shadow-sm bg-secondary border-dark rounded">
                        <img src="imagenes/muestra/bici.jpg" class="p-1" alt="moto">
                        <div class="card-body">
                        <p class="card-title text-center display-4 text-white">Bicicletas</p>
                        <p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group m-auto">
                                <a href="includes/productos/bici.php" type="button" class="btn btn-sm btn-outline-warning">Mas Info</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card shadow-sm bg-secondary border-dark rounded">
                        <img src="imagenes/muestra/accesorio.jpg" class="p-1" alt="moto">
                        <div class="card-body">
                        <p class="card-title text-center display-4 text-white">Accesorios</p>
                        <p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group m-auto">
                                <a href="includes/productos/accesorio.php" type="button" class="btn btn-sm btn-outline-warning">Mas Info</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="index.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img class="bi" width="30" height="24" src="imagenes/logo/logo2.0.png"  alt="Logo Leon Motos">
                </a>
                <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Leon Motos</span>
            </div>
            <div class="m-auto">

            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="https://wa.me/542615015652" target="_blank"><img class="bi" width="24" height="24" src="imagenes/logito/whatsapp.svg" alt="Logo whatsapp"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/profile.php?id=100084474042634" target="_blank"><img class="bi" width="24" height="24" src="imagenes/logito/facebook.svg" alt="Logo Facebook"></a></li>
                <li class="ms-3"><a class="text-muted" href="mailto:sanjurjoalan77@gmail.com" target="_blank"><img class="bi" width="24" height="24" src="imagenes/logito/envelope.svg" alt="Logo Mail"></a></li>
            </ul>
        </footer>
    </div>
</body>
</html>