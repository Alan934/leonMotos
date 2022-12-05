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
    if(isset($_GET['idMoto'])){
        $id = $_GET['idMoto'];
        $query = "SELECT * FROM moto WHERE id = $id LIMIT 1";
        $resultado = mysqli_query($conex, $query);
        if(mysqli_num_rows($resultado) ==1){
            $arrayEditar = mysqli_fetch_array($resultado);
            $url = $arrayEditar['url'];
            $marca = $arrayEditar['marca'];
            $precio = $arrayEditar['precio'];
            $modelo = $arrayEditar['modelo'];
            $codigo = $arrayEditar['codigo'];
            $descripcion = $arrayEditar['descripcion'];
            $precioAnterior = $arrayEditar['precioAnterior'];
            $activo = $arrayEditar['activo'];
            $busqueda = $arrayEditar['busqueda'];
            $llantas = $arrayEditar['llantas'];
            $peso = $arrayEditar['peso'];
            $color = $arrayEditar['color'];
            $transmision = $arrayEditar['transmision'];
            $capacidadCombustible = $arrayEditar['capacidadCombustible'];
            $suspencionDelantera = $arrayEditar['suspencionDelantera'];
            $suspencionTrasera = $arrayEditar['suspencionTrasera'];
            $frenoDelantero = $arrayEditar['frenoDelantero'];
            $frenoTrasero = $arrayEditar['frenoTrasero'];
            $motor = $arrayEditar['motor'];
            $alimentacion = $arrayEditar['alimentacion'];
            $refrigeracion = $arrayEditar['refrigeracion'];
            $cilindrada = $arrayEditar['cilindrada'];
            $velocidadMaxima = $arrayEditar['velocidadMaxima'];
            $potencia = $arrayEditar['potencia'];
            $encendido = $arrayEditar['encendido'];
        }
    }
    if(isset($_POST['btnEditarMoto'])){
        $url = trim($_POST['url']);
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
        
        $query = ("UPDATE moto SET marca = '$marca', url ='$url', precio = '$precio', modelo = '$modelo', codigo = '$codigo', 
        descripcion = '$descripcion', precioAnterior = '$precioAnterior', activo = '$activo', busqueda = '$busqueda', llantas = '$llantas',
        peso = '$peso', color = '$color', transmision = '$transmision', encendido = '$encendido', potencia = '$potencia', velocidadMaxima = '$velocidadMaxima',
        cilindrada = '$cilindrada', refrigeracion = '$refrigeracion', alimentacion = '$alimentacion', motor = '$motor', frenoTrasero = '$frenoTrasero',
        frenoDelantero = '$frenoDelantero', suspencionTrasera = '$suspencionTrasera', suspencionDelantera = '$suspencionDelantera' WHERE id = $id");
        
        mysqli_query($conex, $query);

        $_SESSION['mensajeAdmin'] = '!Moto Editada Correctamente¡';
        $_SESSION['mensajeColorAdmin'] = 'success';
        header ("Location: ../admin.php");
    }
?>

<body class="bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <main>
        <br><br><br><br>
        <div class="container w-75">
            <form action="editarMoto.php?idMoto=<?php echo $_GET['idMoto']; ?>" method="post">
                <h1 class="h3 mb-3 text-warning text-center fw-bold">EDITAR MOTO</h1>
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
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $precio ?>" name="precio" id="floatingInput" placeholder="Precio:" require>
                            <label for="floatingInput">Precio:</label>
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
                            <input type="text" class="form-control" value="<?php echo $descripcion ?>" name="descripcion" id="floatingInput" placeholder="Descripcion:">
                            <label for="floatingInput">Descripcion:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating my-2">
                            <input type="number" class="form-control" value="<?php echo $precioAnterior ?>" name="precioAnterior" id="floatingInput" placeholder="Precio Anterior:">
                            <label for="floatingInput">Precio Anterior:</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="number" class="form-control" value="<?php echo $activo ?>" name="activo" id="floatingInput" placeholder="Activo:">
                            <label for="floatingInput">Activo (0,1):</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $busqueda ?>" name="busqueda" id="floatingInput" placeholder="Busqueda:" require>
                            <label for="floatingInput">Busqueda:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $llantas ?>" name="llantas" id="floatingInput" placeholder="Llantas:">
                            <label for="floatingInput">Llantas:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="number" class="form-control" value="<?php echo $peso ?>" name="peso" id="floatingInput" placeholder="Peso:">
                            <label for="floatingInput">Peso:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $color ?>" name="color" id="floatingInput" placeholder="Color:">
                            <label for="floatingInput">Color:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $transmision ?>" name="transmision" id="floatingInput" placeholder="Transmision:">
                            <label for="floatingInput">Transmision:</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $frenoTrasero ?>" name="frenoTrasero" id="floatingInput" placeholder="Freno Trasero:">
                            <label for="floatingInput">Freno Trasero:</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $frenoDelantero ?>" name="frenoDelantero" id="floatingInput" placeholder="Freno Delantero:">
                            <label for="floatingInput">Freno Delantero:</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $encendido ?>" name="encendido" id="floatingInput" placeholder="Encendido:">
                            <label for="floatingInput">Encendido:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $suspencionTrasera ?>" name="suspencionTrasera" id="floatingInput" placeholder="Suspencion Trasera:">
                            <label for="floatingInput">Suspencion Trasera:</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $suspencionDelantera ?>" name="suspencionDelantera" id="floatingInput" placeholder="Suspencion Delantera:">
                            <label for="floatingInput">Suspencion Delantera:</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $potencia ?>" name="potencia" id="floatingInput" placeholder="Potencia:">
                            <label for="floatingInput">Potencia:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="number" class="form-control" value="<?php echo $velocidadMaxima ?>" name="velocidadMaxima" id="floatingInput" placeholder="Velocidad Maxima:">
                            <label for="floatingInput">Velocidad Maxima:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $cilindrada ?>" name="cilindrada" id="floatingInput" placeholder="Cilindrada:">
                            <label for="floatingInput">Cilindrada:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $refrigeracion ?>" name="refrigeracion" id="floatingInput" placeholder="Refrigeracion:">
                            <label for="floatingInput">Refrigeracion:</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $alimentacion ?>" name="alimentacion" id="floatingInput" placeholder="Alimentacion:">
                            <label for="floatingInput">Alimentacion:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $capacidadCombustible ?>" name="capacidadCombustible" id="floatingInput" placeholder="Capacidad Combustible:">
                            <label for="floatingInput">Capacidad Combustible:</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" value="<?php echo $motor ?>" name="motor" id="floatingInput" placeholder="Motor:">
                            <label for="floatingInput">Motor:</label>
                        </div>
                    </div>
                </div>

                <div class="col text-center mt-2">
                    <button type="submit" name="btnEditarMoto" class="btn btn-lg btn-success w-75"><i class="bi bi-save-fill"></i> Editar</button>
                    <a href="../admin.php" class="btn btn-lg btn-secondary w-50 my-1"><i class="bi bi-arrow-return-left"></i> Atras</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('input[type=text]').forEach( node => node.addEventListener('keypress', e => {
        if(e.keyCode == 13) {
          e.preventDefault();
        }
      }))
    });
  </script>
<?php 

}else{
    header("location:../../../index.php");
    exit;
} ?>