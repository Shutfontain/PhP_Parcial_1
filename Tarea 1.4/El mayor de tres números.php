<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <div class="barra"><!--------->
    </div><!--------->
    <br>
    <br>
    <br>
    <br>
    <h1>7341. El mayor de tres números</h1>
    <table border="1" cellspacing="0" 
    cellpadding = "8" class="jj">
        <tr>
            <td><h5>Puntos</h5></td>
            <td>10.13</td>
            <td><h5>Limite de memoria</h5></td>
            <td>32 MiB</td>
        </tr>
        <tr>
            <td><h5>Limite de tiempo (caso)</h5></td>
            <td>1s</td>
            <td><h5>Limite de tiempo (total)</h5></td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td><h5>Tamaño límite de entrada (bytes)</h5></td>
            <td>10 KiB</td>
        </tr>
    </table>

    <div class="mm">

    <h2>Descripción</h2>
    <p>
        Realiza un problema que 
        imprima el mayor de tres 
        números.
    </p>
    
    <h2>Entrada</h2>
    <p>
        Escribe tres números enteros a, b, c.
    </p>
    <h2>Salida</h2>
    <p>
        El número entero mayor de los 
        tres números introducidos.
    </p>
    <h2 class="jijija">Ejemplo</h2>
    <h3>Entrada  .   Salida</h3>

    <table border="1" cellspacing="0" 
    cellpadding = "8" class="UwU">
        <tr>
            <?php
                function Calculo( $a, $b, $c )
                {
                    if($a>$b && $a>$c)
                            {
                                return $a;
                            }
                            else if($c>$b && $c>$a)
                            {
                                return $c;
                            }
                            else if($b>$c && $b>$a)
                            {
                                return $b;
                            }
                            else if($a==$b && $a==$c)
                            {
                                return $a;
                            }
                            else if($a<$b && $a<$c && $b==$c)
                            {
                                return $b;
                            }
                            else if($b<$a && $b<$c && $a==$c)
                            {  
                                return $a;
                            }
                            else if($c<$a && $c<$b && $b==$a)
                            {
                                return $b;
                            }
                }

                $a=10;
                $b=8;
                $c=-7;
                $res=Calculo($a,$b,$c);
            ?>
            <td><?php echo $a, " " ,$b, " ", $c;?></td>
            <td><?php echo $res;?></td>
        </tr>

        <tr>
            <?php
                $a=10;
                $b=81;
                $c=101;
                $res=Calculo($a,$b,$c);
            ?>
            <td><?php echo $a, " " ,$b, " ", $c;?></td>
            <td><?php echo $res;?></td>
        </tr>

        <tr>
            <?php
                $a=11;
                $b=11;
                $c=11;
                $res=Calculo($a,$b,$c);
            ?>
            <td><?php echo $a, " " ,$b, " ", $c;?></td>
            <td><?php echo $res;?></td>
        </tr>

        <tr>
            <?php
                $a=10;
                $b=810;
                $c=101;
                $res=Calculo($a,$b,$c);
            ?>
            <td><?php echo $a, " " ,$b, " ", $c;?></td>
            <td><?php echo $res;?></td>
        </tr>

    </table>
    <p>
        Fuente: Propio  <br>
        Subido por:  Juan Carlos Lopez Pimentel (jclopezpimentel)
        Problema subido en: 26/9/2018
    </p>
    
        
    <?php ?>

    <u>
        <li><a href="Inicio.php">Inicio</a></li>
        <li><a href="Estaciones del Año.php">Estaciones del año</a></li>
        <li><a href="Cuántos valen 7.php">Cuántos valen 7</a></li>
    </u>

    </div>
</body>
</html>
