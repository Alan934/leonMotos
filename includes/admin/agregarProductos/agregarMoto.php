<?php session_start();ob_start();
if($_SESSION['ingresoAdmin'] == "Permitido"){
require("../../../con_db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../../../imagenes/logito/wrench-adjustable.svg">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador-Leon Motos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../style.css">
    <meta name="author" content="Sanjurjo Alan">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/a567a0b05a.js" crossorigin="anonymous"></script>
</head>
<?php 
    if(isset($_POST['btnAgregarMoto'])){
        $permitidos = array("image/jpg", "image/png", "image/gif", "image/jpeg");
        if(isset($_FILES['imgMoto']['name'], $permitidos)){
            if(file_exists($_FILES['imgMoto']['tmp_name']) && strlen($_POST['marca']) >= 1 && strlen($_POST['modelo']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['codigo']) >= 1){
                $url = 'imagenes/productos/moto/'.$_FILES['imgMoto']['name'];
                if(file_exists($_FILES['imgMoto1']['tmp_name'])){
                    $url1 = 'imagenes/productos/moto/'.$_FILES['imgMoto1']['name'];
                }else{
                    $url1 = 0;
                }
                if(file_exists($_FILES['imgMoto2']['tmp_name'])){
                    $url2 = 'imagenes/productos/moto/'.$_FILES['imgMoto2']['name'];
                }else{
                    $url2 = 0;
                }
                if(file_exists($_FILES['imgMoto3']['tmp_name'])){
                    $url3 = 'imagenes/productos/moto/'.$_FILES['imgMoto3']['name'];
                }else{
                    $url3 = 0;
                }
                $marca = trim($_POST['marca']);
                $precio = trim($_POST['precio']);
                $modelo = trim($_POST['modelo']);
                $codigo = trim($_POST['codigo']);
                $descripcion = trim($_POST['descripcion']);
                $precioAnterior = trim($_POST['precioAnterior']);
                $activo = trim($_POST['activo']);
                $busqueda = trim($_POST['busqueda']);
                $llantas = trim($_POST['llantas']);
                $peso = trim($_POST['peso']);
                $color = trim($_POST['color']);
                $transmision = trim($_POST['transmision']);

                $capacidadCombustible = trim($_POST['capacidadCombustible']);
                $suspencionDelantera = trim($_POST['suspencionDelantera']);
                $suspencionTrasera = trim($_POST['suspencionTrasera']);
                $frenoDelantero = trim($_POST['frenoDelantero']);
                $frenoTrasero = trim($_POST['frenoTrasero']);
                $motor = trim($_POST['motor']);
                $alimentacion = trim($_POST['alimentacion']);
                $refrigeracion = trim($_POST['refrigeracion']);
                $cilindrada = trim($_POST['cilindrada']);
                $velocidadMaxima = trim($_POST['velocidadMaxima']);
                $potencia = trim($_POST['potencia']);
                $encendido = trim($_POST['encendido']);

                if(move_uploaded_file($_FILES['imgMoto']['tmp_name'], '../../../imagenes/productos/moto/'.$_FILES['imgMoto']['name'])){
                    if(move_uploaded_file($_FILES['imgMoto1']['tmp_name'], '../../../imagenes/productos/moto/'.$_FILES['imgMoto1']['name']));
                    if(move_uploaded_file($_FILES['imgMoto2']['tmp_name'], '../../../imagenes/productos/moto/'.$_FILES['imgMoto2']['name']));
                    if(move_uploaded_file($_FILES['imgMoto3']['tmp_name'], '../../../imagenes/productos/moto/'.$_FILES['imgMoto3']['name']));
                    $query = $conex->query("INSERT INTO moto(marca, url, precio, modelo, codigo, descripcion, precioAnterior, activo, busqueda, 
                    llantas, peso, color, transmision, url1, url2, url3, capacidadCombustible, suspencionDelantera, suspencionTrasera, frenoDelantero, 
                    frenoTrasero, motor, alimentacion, refrigeracion, cilindrada, velocidadMaxima, potencia, encendido) VALUES ('".$marca."', '".$url."', '".$precio."', '".$modelo."', '".$codigo."', '".$descripcion."', '".$precioAnterior."', '".$activo."', '".$busqueda."', '".$llantas."', '".$peso."', '".$color."', '".$transmision."', '".$url1."', '".$url2."', 
                    '".$url3."', '".$capacidadCombustible."', '".$suspencionDelantera."', '".$suspencionTrasera."', '".$frenoDelantero."', '".$frenoTrasero."',
                    '".$motor."', '".$alimentacion."', '".$refrigeracion."', '".$cilindrada."', '".$velocidadMaxima."', '".$potencia."', '".$encendido."')");
                    $_SESSION['mensajeAgregarMoto'] = '¡Moto Agregada¡';
                    $_SESSION['mensajeColorAgregarMoto'] = 'success'; 
                }
            }else{
                $_SESSION['mensajeAgregarMoto'] = '¡Complete todos los campos¡';
                $_SESSION['mensajeColorAgregarMoto'] = 'info';
            }
        }else{
            $_SESSION['mensajeAgregarMoto'] = '¡Formato no es png, jpeg, jpg o gif¡';
            $_SESSION['mensajeColorAgregarMoto'] = 'info';
        }
    }
    ?>
<body class="bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <main>
        <br><br><br><br>
        <div class="container w-75">
            <div class="w-100 d-flex flex-wrap justify-content-center text-center">
                <?php if(isset($_SESSION['mensajeAgregarMoto'])){ ?>
                    <div class="alert alert-<?= $_SESSION['mensajeColorAgregarMoto']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['mensajeAgregarMoto']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
            </div>
            <form action="agregarMoto.php" method="post" enctype="multipart/form-data">
                <h1 class="h3 mb-3 text-warning text-center fw-bold">AGREGAR MOTO</h1>
                <div class="row">
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="marca" id="floatingInput" placeholder="Marca:" require>
                            <label for="floatingInput">Marca:</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="modelo" id="floatingInput" placeholder="modelo:" require>
                            <label for="floatingInput">Modelo:</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="precio" id="floatingInput" placeholder="Precio:" require>
                            <label for="floatingInput">Precio:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="file" class="form-control" name="imgMoto">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="number" class="form-control" name="codigo" id="floatingInput" placeholder="Codigo:" require>
                            <label for="floatingInput">Codigo:</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label for="" class="text-white">Imagenes Secundarias</label>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="file" class="form-control" name="imgMoto1">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="file" class="form-control" name="imgMoto2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="file" class="form-control" name="imgMoto3">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="descripcion" id="floatingInput" placeholder="Descripcion:">
                            <label for="floatingInput">Descripcion:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating my-2">
                            <input type="number" class="form-control" name="precioAnterior" id="floatingInput" placeholder="Precio Anterior:">
                            <label for="floatingInput">Precio Anterior:</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="number" class="form-control" name="activo" id="floatingInput" placeholder="Activo:">
                            <label for="floatingInput">Activo (0,1):</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="busqueda" id="floatingInput" placeholder="Busqueda:" require>
                            <label for="floatingInput">Busqueda:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="llantas" id="floatingInput" placeholder="Llantas:">
                            <label for="floatingInput">Llantas:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="number" class="form-control" name="peso" id="floatingInput" placeholder="Peso:">
                            <label for="floatingInput">Peso:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="color" id="floatingInput" placeholder="Color:">
                            <label for="floatingInput">Color:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="transmision" id="floatingInput" placeholder="Transmision:">
                            <label for="floatingInput">Transmision:</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="frenoTrasero" id="floatingInput" placeholder="Freno Trasero:">
                            <label for="floatingInput">Freno Trasero:</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="frenoDelantero" id="floatingInput" placeholder="Freno Delantero:">
                            <label for="floatingInput">Freno Delantero:</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="encendido" id="floatingInput" placeholder="Encendido:">
                            <label for="floatingInput">Encendido:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="suspencionTrasera" id="floatingInput" placeholder="Suspencion Trasera:">
                            <label for="floatingInput">Suspencion Trasera:</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="suspencionDelantera" id="floatingInput" placeholder="Suspencion Delantera:">
                            <label for="floatingInput">Suspencion Delantera:</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="potencia" id="floatingInput" placeholder="Potencia:">
                            <label for="floatingInput">Potencia:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="number" class="form-control" name="velocidadMaxima" id="floatingInput" placeholder="Velocidad Maxima:">
                            <label for="floatingInput">Velocidad Maxima:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="cilindrada" id="floatingInput" placeholder="Cilindrada:">
                            <label for="floatingInput">Cilindrada:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="refrigeracion" id="floatingInput" placeholder="Refrigeracion:">
                            <label for="floatingInput">Refrigeracion:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="alimentacion" id="floatingInput" placeholder="Alimentacion:">
                            <label for="floatingInput">Alimentacion:</label>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="capacidadCombustible" id="floatingInput" placeholder="Capacidad Combustible:">
                            <label for="floatingInput">Capacidad Combustible:</label>
                        </div>
                        </div>
                        <div class="col">
                            <div class="form-floating my-1">
                                <input type="text" class="form-control" name="motor" id="floatingInput" placeholder="Motor:">
                                <label for="floatingInput">Motor:</label>
                            </div>
                        </div>
                    </div>

                <div class="col text-center mt-2">
                    <button type="submit" name="btnAgregarMoto" class="btn btn-lg btn-success w-75"><i class="bi bi-save-fill"></i> Guardar</button>
                    <a href="../admin.php" class="btn btn-lg btn-secondary w-50 my-1"><i class="bi bi-arrow-return-left"></i> Atras</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
<?php 

}else{
    header("location:../../../index.php");
    exit;
} ?>