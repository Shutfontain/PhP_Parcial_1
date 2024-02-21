<html>
    <head>
        <link rel="stylesheet" href="EstilosGuard.css">
    </head>
    <body>
        <div class="barra"></div>
        <br>
        <br>
        <br>
        <br>
        <h1>5630.Colegiatura</h1>
        <table border="1" cellspacing="0" cellpadding="8">
            <tr>
                <td>Puntos</td>
                <td>11.64</td>
                <td>Limite de memoria</td>
                <td>32 MiB</td>
            </tr>
            <tr>
                <td>Límite de tiempo (caso)</td>
                <td>1s</td>
                <td>Límite de tiempo (total)</td>
                <td>1m0s</td>
            </tr>
            <tr>
                <td>Tamaño límite de entrada (bytes)</td>
                <td>10 KiB</td>
            </tr>
        </table>
        <div class="mjm">
        <h3>Descripción</h3>
            <p>La mamá de Esteban quiere inscribirlo en la 
                mejor preparatoria de Cuernavaca, pero le 
                preocupa cuanto vaya a pagar, y te pide ayuda 
                para que hagas un programa que le diga cuanto 
                tenga que pagar. El esquema que 
                maneja la prepa es este:
            </p>
        <h5>Plan de pagos:</h5>
        <ul>
            <li>
                La colegiatura de los alumnos se 
                determina según el numero de 
                materias que cursan. El costo de 
                cada una de las materias es de 
                $1600.
            </li>
            <li>
                Se ha establecido un programa para 
                estimular a los alumnos, el cual 
                consiste en lo siguiente: si el 
                promedio obtenido por un alumno en el 
                ultimo periodo es mayor o igual que 
                9, se le hará un descuento del 30% 
                sobre la colegiatura y no se le 
                cobrara IVA; si el promedio obtenido 
                es menor que 9 deberá pagar la 
                colegiatura completa, mas el IVA del 
                16%.
            </li>
        </ul>
        <h3>Entrada</h3>
        <p>
            El numero de materias que Esteban va 
            a cursar. Y un numero con decimales 
            que es el promedio de Esteban.
        </p>
        <h3>Salida</h3>
        <p>
            Un numero entero C con el precio a 
            pagar. Debe de ir con un $.
        </p>
        <h3>Ejemplo</h3>
        <h4>Entrada    Salida</h4>
        <table border="1" cellspacing="0">
            <tr>
                <?php
                    $NDM=5;
                    $PROM=9.6;
                    $PAGO=$NDM*1600;
                ?>
                <td><?php echo $NDM, " ", $PROM?></td>
                <td> 
                    <?php
                    if($PROM>=9)
                    {
                        $DES = ($PAGO*30)/100;
                        $PAGO = $PAGO-$DES;
                        echo $PAGO;
                    }
                    else
                    {
                        $IVA=$PAGO*16/100;
                        $PAGO=$PAGO+$IVA;
                        echo $PAGO;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <?php
                    $NDM=8;
                    $PROM=7.8;
                    $PAGO=$NDM*1600;
                ?>
                <td><?php echo $NDM, " ", $PROM?></td>
                <td> 
                    <?php
                    if($PROM>=9)
                    {
                        $DES = ($PAGO*30)/100;
                        $PAGO = $PAGO-$DES;
                        echo $PAGO;
                    }
                    else
                    {
                        $IVA=$PAGO*16/100;
                        $PAGO=$PAGO+$IVA;
                        echo $PAGO;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <?php
                    $NDM=2;
                    $PROM=8;
                    $PAGO=$NDM*1600;
                ?>
                <td><?php echo $NDM, " ", $PROM?></td>
                <td> 
                    <?php
                    if($PROM>=9)
                    {
                        $DES = ($PAGO*30)/100;
                        $PAGO = $PAGO-$DES;
                        echo $PAGO;
                    }
                    else
                    {
                        $IVA=$PAGO*16/100;
                        $PAGO=$PAGO+$IVA;
                        echo $PAGO;
                    }
                    ?>
                </td>
            </tr>
        </table>
        </div>
    </body>
</html>