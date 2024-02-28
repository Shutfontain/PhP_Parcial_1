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
    <h1>13433. Estaciones del Año</h1>
    <table border="1" cellspacing="0" 
    cellpadding = "8" class="jj">
        <tr>
            <td><h5>Puntos</h5></td>
            <td>23.98</td>
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
    <p>Brithany quiere combinar 
        la programación con el inglés, 
        y se encuentra empezando a usar 
        las estructuras de control 
        selectivas en la programación estructurada, 
        como ejercicio necesita 
        desarrollar un programa que sea 
        capaz de especificar a que 
        estación (su nombre en inglés) 
        del año pertenece 
        una fecha en especifico 
        compuesta por un día
    </p>
    
    <h2>Entrada</h2>
    <p>
        Dos números enteros d y m separados por un espacio que 
        corresponden al día y mes de una fecha determinada
    </p>
    <h2>Salida</h2>
    <p>
        Una cadena S que indique la estación 
        del año a la que pertenece la fecha ingresada 
        o un mensaje que indique no existe la 
        fecha, si la fecha no es válida
    </p>
    <h2 class="jijija">Ejemplo</h2>
    <h3>Entrada  .   Salida</h3>

    <table border="1" cellspacing="0" 
    cellpadding = "8" class="UwU">
        <tr>
            <?php
                function Calculo( $b, $a )
                {
                    if($b>=31 || $a>=13)
                    {
                        return "no existe la fecha";
                    }
                    if($a==1)
                    {
                        return "Winter";
                    }
                    else if($a==3)
                    {
                        if($b<=19)
                        return "Winter";
                        else
                        return "Spring";
                    }
                    else if($a==4)
                    {
                        return "Spring";
                    }
                    else if($a==5)
                    {
                        return "Spring";
                    }
                    else if($a==6)
                    {
                        if($b<=20)
                        return "Spring";
                        else
                        return "Summer";
                    }
                    else if($a==7)
                    {
                        return "Summer";
                    }
                    else if($a==8)
                    {
                        return "Summer";
                    }
                    else if($a==9)
                    {
                        if($b<=21)
                        return "Summer";
                        else
                        return "Fall";
                    }
                    else if($a==10)
                    {
                        return "Fall";
                    }
                    else if($a==11)
                    {
                        return "Fall";
                    }
                    else if($a==12)
                    {
                        if($b<=22)
                        return "Fall";
                        else
                        return "Winter";
                    }
                    else{
                        return "pz no se entonces";
                    }

                }
                $a=15;
                $b=10;
                $res=Calculo($a,$b);
            ?>
            <td><?php echo $a, " " ,$b;?></td>
            <td><?php echo $res;?></td>
        </tr>

        <tr>
            <?php
                $a=22;
                $b=3;
                $res=Calculo($a,$b);
            ?>
            <td><?php echo $a, " " ,$b;?></td>
            <td><?php echo $res;?></td>
        </tr>

        <tr>
            <?php
                $a=31;
                $b=4;
                $res=Calculo($a,$b);
            ?>
            <td><?php echo $a, " " ,$b;?></td>
            <td><?php echo $res;?></td>
        </tr>
    </table>
    <p>
        Fuente: UAS - DGEP 
        Subido por: Rigoberto Santiago Garzón (rigosantiago)
        Problema subido en: 21/6/2021
    </p>
    
        
    <?php ?>

    <u>
        <li><a href="Inicio.php">Inicio</a></li>
        <li><a href="Cuántos valen 7.php">Cuántos valen 7</a></li>
        <li><a href="El mayor de tres números.php">El mayor de tres números</a></li>
    </u>

    </div>
</body>
</html>
