<html>
    <head>
    </head>

    <body>
        <h1>El lado mas corto</h1>
        <form action="El lado más corto.php" method="post">
            <input type="text" name="Entradax1"> <br>
            <input type="text" name="Entraday1"> <br>
            <input type="text" name="Entradax2"> <br>
            <input type="text" name="Entraday2"> <br>
            <input type="text" name="Entradax3"> <br>
            <input type="text" name="Entraday3"> <br>
            <input type="text" name="Entradax4"> <br>
            <input type="text" name="Entraday4"> <br>
            <input type="submit" value="Enviar"><br>
        </form>

        <?php
            if($_POST)
            {
                $x1=$_POST['Entradax1'];$y1=$_POST['Entraday1'];
                $x2=$_POST['Entradax2'];$y2=$_POST['Entraday2'];
                $y3=$_POST['Entradax3'];$x3=$_POST['Entraday3'];
                $y4=$_POST['Entradax4'];$x4=$_POST['Entraday4'];
                $D1 = sqrt((pow($x2-$x1,2))+(pow($y2-$y1,2)));
                $D2 = sqrt((pow($x3-$x2,2))+(pow($y3-$y2,2)));
                $D3 = sqrt((pow($x4-$x3,2))+(pow($y4-$y3,2)));
                $D4 = sqrt((pow($x4-$x1,2))+(pow($y4-$y1,2)));
                if($D1<$D2 && $D1<$D3 && $D1<$D4){
                  echo $D1;
                }
                else if ($D2<$D3 && $D2<$D4){
                    echo $D2;
                }
                else if ($D3<$D4){
                    echo $D3;
                }
                else
                {
                    echo $D4;
                }
            }

        ?>
        <a href="INICIO1.7.php">VOLVER</a>
    </body>
</html>