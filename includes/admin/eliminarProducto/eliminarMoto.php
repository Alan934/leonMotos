<?php
require("../../../con_db.php");

if(isset($_GET['idMoto'])){
    $id = $_GET['idMoto'];
    $consultaMoto = $conex->query("SELECT * FROM moto WHERE id = $id LIMIT 1");
    $moto = mysqli_fetch_assoc($consultaMoto);
    $query = "DELETE FROM moto WHERE id = $id";
    $resultado = mysqli_query($conex, $query);
    if($resultado){
        $ruta = "../../../".$moto['url'];
        unlink($ruta);
    }
    if(!$resultado){
        die("Fallo al Eliminar");
    }
    header("location: ../admin.php");
}

?>