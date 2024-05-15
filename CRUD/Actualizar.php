<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba sobre contraseñas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1>Actualizar por Matricula</h1>
        <!--Echo por: Oseguera-->
        <br>
        
        <div class ="jijija">
        <form action="Actualizar.php" method = "POST">
        <table border = "1">

            <tr>
                <td>Matricula</td>
                <td> <input type="text" name = "m1"> </td>
                <td>Direccion</td>
                <td> <input type="text" name = "m2"> </td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td> <input type="text" name = "m3"> </td>
                <td>Telefono</td>
                <td> <input type="text" name = "m4"> </td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td> <input type="text" name = "m5"> </td>
                <td>Matricula</td>
                <td> <input type="text" name = "m6"> </td>
            </tr>
            <tr>
                <td>Nacimiento</td>
                <td> <input type="text" name = "m7"> </td>
                <td>Matricula</td>
                <td> <input type="text" name = "m8"> </td>
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
            $h1=$_POST["m1"];
            $h2=$_POST["m2"];
            $h3=$_POST["m3"];
            $h4=$_POST["m4"];
            $h5=$_POST["m5"];
            $h6=$_POST["m6"];
            $h7=$_POST["m7"];
            $h8=$_POST["m8"];
            $conexion = mysqli_connect('localhost','root','','CRUD_ALUMNOS','3306');
            
            $consulta = " update alumnos set Apellidos = '$h2', Nombre = '$h3',
                         Nacimiento = '$h4',Direccion = '$h5',
                         telefono = '$h6', correo = '$h7', Padre_Tutor = '$h8'
                         where Matricula = $h1;" ;

            $resultado = mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }
        ?>
        </div>
</body>
</html>