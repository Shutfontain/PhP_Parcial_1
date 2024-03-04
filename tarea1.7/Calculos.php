<html>

    <head>
    </head>

    <body>
        <h1>Cálculos condicionales</h1>
        <form action="Calculos.php" method="post">
            <input type="text" name="Entrada1"> <br>
            <input type="submit" value="Enviar"><br>
        </form>

        <?php
            if($_POST)
            {
                $N_Operaciones=0;
                $a=$_POST["Entrada1"];
                if($a%2==0)
                {
                    $N_Operaciones++;
                    $a=$a/2;
                }
                else{
                    $N_Operaciones++;
                    $a++;
                }
                if($a>=100)
                {
                    $N_Operaciones++;
                    $a=$a/100;
                }
                else if($a>=20 && $a<=99.9999)
                {
                    $N_Operaciones++;
                }
                if($a%3==0)
                {
                    $N_Operaciones++;
                    $a--;
                }
                echo $a," ",$N_Operaciones;
            }

        ?>
        <a href="INICIO1.7.php">VOLVER</a>
    </body>
</html>