<?php session_start();ob_start(); require("../../../con_db.php");
if($_SESSION['ingresoAdmin'] == "Permitido"){

?>
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
    if(isset($_GET['idPromocion'])){
        $id = $_GET['idPromocion'];
        $query = "SELECT * FROM promocion WHERE id = $id LIMIT 1";
        $resultado = mysqli_query($conex, $query);
        if(mysqli_num_rows($resultado) ==1){
            $arrayEditar = mysqli_fetch_array($resultado);
            $url = $arrayEditar['url'];
            $marca = $arrayEditar['marca'];
            $modelo = $arrayEditar['modelo'];
            $codigo = $arrayEditar['codigo'];
            $busqueda = $arrayEditar['busqueda'];
            $tipo = $arrayEditar['tipo'];
        }
    }
    if(isset($_POST['btnEditarPromocion'])){
        $url = trim($_POST['url']);
        $marca = trim($_POST['marca']);
        $modelo = trim($_POST['modelo']);
        $codigo = trim($_POST['codigo']);
        $busqueda = trim($_POST['busqueda']);
        $tipo = trim($_POST['tipo']);
        
        $query = ("UPDATE promocion SET marca = '$marca', modelo = '$modelo', busqueda = '$busqueda', tipo = '$tipo', url ='$url', codigo = '$codigo' WHERE id = $id");
        
        mysqli_query($conex, $query);
        header ("Location: ../admin.php");
    }
?>

<body class="bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <main>
        <br><br><br><br>
        <div class="container w-75">
            <form action="editarPromocion.php?idPromocion=<?php echo $_GET['idPromocion']; ?>" method="post">
                <h1 class="h3 mb-3 text-warning text-center fw-bold">EDITAR PROMOCIONES</h1>
                <div class="row">
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $marca ?>" name="marca" id="floatingInput" placeholder="Marca:" require>
                            <label for="floatingInput">Marca:</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $modelo ?>" name="modelo" id="floatingInput" placeholder="modelo:" require>
                            <label for="floatingInput">Modelo:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" value="<?php echo $url ?>" class="form-control" name="url" placeholder="url">
                            <label for="floatingInput">Imagen</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="number" class="form-control" value="<?php echo $codigo ?>" name="codigo" id="floatingInput" placeholder="Codigo:" require>
                            <label for="floatingInput">Codigo:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating my-1">
                            <select class="form-select" name="tipo" aria-label="Default select example">
                                <?php if($tipo == "Motocicleta"){?>
                                    <option value="Motocicleta">Motocicleta</option>
                                    <option value="Bicicleta">Bicicleta</option>
                                    <option value="Accesorio">Accesorio</option>
                                <?php } ?>
                                <?php if($tipo == "Bicicleta"){?>
                                    <option value="Bicicleta">Bicicleta</option>
                                    <option value="Motocicleta">Motocicleta</option>
                                    <option value="Accesorio">Accesorio</option>
                                <?php } ?>
                                <?php if($tipo == "Accesorio"){?>
                                    <option value="Accesorio">Accesorio</option>
                                    <option value="Motocicleta">Motocicleta</option>
                                    <option value="Bicicleta">Bicicleta</option>
                                <?php } ?>
                            </select>
                            <label for="floatingInput">Tipo:</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $busqueda ?>" name="busqueda" id="floatingInput" placeholder="Busqueda:">
                            <label for="floatingInput">Busqueda:</label>
                        </div>
                    </div>
                </div>
                
            </div>

                <div class="col text-center mt-2">
                    <button type="submit" name="btnEditarPromocion" class="btn btn-lg btn-success w-75"><i class="bi bi-save-fill"></i> Editar</button>
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
