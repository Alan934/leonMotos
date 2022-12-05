<?php session_start();ob_start();
if($_SESSION['ingresoAdmin'] == "Permitido"){

require("../../../con_db.php");

if(isset($_GET['idMoto'])){
    $id = $_GET['idMoto'];
    $consultaMoto = $conex->query("SELECT * FROM moto WHERE id = $id LIMIT 1");
    $moto = mysqli_fetch_assoc($consultaMoto);
    $query = "DELETE FROM moto WHERE id = $id";
    $resultado = mysqli_query($conex, $query);
    if($resultado){
        $ruta = "../../../".$moto['url'];
        $ruta1 = "../../../".$moto['url1'];
        $ruta2 = "../../../".$moto['url2'];
        $ruta3 = "../../../".$moto['url3'];
        unlink($ruta);
        unlink($ruta1);
        unlink($ruta2);
        unlink($ruta3);
    }
    if(!$resultado){
        die("Fallo al Eliminar");
        $_SESSION['mensajeAdmin'] = '!FALLO AL ELIMINAR MOTOCICLETA¡';
        $_SESSION['mensajeColorAdmin'] = 'danger';
    }
    $_SESSION['mensajeAdmin'] = '!Motocicleta Eliminada Correctamente¡';
    $_SESSION['mensajeColorAdmin'] = 'success';
    header("location: ../admin.php");
}

?>

<?php 

}else{
    header("location:../../../index.php");
    exit;
} ?>