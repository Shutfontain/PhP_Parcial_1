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
    <h1 class=" centrado">4886. Autores</h1>
    <table border="1" cellspacing="0" 
    cellpadding = "8" class="jj">
        <tr>
            <td><h5>Puntos</h5></td>
            <td>12.44</td>
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
        Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron. Por ejemplo, el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia de documentos científicos anteriores funciona mucho y es frecuente que un documento utilice dos convenciones de nomenclatura diferentes: la variación corta (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt) Apellidos completos separados por guiones. Encontramos que la mezcla de dos convenciones en un papel es estéticamente desagradable y quisiera que usted escribiera un programa que transformara variaciones largas en cortas
    </p>
    <h2 class="jijija">Ejemplo</h2>
    <form action="Autores.php" method="post">
        <input type="text" name="Pal"> <br>
        <input type="submit" value="Enviar"><br>
    </form>

        <?php
            if($_POST)
            {   
                $palabra=$_POST['Pal'];
                $N=strlen($palabra);
                for($i=0; $i<$N; $i++)
                {
                    if(ctype_upper($palabra[$i]))
                    {
                        echo $palabra[$i];
                    }
                }
            }
        ?>

    <u>
        <li><a href="Tarea.1.8.php">Inicio</a></li>
        <li><a href="Bit.php">Bit de paridad</a></li>
        <li><a href="Adquisición.php">Adquisición de Letras</a></li>
    </u>

    </div>
</body>
</html>