<?php
echo "<h1>Evaluando Una Función Rara</h1>";
    function f($x)
    {
        if($x<=0)
        {
            return $x*$x-$x;
        }
        else
        {
            return -1*($x*$x)+3*$x;
        }
    }
    if($_POST)
    {
        $x=$_POST['x'];
        echo "La respuesta es= ",f($x);
    }
?>
<html>
    <head></head>
    <body>
        <br>
        <a href="jijija.php">volver</a>
    </body>
</html>
