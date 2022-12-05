<?php 
require("../../con_db.php");
session_start(); ?>
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
    <title>Login-Leon Motos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <meta name="author" content="Sanjurjo Alan">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/a567a0b05a.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <main>
        <br><br><br><br>
        <div class="containter w-75 m-auto">
            <h1 class="h3 mb-3 text-center fw-bold text-warning fs-1">REGISTRO DE SESION</h1>

            <form action="registro.php" method="POST">
                <div class="form-floating my-1">
                    <input type="text" class="form-control" name="usuario" id="floatingInput" placeholder="Usuario:" require>
                    <label for="floatingInput">Usuario:</label>
                </div>
                <div class="form-floating my-1">
                    <input type="password" class="form-control" name="contrasena" id="floatingInput" placeholder="Contraseña:" require>
                    <label for="floatingInput">Contraseña:</label>
                </div>
                <div class="text-center mt-2">
                    <button type="submit" name="btnRegistro" class="btn btn-lg btn-success w-75"><i class="bi bi-door-open-fill"></i> Registrar</button>
                    <a href="../../index.php" class="btn btn-lg btn-secondary w-50 my-1"><i class="bi bi-arrow-return-left"></i> Atras</a>
                </div>
            </form>
        </div>
        </div>
    </main>

</body>
</html>

<?php /*
    if(isset($_POST['btnRegistro'])){

            $usuario = "LeonMotos"; $contrasena = "Saturday3465";
            $contraFuerte = password_hash($contrasena, PASSWORD_BCRYPT);
            $consulta = "INSERT INTO registro(nombre, contrasena) VALUES ('$usuario', '$contraFuerte')";
            $resultado = mysqli_query($conex, $consulta);
        
    }*/

?>