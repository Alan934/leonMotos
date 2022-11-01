<?php 
    if(isset($_POST['btnAgregarMoto'])){
        if(isset($_FILES['imgMoto']['name'])){
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
                if(move_uploaded_file($_FILES['imgMoto']['tmp_name'], '../../imagenes/productos/moto/'.$_FILES['imgMoto']['name'])){
                    $query = $conex->query("INSERT INTO moto(marca, url, precio, modelo, codigo, descripcion, precioAnterior, activo, busqueda, llantas, peso, color, transmision) VALUES ('".$marca."', '".$url."', '".$precio."', '".$modelo."', '".$codigo."', '".$descripcion."', '".$precioAnterior."', '".$activo."', '".$busqueda."', '".$llantas."', '".$peso."', '".$color."', '".$transmision."')");
                }
            }
        }
    }
?>