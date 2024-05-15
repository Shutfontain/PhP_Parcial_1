<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba sobre contraseñas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1>Insertar alumno</h1>   
        <!--Echo por: Jose Miguel-->
        <br>
        <div class ="jijija">
        <form action="Insertar.php" method = "POST">
        <table border = "1">
            <tr>
                <td colspan="1">Matricula</td>
                <td colspan="3"> <input type="text" name = "Matricula"> </td>
                <td colspan="1">Apellidos</td>
                <td colspan="3"> <input type="text" name = "Apellidos"> </td>
            </tr>
            <tr>
                <td colspan="1">Nombre</td>
                <td colspan="3"> <input type="text" name = "Nombre"> </td>
                <td colspan="1">Nacimiento</td>
                <td colspan="3"> <input type="text" name = "Nacimiento"> </td>
            </tr>
            <tr>
                <td colspan="1">Direccion</td>
                <td colspan="3"> <input type="text" name = "Direccion"> </td>
                <td colspan="1">telefono</td>
                <td colspan="3"> <input type="text" name = "Telefono"> </td>
            </tr>
            <tr>
                <td colspan="1">correo</td>
                <td colspan="3"> <input type="text" name = "Correo"> </td>
                <td colspan="1">Padre_Tutor</td>
                <td colspan="3"> <input type="text" name = "Padre"> </td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td> <a href="inicio.php">Volver</a></td>
                <td colspan="2"><input type="submit" name = "Enviar"></td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
        </table>
        </form>
        <h1></h1>
        <?php
        if($_POST)
        {
            $conexion = mysqli_connect('localhost','root','','CRUD_ALUMNOS','3306');

            $h1 = $_POST["Matricula"];
            $h2 = $_POST["Apellidos"];
            $h3 = $_POST["Nombre"];
            $h4 = $_POST["Nacimiento"];
            $h5 = $_POST["Direccion"];
            $h6 = $_POST["Telefono"];
            $h7 = $_POST["Correo"];
            $h8 = $_POST["Padre"];

            $consulta = "insert into Alumnos() values( $h1, '$h2', '$h3','$h4','$h5','$h6','$h7','$h8');";
            $resultado = mysqli_query($conexion, $consulta);

            mysqli_close($conexion);
        }
        ?>
        <br><br>
        </div>
</body>
</html>