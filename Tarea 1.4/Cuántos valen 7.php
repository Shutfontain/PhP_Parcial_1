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
    <h1>7294. ¿Cuántos valen 7?</h1>
    <table border="1" cellspacing="0" 
    cellpadding = "8" class="jj">
        <tr>
            <td><h5>Puntos</h5></td>
            <td>10.18</td>
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
    <p>Escribe un programa que 
        lea dos enteros e 
        imprima cuántos de ellos 
        valen 7.
    </p>
    
    <h2>Entrada</h2>
    <p>
        Dos enteros en el rango de -1000 a +1000.
    </p>
    <h2>Salida</h2>
    <p>
        La cantidad de enteros 
        iguales a 7.
    </p>
    <h2 class="jijija">Ejemplo</h2>
    <h3>Entrada  .   Salida</h3>

    <table border="1" cellspacing="0" 
    cellpadding = "8" class="UwU">
        <tr>
            <?php
                function Calculo( $b, $a )
                {
                    $cont=0;
                    if($a==7)
                    {
                        $cont++;
                    }
                    if($b==7)
                    {
                        $cont++;
                    }
                    return $cont;
                }
                $a=-3;
                $b=8;
                $res=Calculo($a,$b);
            ?>
            <td><?php echo $a, " " ,$b;?></td>
            <td><?php echo $res;?></td>
        </tr>

        <tr>
            <?php
                $a=7;
                $b=57;
                $res=Calculo($a,$b);
            ?>
            <td><?php echo $a, " " ,$b;?></td>
            <td><?php echo $res;?></td>
        </tr>

        <tr>
            <?php
                $a=62;
                $b=7;
                $res=Calculo($a,$b);
            ?>
            <td><?php echo $a, " " ,$b;?></td>
            <td><?php echo $res;?></td>
        </tr>

        <tr>
            <?php
                $a=7;
                $b=7;
                $res=Calculo($a,$b);
            ?>
            <td><?php echo $a, " " ,$b;?></td>
            <td><?php echo $res;?></td>
        </tr>

    </table>
    <p>
        Fuente: UAM Azcapotzalco 2018  <br>
        Subido por: Subido por: rcc (rcc)
        Problema subido en: 8/9/2018
    </p>
    
        
    <?php ?>

    <u>
        <li><a href="Inicio.php">Inicio</a></li>
        <li><a href="Estaciones del Año.php">Estaciones del año</a></li>
        <li><a href="El mayor de tres números.php">El mayor de tres números</a></li>
    </u>

    </div>
</body>
</html>
