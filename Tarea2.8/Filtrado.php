<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrado por ID</title>
</head>
<body>
    <h1>Listado de ciudades</h1>
    <form action="FiltradoPorID.php" method = "POST">
        <table border = "1">
            <tr>
                <td>Código del pais</td>
                <td> <input type="text" name = "name"> </td>
            </tr>
            <tr><td><input type="submit" name = "Filtrar"></td></tr>
        </table>
    </form>

    <?php

        if($_POST)
        {
        $list = $_POST["name"];
        $conexion = mysqli_connect('localhost','root','','world','3306');

        $consulta = "select * from city where CountryCode like '$list'";

        $resultado = mysqli_query($conexion,$consulta);
        echo "<table border = 1>";
        while($dato = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>" ,$dato['ID'] ,"</td>";
            echo "<td>",$dato['Name'],"</td>";
            echo "<td>" ,$dato['CountryCode'], "</td>";
            echo "<td>",$dato['District'], "</td>";
            echo "<td> ",$dato['Population'],"</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>


</body>
</html>
