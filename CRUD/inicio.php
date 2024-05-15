<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Tabla de alumnos</h1>
    <!--Echo por: Oseguera-->
    <div class= "yuij">
        <br>
        <br>
        <div class ="jhj">
            <table border="1" cellspacing = 0 class="tabla-adornada">
                <tr>
                    <td> <a href="Insertar.php">Nuevo alumno</a> </td>
                    <td> <a href="Borrar.php">Borrar</a> </td>
                    <td> <a href="Actualizar.php">Actualizar</a> </td>
                </tr>
                <tr>
                    <td colspan="3"><a href="Landing_Page.php">cerrar sesión</a></td>
                </tr>
            </table>
        </div>
        <br>
        <br>
    </div>
    <div class ="jijija">
    <?php
        //crear nuevo, borrar actualizar
        //Paso 1: Conectarse a un servidor y una base de datos
        $conexion = mysqli_connect('localhost','root','','CRUD_ALUMNOS','3306');

        //Paso 2: Realizar la accion(Insert,Update ETC...).
        $consulta = "select * from Alumnos;";
        $resultado = mysqli_query($conexion, $consulta);

        //paso 3: Tomas los datos de la tabla

        //Matricula, Apellidos, Nombre,Nacimiento,Direccion,telefono,correo,Padre_Tutor
    echo "<table border = 1 cellspacing = 0> ";
    echo "
        <tr class = 'iyu'> 
            <td > Matricula </td>
            <td> Apellidos </td>
            <td> Nombre </td>
            <td> Nacimiento </td>
            <td> Direccion </td>
            <td> telefono </td>
            <td> correo </td>
            <td> Padre_Tutor </td>
            </tr>";
            while( $mostrar = mysqli_fetch_array($resultado) )
            {
                echo "<tr>";
                    echo "<td>";
                    echo $mostrar['Matricula'] . "\n";
                    echo "</td>";
                    echo "<td>";
                    echo $mostrar['Apellidos'] . "\n";
                    echo "</td>";
                    echo "<td>";
                    echo $mostrar['Nombre'] . "\n";
                    echo "</td>";
                    echo "<td>";
                    echo $mostrar['Nacimiento'] . "\n";
                    echo "</td>";
                    echo "<td>";
                    echo $mostrar['Direccion'] . "\n";
                    echo "</td>";
                    echo "<td>";
                    echo $mostrar['telefono'] . "\n";
                    echo "</td>";
                    echo "<td>";
                    echo $mostrar['correo'] . "\n";
                    echo "</td>";
                    echo "<td>";
                    echo $mostrar['Padre_Tutor'] . "\n";
                    echo "</td>";
                echo "</tr>";  
                }

        echo "</table>";
    ?>
    </div>
</body>
</html>