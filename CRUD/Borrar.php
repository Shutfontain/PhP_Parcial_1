<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba sobre contraseñas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1>Borrar</h1>
        <!--Echo por: Oseguera-->
        <br>
        
        <div class ="jijija">
        <form action="Borrar.php" method = "POST">
        <table border = "1">

            <tr>
                <td>Matricula</td>
                <td> <input type="text" name = "Usuario"> </td>
            </tr>

            <tr>
                <td><input type="submit" name = "Enviar"></td>
            </tr>
            <tr>
                <td>
                    <a href="inicio.php">Volver</a>
                </td>
            </tr>
        </table>
        </form>
    
        <?php
        if($_POST)
        {
            $conexion = mysqli_connect('localhost','root','','CRUD_ALUMNOS','3306');
            $hhm1 = $_POST["Usuario"];
            
            $consulta = "delete from alumnos where Matricula = $hhm1;";
            $resultado = mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }
        ?>
        </div>
</body>
</html>