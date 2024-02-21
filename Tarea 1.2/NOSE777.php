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
    <h1>12618. Practicando con formulas</h1>
    <table border="1" cellspacing="0" 
    cellpadding = "8" class="jj">
        <tr>
            <td><h5>Puntos</h5></td>
            <td>10.76</td>
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
    <p>Dado un valor real a, 
       quieres resolver una serie 
       de ecuaciones hasta obtener 
       el valor de z. 
    </p>
    
    <p class="formulas">
        x=3a+15 <br> <br>
        y=(x+3)/(x+1) <br> <br>
        z=(5x+7y)/(axy) <br> <br>
    </p>
    <h2>Entrada</h2>
    <p>
        Un real a. Puedes suponer que 1 <= a <= 100.
    </p>
    <h2>Salida</h2>
    <p>
        Un real que sea el valor de z
        impreso con tres puntos decimales
    </p>
    <h2 class="jijija">Ejemplo</h2>
    <h3>Entrada  .   Salida</h3>

    <table border="1" cellspacing="0" 
    cellpadding = "6" class="UwU">
        <tr>
            <?php
                $a=33.562;
                $x=(3*$a)+15;
                $y=($x+3)/($x+1);
                $z=(5*$x+7*$y)/($a*$x*$y);
            ?>
            <td> <?php echo $a;?> </td>
            <td> <?php echo $z;?> </td>
        </tr>
        <tr>
            <?php
                $a=72.569;
                $x=(3*$a)+15;
                $y=($x+3)/($x+1);
                $z=(5*$x+7*$y)/($a*$x*$y);
            ?>
            <td> <?php echo $a;?> </td>
            <td> <?php echo $z;?> </td>
        </tr>
        <tr>
            <?php
                $a=64.835;
                $x=(3*$a)+15;
                $y=($x+3)/($x+1);
                $z=(5*$x+7*$y)/($a*$x*$y);
            ?>
            <td> <?php echo $a;?> </td>
            <td> <?php echo $z;?> </td>
        </tr>
    </table>
    <p>
        Fuente: UAM Azcapotzalco 2021 <br>
        Subido por: <div class="rojo">Luis Pedroza(Luis Pedroza)</div>
        Problema subido en: 11/1/2021
        <div class="azul"> Reportar problema</div>
    </p>
    
    </div>
        
    <?php ?>
    <table cellpadding ="6" border="1" cellspacing="0">
        <tr>
            <td>ji</td>
            <td>ji</td>
        </tr>
        <tr>
            <td>da</td>
            <td>da</td>
        </tr>
        <tr>
            <td>kk</td>
            <td>kk</td>
        </tr>
    </table>
</body>
</html>