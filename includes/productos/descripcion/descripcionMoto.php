<?php 
    require("../../../con_db.php");
    $id = $_GET['idMoto'];
    $consultaMoto = $conex->query("SELECT * FROM moto where id = $id");
    $moto = mysqli_fetch_assoc($consultaMoto);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../../../imagenes/logo/Mi proyecto.png">
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
    
    <header>
        <div class="px-3 py-2 border-bottom">
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
    
    <main>
        <div class="container my-2">
            <div class="row">
                <div class="col-md-6 order-md-1">
                    <img src="../../../<?php echo $moto['url']; ?>" class="w-100" alt="<?php echo $moto['marca']; echo $moto['modelo']; ?> ">
                </div>
                <div class="col-md-6 order-md-1">
                    <p class="text-title display-1"><?php echo $moto['marca']; ?> <?php echo $moto['modelo']; ?></p>
                    <?php if($moto['precioAnterior'] > 0){ ?>
                        <small class=""> <del class="text-danger fs-5 text-center ">$<?php echo $moto['precioAnterior'];?></del></small>
                    <?php } ?>
                    <p class="text-success display-4">$<?php echo $moto['precio'];?> ARS</p>
                    <p class="lead"><?php echo $moto['descripcion']; ?></p>
                    <div class="d-grid gap-3 col-10 mx-auto">
                        <button class="btn btn-primary" type="button">Comprar Ahora</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-secondary m-0 p-0">
            <div class="container ">
                <div class="row ">
                    <div class="col ">
                        <p class="text"><?php echo $moto['marca']; ?></p>
                    </div>
                    <div class="col ">
                        <p class="text "><?php echo $moto['marca']; ?></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="bg-secondary bg-opacity-75 m-0 p-0">
                    <p class="text "><?php echo $moto['marca']; ?></p>
                </div>
                <div class="bg-white bg-opacity-75 m-0 p-0">
                    <p class="text "><?php echo $moto['marca']; ?></p>
                </div>
                <div class="bg-secondary bg-opacity-75 m-0 p-0">
                    <p class="text "><?php echo $moto['marca']; ?></p>
                </div>
                <div class="bg-white bg-opacity-75 m-0 p-0">
                    <p class="text "><?php echo $moto['marca']; ?></p>
                </div>
                <div class="bg-secondary bg-opacity-75 m-0 p-0">
                    <p class="text "><?php echo $moto['marca']; ?></p>
                </div>
            </div>
            <div class="col-md-5 m-auto">
                <div class="bg-secondary bg-opacity-75 m-0 p-0">
                    <p class="text "><?php echo $moto['marca']; ?> <?php echo $moto['modelo']; ?></p>
                </div>
                <div class="bg-white bg-opacity-75 m-0 p-0">
                    <p class="text "><?php echo $moto['marca']; ?> <?php echo $moto['modelo']; ?></p>
                </div>
                <div class="bg-secondary bg-opacity-75 m-0 p-0">
                    <p class="text "><?php echo $moto['marca']; ?> <?php echo $moto['modelo']; ?></p>
                </div>
                <div class="bg-white bg-opacity-75 m-0 p-0">
                    <p class="text "><?php echo $moto['marca']; ?> <?php echo $moto['modelo']; ?></p>
                </div>
                <div class="bg-secondary bg-opacity-75 m-0 p-0">
                    <p class="text "><?php echo $moto['marca']; ?> <?php echo $moto['modelo']; ?></p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>