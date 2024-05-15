<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba sobre contraseñas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1>Acceder</h1>
        <!-- echo por: Oseguera-->
        <br>
        <div class ="jijija">
        <form action="Acceso.php" method = "POST">
        <table border = "1">

            <tr>
                <td>Usuario</td>
                <td> <input type="text" name = "Usuario"> </td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td> <input type="text" name = "Contraseña"> </td>
            </tr>

            <tr>
                <td><input type="submit" name = "Enviar"></td>
            </tr>
            <tr>
                <td>
                    <a href="Landing_page.php">Volver</a>
                </td>
            </tr>
        </table>
        </form>

        <?php
        if($_POST)
        {
            $conexion = mysqli_connect('localhost','root','','CRUD_ALUMNOS','3306');
            $hhm1 = $_POST["Usuario"];
            $hhm2 = $_POST["Contraseña"];
            
            $consulta = "select * from usuarios where login = '$hhm1' and password = SHA1('$hhm2');";
            $resultado = mysqli_query($conexion, $consulta);

            if($mostrar = mysqli_fetch_array($resultado))
            {
                header("Location: inicio.php");
                exit;
            }
            else
            {
                echo "<h1>Contraseña incorrecta</h1> ";
            }
            mysqli_close($conexion);
        }
        ?>
        </div>
</body>
</html>