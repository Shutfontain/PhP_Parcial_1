<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba sobre contraseñas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1>Registro</h1>   
        <!-- echo por: Jose Miguel-->
        <br>
        <div class ="jijija">
        <form action="Registro.php" method = "POST">
        <table border = "1">
            <tr>
                <td colspan="1">Usuario</td>
                <td colspan="3"> <input type="text" name = "Usuario"> </td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td> <input type="text" name = "Contraseña"> </td>
                <td>Confirmar contraseña</td>
                <td> <input type="text" name = "Contraseña1"> </td>
            </tr>
            <tr>
                <td colspan="1">Correo</td>
                <td colspan="3"> <input type="text" name = "Correo"> </td>
            </tr>
            <tr>
                <td colspan="1">Nombre</td>
                <td colspan="3"> <input type="text" name = "Nombre"> </td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td> <a href="Landing_page.php">Volver</a></td>
                <td colspan="2"><input type="submit" name = "Enviar"></td>
            </tr>
        </table>
        </form>
        <h1></h1>
        <?php
        if($_POST)
        {
            $conexion = mysqli_connect('localhost','root','','CRUD_ALUMNOS','3306');
            $hhm1 = $_POST["Usuario"];
            $hhm2 = $_POST["Contraseña"];
            $rep =  $_POST["Contraseña1"];
            $hhm3 = $_POST["Correo"];
            $hhm4 = $_POST["Nombre"];
            if($hhm2 != $rep)
            {
                echo "<h1>Rescribe bien tu contraseña wey</h1>";
            }
            else
            {
                $consulta = "insert into usuarios() values('$hhm4', '$hhm1', SHA1('$hhm2'), '$hhm3' );";
                $resultado = mysqli_query($conexion, $consulta);

                mysqli_close($conexion);
            }
        }
        ?>
        </div>
</body>
</html>