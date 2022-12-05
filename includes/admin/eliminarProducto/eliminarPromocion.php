<?php session_start();ob_start();
if($_SESSION['ingresoAdmin'] == "Permitido"){
require("../../../con_db.php");

if(isset($_GET['idPromocion'])){
    $id = $_GET['idPromocion'];
    $consultaPromocion = $conex->query("SELECT * FROM promocion WHERE id = $id LIMIT 1");
    $promocion = mysqli_fetch_assoc($consultaPromocion);
    $query = "DELETE FROM promocion WHERE id = $id";
    $resultado = mysqli_query($conex, $query);
    if($resultado){
        $ruta = "../../../".$promocion['url'];
        unlink($ruta);
    }
    if(!$resultado){
        die("Fallo al Eliminar");
        $_SESSION['mensajeAdmin'] = '!FALLO AL ELIMINAR PROMOCION¡';
        $_SESSION['mensajeColorAdmin'] = 'danger';
    }
    $_SESSION['mensajeAdmin'] = '!Promocion Eliminada Correctamente¡';
    $_SESSION['mensajeColorAdmin'] = 'success';
    header("location: ../admin.php");
}

?>
<?php 

}else{
    header("location:../../../index.php");
    exit;
} ?>