<html>

    <head>
    </head>

    <body>
        <h1>Fomulota</h1>
        <form action="Formulota.php" method="post">
            <input type="text" name="Entrada1"> <br>
            <input type="text" name="Entrada2"> <br>
            <input type="text" name="Entrada3"> <br>
            <input type="submit" value="Enviar"><br>
        </form>

        <?php
            if($_POST)
            {
                $x=$_POST["Entrada1"];
                $y=$_POST["Entrada1"];
                $z=$_POST["Entrada1"];
                $HAMLIM=((($x+$y)/(2*$x))+(($x*$x*$x+$y*$y*$y)/($x*$x+$y*$y)))/($x*$x+$y*$y+$z*$z);
                echo $HAMLIM;
            }

        ?>
        <a href="INICIO1.7.php">VOLVER</a>
    </body>
</html>