<?php require("../../../con_db.php"); ?>
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
        $permitidos = array("image/jpg", "image/png", "image/jpeg");
        if(isset($_FILES['imgMoto']['name'], $permitidos)){
            if(file_exists($_FILES['imgMoto']['tmp_name']) && strlen($_POST['marca']) >= 1 && strlen($_POST['modelo']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['codigo']) >= 1){
                $url = 'imagenes/productos/moto/'.$_FILES['imgMoto']['name'];
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
                if(move_uploaded_file($_FILES['imgMoto']['tmp_name'], '../../../imagenes/productos/moto/'.$_FILES['imgMoto']['name'])){
                    $query = $conex->query("INSERT INTO moto(marca, url, precio, modelo, codigo, descripcion, precioAnterior, activo, busqueda, llantas, peso, color, transmision) VALUES ('".$marca."', '".$url."', '".$precio."', '".$modelo."', '".$codigo."', '".$descripcion."', '".$precioAnterior."', '".$activo."', '".$busqueda."', '".$llantas."', '".$peso."', '".$color."', '".$transmision."')");
                }
            }
        }
    }
    ?>
<body class="bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <main>
        <br><br><br><br>
        <div class="container w-75">
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
                            <label for="floatingInput">Activo:</label>
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

                <div class="col text-center mt-2">
                    <button type="submit" name="btnAgregarMoto" class="btn btn-lg btn-success w-75"><i class="bi bi-save-fill"></i> Guardar</button>
                    <a href="../admin.php" class="btn btn-lg btn-secondary w-50 my-1"><i class="bi bi-arrow-return-left"></i> Atras</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>