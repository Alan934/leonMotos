<?php 
    require("../../../con_db.php");
    if(isset($_GET['idMoto'])){
        $id = $_GET['idMoto'];
        $consultaMoto = $conex->query("SELECT * FROM moto where (id = $id)");
    }
    if(isset($_GET['codigoMoto'])){
        $codigoR = $_GET['codigoMoto'];
        $consultaMoto = $conex->query("SELECT * FROM moto where (codigo = $codigoR)");
    }
    
    $moto = mysqli_fetch_assoc($consultaMoto);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../../../imagenes/logo/logo2.0.png">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leon Motos - <?php echo $moto['modelo'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../style.css">
    <meta name="keywords" content="motos, moto, bici, bicicleta, venta, bicicletas, accesorios motos, bicis">
    <meta name="description" content="Venta motos, bicis y accesorios">
    <meta name="author" content="Sanjurjo Alan">
</head>
<body class="bg-secondary bg-opacity-25">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <header class="bg-primary">
        <div class="px-3 py-2">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="../../../index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <img class="bi me-2" width="60" height="52" src="../../../imagenes/logo/logo2.0.png" alt="Logo Leon Motos">
                <span class="ms-1 fs-3 text-dark">Leon Motos</span>
            </a>

            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                <a href="../moto.php" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="../../../imagenes/logito/motorcycle-solid.svg" alt="Logo Moto">
                    Motocicletas
                </a>
                </li>
                <li>
                <a href="../bici.php" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="../../../imagenes/logito/bicycle.svg" alt="Logo Moto">
                    Bicicletas
                </a>
                </li>
                <li>
                <a href="../accesorio.php" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="../../../imagenes/logito/grid.svg" alt="Logo Moto">
                    Accesorios
                </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </header>
    
    <main class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1">
                    <div class="mt-1">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <?php if(strlen($moto['url1']) >= 2){ ?>
                                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2"></button>
                                <?php }?>
                                <?php if(strlen($moto['url2']) >= 2){ ?>
                                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-current="true" aria-label="Slide 3"></button>
                                <?php }?>
                                <?php if(strlen($moto['url3']) >= 2){ ?>
                                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-current="true" aria-label="Slide 4"></button>
                                <?php }?>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../../../<?php echo $moto['url']; ?>" class="d-block w-100 h-100" alt="<?php echo $moto['marca']; echo $moto['modelo']; ?>">
                                </div>
                                <?php if(strlen($moto['url1']) >= 2){ ?>
                                    <div class="carousel-item">
                                        <img src="../../../<?php echo $moto['url1']; ?>" class="d-block w-100" alt="<?php echo $moto['marca']; echo $moto['modelo']; ?>">
                                    </div>
                                <?php }?>
                                <?php if(strlen($moto['url2']) >= 2){ ?>
                                    <div class="carousel-item">
                                        <img src="../../../<?php echo $moto['url2']; ?>" class="d-block w-100" alt="<?php echo $moto['marca']; echo $moto['modelo']; ?>">
                                    </div>
                                <?php }?>
                                <?php if(strlen($moto['url3'] >= 2)){ ?>
                                    <div class="carousel-item">
                                        <img src="../../../<?php echo $moto['url3']; ?>" class="d-block w-100" alt="<?php echo $moto['marca']; echo $moto['modelo']; ?>">
                                    </div>
                                <?php }?>
                            </div>
                            <button class="carousel-control-prev bg-secondary bg-opacity-25" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next bg-secondary bg-opacity-25" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 order-md-1">
                    <p class="text-title text-white display-1"><?php echo $moto['marca']; ?> <?php echo $moto['modelo']; ?></p>
                    <?php if($moto['precioAnterior'] > 0){ ?>
                        <small class=""> <del class="text-danger fs-5 text-center ">$<?php echo number_format($moto['precioAnterior'], 3, ",", ",");?> ARS</del></small>
                    <?php } ?>
                    <p class="text-success fw-bold fst-italic display-4">$<?php echo number_format($moto['precio'], 3, ",", ",");?> ARS</p>
                    <p class="lead fst-italic text-white"><?php echo $moto['descripcion']; ?></p>
                    <div class="d-grid gap-3 col-10 mx-auto">
                        <button class="btn btn-primary" type="button">Comprar Ahora</button>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-start py-4 data-icons-tab border-top border-danger">
                <div class="d-inline-flex align-items-center data-icons-item">
                    <img src="../../../imagenes/muestra/motor.png" alt="Motor" width="60" height="55" class="mr-lg-4 mr-2"> 
                    <h6 class="mb-0 pr-lg-4 text-white"><span class="fw-bold">Motor</span> <br class="d-none d-md-inline"><?php echo $moto['motor']; ?></h6>
                </div>
                <div class="d-inline-flex align-items-center data-icons-item">
                    <img src="../../../imagenes/muestra/potencia.png" alt="Potencia" width="60" height="55" class="mr-lg-4 mr-2"> 
                    <h6 class="mb-0 pr-lg-4 text-white"><span class="fw-bold">Potencia</span> <br class="d-none d-md-inline"><?php echo $moto['potencia']; ?></h6>
                </div>
                <div class="d-inline-flex align-items-center data-icons-item">
                    <img src="../../../imagenes/muestra/transmision.png" alt="Transmisi??n" width="60" height="55" class="mr-lg-4 mr-2"> 
                    <h6 class="mb-0 pr-lg-4 text-white"><span class="fw-bold">Transmisi??n</span> <br class="d-none d-md-inline"><?php echo $moto['transmision']; ?></h6>
                </div>
                <div class="d-inline-flex align-items-center data-icons-item">
                    <img src="../../../imagenes/muestra/frenos.png" alt="Frenos" width="60" height="55" class="mr-lg-4 mr-2"> 
                    <h6 class="mb-0 pr-lg-4 text-white"><span class="fw-bold">Frenos</span> <br class="d-none d-md-inline"><?php echo $moto['frenoDelantero']; ?> <br> <?php echo $moto['frenoTrasero']; ?></h6>
                </div>
                <div class="d-inline-flex align-items-center data-icons-item">
                    <img src="../../../imagenes/muestra/encendido.png" alt="Encendido" width="60" height="55" class="mr-lg-4 mr-2"> 
                    <h6 class="mb-0 pr-lg-4 text-white"><span class="fw-bold">Encendido</span> <br class="d-none d-md-inline"><?php echo $moto['encendido']; ?></h6>
                </div>
            </div>
        </div>

        <div class="bg-dark">
            <div class="m-0 py-3">
                <div class="container bg-secondary opacity-100 rounded-5">
                    <div class="row mb-3 ">
                        <div class="col m-auto border-bottom-0 border-danger">
                            <p class="text text-center display-2 pt-2">FICHA TECNICA</p>
                        </div>
                    </div>
                </div>
                <?php if(isset($moto['color'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-50 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Color:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['color']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['motor'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-75 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Motor:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['motor']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['peso']) && $moto['peso'] != 0){ ?>
                    <div class="container w-75 bg-white bg-opacity-50 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Peso:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['peso']; ?> Kg</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['cilindrada'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-75 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Cilindrada:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['cilindrada']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['llantas'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-50 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Llantas:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['llantas']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['transmision'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-75 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Transmision:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['transmision']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['capacidadCombustible']) && $moto['capacidadCombustible'] != 0){ ?>
                    <div class="container w-75 bg-white bg-opacity-50 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Capacidad Combustible:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['capacidadCombustible']; ?> Litros</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['suspencionDelantera'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-75 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Suspencion Delantera:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['suspencionDelantera']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['suspencionTrasera'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-50 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Suspencion Trasera:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['suspencionTrasera']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['frenoDelantero'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-75 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Freno Delantero:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['frenoDelantero']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['frenoTrasero'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-50 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Freno Trasero:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['frenoTrasero']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['refrigeracion'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-75 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Refrigeracion:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['refrigeracion']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['velocidadMaxima'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-50 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Velocidad Maxima:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['velocidadMaxima']; ?> km/h</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['alimentacion'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-75 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Alimentacion:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['alimentacion']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($moto['codigo'])){ ?>
                    <div class="container w-75 bg-white bg-opacity-50 rounded">
                        <div class="row ">
                            <div class="col m-auto border-right">
                                <p class="text fs-5 pt-2">Codigo:</p>
                            </div>
                            <div class="col m-auto border-left border-dark">
                                <p class="text fs-5 pt-2"><?php echo $moto['codigo']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center pt-3 pb-1 mb-2 mt-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="../../../index.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img class="bi" width="30" height="24" src="../../../imagenes/logo/logo2.0.png"  alt="Logo Leon Motos">
                </a>
                <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Leon Motos</span>
            </div>
            <div class="m-auto">

            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="https://wa.me/542615015652" target="_blank"><img class="bi" width="24" height="24" src="../../../imagenes/logito/whatsapp.svg" alt="Logo whatsapp"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/profile.php?id=100084474042634" target="_blank"><img class="bi" width="24" height="24" src="../../../imagenes/logito/facebook.svg" alt="Logo Facebook"></a></li>
                <li class="ms-3"><a class="text-muted" href="mailto:sanjurjoalan77@gmail.com" target="_blank"><img class="bi" width="24" height="24" src="../../../imagenes/logito/envelope.svg" alt="Logo Mail"></a></li>
            </ul>
        </footer>
    </div>
</body>
</html>