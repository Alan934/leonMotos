<?php
require("../../../con_db.php");

if(isset($_GET['idMoto'])){
    $id = $_GET['idMoto'];
    $query = "DELETE FROM moto WHERE id = $id";
    $resultado = mysqli_query($conex, $query);

    if(!$resultado){
        die("Fallo al Eliminar");
    }
    header("location: ../admin.php");
}