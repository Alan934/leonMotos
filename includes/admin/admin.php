<?php 
    require("../../con_db.php");
    session_start();
    if($_SESSION['ingresoAdmin'] == "Permitido"){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../../imagenes/logito/wrench-adjustable.svg">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador-Leon Motos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <meta name="author" content="Sanjurjo Alan">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/a567a0b05a.js" crossorigin="anonymous"></script>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <header>
        <div class="px-3 py-2 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="../../index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <img class="bi me-2" width="60" height="52" src="../../imagenes/logo/logo2.0.png" alt="Logo Leon Motos">
                <span class="ms-1 fs-3 text-dark">Leon Motos</span>
            </a>

            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                <a href="#motos" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="../../imagenes/logito/motorcycle-solid.svg" alt="Logo Moto">
                    Motocicletas
                </a>
                </li>
                <li>
                <a href="#bicis" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="../../imagenes/logito/bicycle.svg" alt="Logo Moto">
                    Bicicletas
                </a>
                </li>
                <li>
                <a href="../../includes/productos/accesorio.php" class="nav-link text-dark">
                    <img class="bi d-block mx-auto mb-1" width="34" height="34" src="../../imagenes/logito/grid.svg" alt="Logo Moto">
                    Accesorios
                </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </header>

    <div class="container w-75 my-2">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="agregarProductos/agregarMoto.php" class="btn btn-primary my-1"><i class="bi bi-plus-square"></i> Agregar Moto</a>
            </div>
            <div class="col-auto">
                <a href="agregarProductos/agregarBici.php" class="btn btn-primary my-1"><i class="bi bi-plus-square"></i> Agregar Bici</a>
            </div>
            <div class="col-auto">
                <a href="agregarProductos/agregarAccesorio.php" class="btn btn-primary my-1"><i class="bi bi-plus-square"></i> Agregar Accesorio</a>
            </div>
            <div class="col-auto">
                <a href="cerrarSesion.php" class="btn btn-danger my-1"><i class="bi bi-door-closed-fill"></i> Cerrar Sesion</a>
            </div>
        </div>
    </div>

    <main>
        <div id="motos">
            <div class="container bg-dark rounded-5">
                <div class="row">
                    <div class="col m-auto">
                        <p class="text text-center text-white fs-4 pt-2">Motos</p>
                    </div>
                    <div class="col">
                        <form class="my-2 d-flex" role="search" method="GET" action="admin.php">
                            <input type="search" class="form-control" name="buscar" placeholder="Buscar Moto" aria-label="Search">
                            <button class="btn btn-success ms-1" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php 
            $queryMoto = $conex->query("SELECT * FROM moto");
            $mostrarMoto = '10';
            if(isset($_GET['pagina'])){
                $pagina = $_GET['pagina'];
            }else{
                $pagina = 1;
            }
            $empieza = ($pagina-1) * $mostrarMoto;
            if(isset($_GET['buscar'])){
                $consultaMoto = $conex->query("SELECT * FROM moto where busqueda like '%".$_GET['buscar']."%'");
            }else{
                $consultaMoto = $conex->query("SELECT * FROM moto LIMIT $empieza, $mostrarMoto"); } 
            ?>
            <table class="table bg-dark">
                <thead>
                    <tr>
                    <th scope="col" class="text-white border border-white">Codigo</th>
                    <th scope="col" class="text-white border border-white">Marca</th>
                    <th scope="col" class="text-white border border-white">Modelo</th>
                    <th scope="col" class="text-white border border-white">Activo</th>
                    <th scope="col" class="text-white border border-white">Precio</th>
                    <th scope="col" class="text-white border border-white">Acciones</th>
                    </tr>
                </thead>
                <?php while($moto = mysqli_fetch_assoc($consultaMoto)){ ?>
                <tbody>
                    <tr>
                        <th class="text-white border border-white" scope="row"><?php echo $moto['codigo']; ?></th>
                        <td class="text-white border border-white"><?php echo $moto['marca']; ?></td>
                        <td class="text-white border border-white"><?php echo $moto['modelo']; ?></td>
                        <td class="text-white border border-white"><?php echo $moto['activo']; ?></td>
                        <td class="text-white border border-white"><?php echo number_format($moto['precio'], 3, ",", ",");?></td>
                        <td>
                            <a href="editarProductos/editarMoto.php?idMoto=<?php echo $moto['id'] ?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                            <a href="eliminarProducto/eliminarMoto.php?idMoto=<?php echo $moto['id'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                        </td> 
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            <?php 
                $totalRegistros =@mysqli_num_rows($queryMoto);
                $totalPaginas = ceil($totalRegistros/$mostrarMoto);
            ?>
            <nav aria-label="Page navigation example d-flex flex-wrap justify-content-center">
            <ul class="pagination d-flex flex-wrap justify-content-center mt-2 mb-0">
                <li class="page-item"><a class="page-link" href="admin.php?pagina=<?php echo 1;?>">Primera</a></li>
                <li class="page-item"><a class="page-link" href="admin.php?pagina=<?php if($pagina <= 1){echo $totalPaginas;}else{echo ($pagina-1);} ?>">Anterior</a></li>
                <?php 
                for($i=1; $i <= $totalPaginas; $i++){
                    ?> <li class="page-item"><a class="page-link" href="admin.php?pagina=<?php echo "$i";?>"><?php echo "$i" ?></a></li> <?php
                }
                ?>
                <li class="page-item"><a class="page-link" href="admin.php?pagina=<?php if($pagina >= $totalPaginas){echo 1;}else{echo ($pagina+1);} ?>">Siguiente</a></li>
                <li class="page-item"><a class="page-link" href="admin.php?pagina=<?php echo $totalPaginas; ?>">Ultima</a></li>
            </ul>
            </nav>
        </div>

        <!-- BICICLETAS -->
        
        <div id="bicis" class="mt-4">
            <div class="container bg-dark rounded-5">
                <div class="row">
                    <div class="col m-auto">
                        <p class="text text-center text-white fs-4 pt-2">Bicicletas</p>
                    </div>
                    <div class="col">
                        <form class="my-2 d-flex" role="search" method="GET" action="admin.php">
                            <input type="search" class="form-control" name="buscar" placeholder="Buscar Bicicleta" aria-label="Search">
                            <button class="btn btn-success ms-1" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php 
            $queryMoto = $conex->query("SELECT * FROM moto");
            $mostrarMoto = '10';
            if(isset($_GET['pagina'])){
                $pagina = $_GET['pagina'];
            }else{
                $pagina = 1;
            }
            $empieza = ($pagina-1) * $mostrarMoto;
            if(isset($_GET['buscar'])){
                $consultaMoto = $conex->query("SELECT * FROM moto where busqueda like '%".$_GET['buscar']."%'");
            }else{
                $consultaMoto = $conex->query("SELECT * FROM moto LIMIT $empieza, $mostrarMoto"); } 
            ?>
            <table class="table bg-dark">
                <thead>
                    <tr>
                    <th scope="col" class="text-white border border-white">Codigo</th>
                    <th scope="col" class="text-white border border-white">Marca</th>
                    <th scope="col" class="text-white border border-white">Modelo</th>
                    <th scope="col" class="text-white border border-white">Activo</th>
                    <th scope="col" class="text-white border border-white">Precio</th>
                    <th scope="col" class="text-white border border-white">Acciones</th>
                    </tr>
                </thead>
                <?php while($moto = mysqli_fetch_assoc($consultaMoto)){ ?>
                <tbody>
                    <tr>
                        <th class="text-white border border-white" scope="row"><?php echo $moto['codigo']; ?></th>
                        <td class="text-white border border-white"><?php echo $moto['marca']; ?></td>
                        <td class="text-white border border-white"><?php echo $moto['modelo']; ?></td>
                        <td class="text-white border border-white"><?php echo $moto['activo']; ?></td>
                        <td class="text-white border border-white"><?php echo number_format($moto['precio'], 3, ",", ",");?></td>
                        <td>
                            <a href="editarProductos/editarMoto.php?idMoto=<?php echo $moto['id'] ?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                            <a href="eliminarProducto/eliminarMoto.php?idMoto=<?php echo $moto['id'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                        </td> 
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            <?php 
                $totalRegistros =@mysqli_num_rows($queryMoto);
                $totalPaginas = ceil($totalRegistros/$mostrarMoto);
            ?>
            <nav aria-label="Page navigation example d-flex flex-wrap justify-content-center">
            <ul class="pagination d-flex flex-wrap justify-content-center mt-2 mb-0">
                <li class="page-item"><a class="page-link" href="admin.php?pagina=<?php echo 1;?>">Primera</a></li>
                <li class="page-item"><a class="page-link" href="admin.php?pagina=<?php if($pagina <= 1){echo $totalPaginas;}else{echo ($pagina-1);} ?>">Anterior</a></li>
                <?php 
                for($i=1; $i <= $totalPaginas; $i++){
                    ?> <li class="page-item"><a class="page-link" href="admin.php?pagina=<?php echo "$i";?>"><?php echo "$i" ?></a></li> <?php
                }
                ?>
                <li class="page-item"><a class="page-link" href="admin.php?pagina=<?php if($pagina >= $totalPaginas){echo 1;}else{echo ($pagina+1);} ?>">Siguiente</a></li>
                <li class="page-item"><a class="page-link" href="admin.php?pagina=<?php echo $totalPaginas; ?>">Ultima</a></li>
            </ul>
            </nav>
        </div>
    </main>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="../../index.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
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

<script>
    let editarMoto = document.getElementById('modalEditarMoto')
    let eliminaMoto = document.getElementById('modalEdliminarMoto')
    editarMoto.addEventListener('shown.bs.modal', event => {
        let button = event.relatedTarget
        let id = button.getAttribute('data-bs-id')

        let motoid = editarMoto.querySelector('.modal-body #id')
        let motomarca = editarMoto.querySelector('.modal-body #marca')
        let motomodelo = editarMoto.querySelector('.modal-body #modelo')
        let motoprecio = editarMoto.querySelector('.modal-body #precio')
        let motocodigo = editarMoto.querySelector('.modal-body #codigo')
        let motodescripcion = editarMoto.querySelector('.modal-body #descripcion')
        let motoprecioAnterior = editarMoto.querySelector('.modal-body #precioAnterior')
        let motoactivo = editarMoto.querySelector('.modal-body #activo')
        let motobusqueda = editarMoto.querySelector('.modal-body #busqueda')
        let motollantas = editarMoto.querySelector('.modal-body #llantas')
        let motopeso = editarMoto.querySelector('.modal-body #peso')
        let motocolor = editarMoto.querySelector('.modal-body #color')
        let mototransmision = editarMoto.querySelector('.modal-body #transmision')

        let url = "editarProductos/getmoto.php"
        let formData = new FormData()
        formData.append('id', id)

        fetch(url,{
            method: "POST",
            body: formData
        }).then(response => response.json())
        .then(data =>{
            motoid.value = data.id
            motomarca.value = data.marca
            motomodelo.value = data.modelo
            motoprecio.value = data.precio
            motocodigo.value = data.codigo
            motodescripcion.value = data.descripcion
            motoprecioAnterior.value = data.precioAnterior
            motoactivo.value = data.activo
            motobusqueda.value = data.busqueda
            motollantas.value = data.llantas
            motopeso.value = data.peso
            motocolor.value = data.color
            mototransmision.value = data.transmision
        }).catch(err => console.log(err))

    })

    eliminaMoto.addEventListener('shown.bs.modal', event =>{
        let button = event.relatedTarget
        let id = button.getAttribute('data-bs-id')
        eliminaMoto.querySelector('.modal-footer $id').value = id
    })
</script>

</html>
<?php 

}else{
    header("location:../../index.php");
    exit;
} ?>