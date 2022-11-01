<?php 
    if(isset($_POST['btnEditarMoto'])){
        $id = $_POST['id'];
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
        $query = ("UPDATE moto SET marca = '$marca', url ='$url', precio = '$precio', modelo = '$modelo', codigo = '$codigo', descripcion = '$descripcion', precioAnterior = '$precioAnterior', activo = '$activo', busqueda = '$busqueda', llantas = '$llantas', peso = '$peso', color = '$color', transmision = '$transmision' WHERE codigo=$codigo");
    }
?>