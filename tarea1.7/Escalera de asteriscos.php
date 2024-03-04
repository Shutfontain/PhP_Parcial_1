<html>

    <head>
    </head>

    <body>
        <h1>Escalera de asteriscos</h1>
        <form action="Escalera de asteriscos.php" method="post">
            <input type="text" name="Entrada1"> <br>
            <input type="submit" value="Enviar"><br>
        </form>

        <?php
            if($_POST)
            {

                $a=$_POST["Entrada1"];
                for($i=1; $i<=$a; $i++)
                {
                    for($k=1; $k<=$i; $k++)
                    {
                        echo "# ";
                    }
                    echo "<br>";
                }
            }

        ?>
        <a href="INICIO1.7.php">VOLVER</a>
    </body>
</html>