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
    if(isset($_POST['btnAgregarPromocion'])){
        $permitidos = array("image/jpg", "image/png", "image/jpeg");
        if(isset($_FILES['imgPromocion']['name'], $permitidos)){
            if(file_exists($_FILES['imgPromocion']['tmp_name']) && strlen($_POST['marca']) >= 1 && strlen($_POST['modelo']) >= 1 && strlen($_POST['codigo']) >= 1){
                $url = 'imagenes/promocionales/productos/'.$_FILES['imgPromocion']['name'];
                $marca = trim($_POST['marca']);
                $modelo = trim($_POST['modelo']);
                $codigo = trim($_POST['codigo']);
                $busqueda = trim($_POST['busqueda']);
                $tipo = trim($_POST['tipo']);
                if(move_uploaded_file($_FILES['imgPromocion']['tmp_name'], '../../../imagenes/promocionales/productos/'.$_FILES['imgPromocion']['name'])){
                    $query = $conex->query("INSERT INTO promocion(marca, url, modelo, codigo, busqueda, tipo) VALUES ('".$marca."', '".$url."', '".$modelo."', '".$codigo."', '".$busqueda."', '".$tipo."')");
                    $_SESSION['mensajeAgregarPromocion'] = '¡Promocion Agregada¡';
                    $_SESSION['mensajeColorAgregarPromocion'] = 'success'; 
                }
            }else{
                $_SESSION['mensajeAgregarPromocion'] = '¡Complete todos los campos¡';
                $_SESSION['mensajeColorAgregarPromocion'] = 'info';
            }
        }
    }
    ?>
<body class="bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <main>
        <br><br><br><br>
        <div class="container w-75">
            <div class="w-100 d-flex flex-wrap justify-content-center text-center">
                <?php if(isset($_SESSION['mensajeAgregarPromocion'])){ ?>
                    <div class="alert alert-<?= $_SESSION['mensajeColorAgregarPromocion']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['mensajeAgregarPromocion']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
            </div>
            <form action="agregarPromocion.php" method="post" enctype="multipart/form-data">
                <h1 class="h3 mb-3 text-warning text-center fw-bold">AGREGAR PROMOCION</h1>
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
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="file" class="form-control" name="imgPromocion">
                            <label for="floatingInput">Seleccione Imagen:</label>
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
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" name="busqueda" id="floatingInput" placeholder="Busqueda:" require>
                            <label for="floatingInput">Busqueda:</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <select class="form-select" name="tipo" aria-label="Default select example">
                                <option value="Motocicleta">Motocicleta</option>
                                <option value="Bicicleta">Bicicleta</option>
                                <option value="Accesorio">Accesorio</option>
                            </select>
                            <label for="floatingInput">Tipo:</label>
                        </div>
                    </div>
                </div>

                <div class="col text-center mt-2">
                    <button type="submit" name="btnAgregarPromocion" class="btn btn-lg btn-success w-75"><i class="bi bi-save-fill"></i> Guardar</button>
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