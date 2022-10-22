<?php 
    require("../../con_db.php");
    require("../funciones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../../imagenes/logo/Mi proyecto.png">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leon Motos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <meta name="keywords" content="motos, moto, bici, bicicleta, venta, bicicletas, accesorios motos, bicis">
    <meta name="description" content="Venta motos, bicis y accesorios">
    <meta name="author" content="Sanjurjo Alan">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <header>
        <div >
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="../../index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <img class="bi me-2" width="60" height="52" src="../../imagenes/logo/logo2.0.png" alt="Logo Leon Motos">
                <span class="ms-1 fs-3 text-dark">Leon Motos</span>
            </a>

            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                <a href="moto.php" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="../../imagenes/logito/motorcycle-solid.svg" alt="Logo Moto">
                    Motocicletas
                </a>
                </li>
                <li>
                <a href="bici.php" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="../../imagenes/logito/bicycle.svg" alt="Logo Moto">
                    Bicicletas
                </a>
                </li>
                <li>
                <a href="accesorio.php" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="../../imagenes/logito/grid.svg" alt="Logo Moto">
                    Accesorios
                </a>
                </li>
            </ul>
            </div>
            <div class="px-3 py-2 border-bottom mb-3">
                <div class="container d-flex flex-wrap justify-content-center">
                    <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto d-flex" role="search" method="GET" action="moto.php">
                        <input type="search" class="form-control" name="buscar" placeholder="Buscar Moto" aria-label="Search">
                        <button class="btn btn-outline-success ms-1" type="submit">Buscar</button>
                    </form>
                    <div class="text-end">
                        <div>
                            <ul class="nav justify-content-center m-0 p-0">
                                <p class="text-center my-1"><img src="../../imagenes/logito/filter.svg" alt="Logo Filter" width="30" height="24"><span class="my-2 fs-5">Filtrar por</span></p>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Marca</a>
                                    <ul class="dropdown-menu">
                                        <form action="moto.php" method="POST">
                                            <li><button class="btn dropdown-item" name="todas" type="submit" >Todas</button></li>
                                            <li><button class="btn dropdown-item" name="motomel" type="submit" >Motomel</button></li>
                                            <li><button class="btn dropdown-item" name="gilera" type="submit" >Gilera</button></li>
                                            <li><button class="btn dropdown-item" name="mondial" type="submit" >Mondial</button></li>
                                            <li><button class="btn dropdown-item" name="zanella" type="submit" >Zanella</button></li>
                                        </form>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Precio</a>
                                    <ul class="dropdown-menu">
                                        <form action="moto.php" method="POST">
                                            <li><button class="btn dropdown-item" name="precioOriginal" type="submit" >Original</button></li>
                                            <li><button class="btn dropdown-item" name="precioAscendente" type="submit" >Menor a Mayor</button></li>
                                            <li><button class="btn dropdown-item" name="precioDescendente" type="submit" >Mayor a Menor</button></li>
                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    
    <?php 
        $queryMoto = $conex->query("SELECT * FROM moto WHERE activo=1");
        $mostrarMoto = '16';
        if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
        }else{
            $pagina = 1;
        }
        $empieza = ($pagina-1) * $mostrarMoto;
        if(isset($_GET['buscar']))
            $consultaMoto = $conex->query("SELECT * FROM moto where busqueda like '%".$_GET['buscar']."%'");
        else
        $consultaMoto = $conex->query("SELECT * FROM moto where activo=1 LIMIT $empieza, $mostrarMoto");
    ?>
    
    <?php function mostrarMoto($sql) : void{ ?>
        <div class="album py-2 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 g-3">
                    <?php while($moto = mysqli_fetch_assoc($sql)){ ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="descripcion/descripcionMoto.php?idMoto=<?php echo $moto['id'];?>"><img src="../../<?php echo $moto['url'];?>" title="Descripcion" class="bd-placeholder-img card-img-top imgProducto" id="imagenProducto" alt="<?php echo $moto['marca'];?> <?php echo $moto['modelo'];?>"></a>     
                            <div class="card-body">
                                <p class="card-title text-center fs-4 m-0 p-0"><?php echo $moto['marca'];?> <?php echo $moto['modelo'];?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <?php if($moto['precioAnterior'] > 0){ ?>
                                        <small class="text-muted text-center m-0 p-0"> <del class="text-danger fs-5 text-center ">$<?php echo $moto['precioAnterior'];?></del> <img src="../../imagenes/logito/arrow-right.svg" width="24" height="24" alt=""></small>
                                    <?php } ?>
                                    <small class="text-muted text-center m-auto p-0"><span class="text-success fs-4">$<?php echo $moto['precio'];?> ARS</span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php 
    if(isset($_POST['precioAscendente'])){
        $mostrarOrdenMoto = $conex->query("SELECT * FROM moto ORDER BY precio ASC");
        mostrarMoto($mostrarOrdenMoto);
    }
    if(isset($_POST['precioDescendente'])){
        $mostrarOrdenMoto = $conex->query("SELECT * FROM moto ORDER BY precio DESC");
        mostrarMoto($mostrarOrdenMoto);
    }
    if(isset($_POST['motomel'])){   
        $mostrarOrdenMoto = $conex->query("SELECT * FROM moto where marca = 'Motomel'");
        mostrarMoto($mostrarOrdenMoto);
    }
    if(isset($_POST['gilera'])){   
        $mostrarOrdenMoto = $conex->query("SELECT * FROM moto where marca = 'Gilera'");
        mostrarMoto($mostrarOrdenMoto);
    }
    if(isset($_POST['mondial'])){   
        $mostrarOrdenMoto = $conex->query("SELECT * FROM moto where marca = 'Mondial'");
        mostrarMoto($mostrarOrdenMoto);
    }
    if(isset($_POST['zanella'])){   
        $mostrarOrdenMoto = $conex->query("SELECT * FROM moto where marca = 'Zanella'");
        mostrarMoto($mostrarOrdenMoto);
    }
    if(isset($_POST['todas']) || isset($_POST['precioOriginal']) || (!isset($_POST['precioAscendente']) && !isset($_POST['precioDescendente']) && !isset($_POST['motomel']) && !isset($_POST['gilera']) && !isset($_POST['zanella']) && !isset($_POST['mondial'])) ){
        mostrarMoto($consultaMoto);
    }
    ?>

    <?php 
        $totalRegistros =@mysqli_num_rows($queryMoto);
        $totalPaginas = ceil($totalRegistros/$mostrarMoto);
    ?>
    <nav aria-label="Page navigation example d-flex flex-wrap justify-content-center">
    <ul class="pagination d-flex flex-wrap justify-content-center mt-2 mb-0">
        <li class="page-item"><a class="page-link" href="moto.php?pagina=<?php echo 1;?>">Primera</a></li>
        <li class="page-item"><a class="page-link" href="moto.php?pagina=<?php if($pagina <= 1){echo $totalPaginas;}else{echo ($pagina-1);} ?>">Anterior</a></li>
        <?php 
        for($i=1; $i <= $totalPaginas; $i++){
            ?> <li class="page-item"><a class="page-link" href="moto.php?pagina=<?php echo "$i";?>"><?php echo "$i" ?></a></li> <?php
        }
        ?>
        <li class="page-item"><a class="page-link" href="moto.php?pagina=<?php if($pagina >= $totalPaginas){echo 1;}else{echo ($pagina+1);} ?>">Siguiente</a></li>
        <li class="page-item"><a class="page-link" href="moto.php?pagina=<?php echo $totalPaginas; ?>">Ultima</a></li>
    </ul>
    </nav>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="index.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img class="bi" width="30" height="24" src="../../imagenes/logo/logo2.0.png"  alt="Logo Leon Motos">
                </a>
                <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Leon Motos</span>
            </div>
            <div class="m-auto">
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="https://wa.me/542615015652" target="_blank"><img class="bi" width="24" height="24" src="../../imagenes/logito/whatsapp.svg" alt="Logo whatsapp"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/profile.php?id=100084474042634" target="_blank"><img class="bi" width="24" height="24" src="../../imagenes/logito/facebook.svg" alt="Logo Facebook"></a></li>
                <li class="ms-3"><a class="text-muted" href="mailto:sanjurjoalan77@gmail.com" target="_blank"><img class="bi" width="24" height="24" src="../../imagenes/logito/envelope.svg" alt="Logo Mail"></a></li>
            </ul>
        </footer>
    </div>
</body>
</html>