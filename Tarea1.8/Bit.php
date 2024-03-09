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
    <h1 class=" centrado">4352. Bit de paridad</h1>
    <table border="1" cellspacing="0" 
    cellpadding = "8" class="jj">
        <tr>
            <td><h5>Puntos</h5></td>
            <td>12.68</td>
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
    Un bit de paridad es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar. Los bits de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método:
        <br>Bit de paridad par
        <br>Bit de paridad impar
        En el caso de la paridad par, se cuentan el número de unos. Si el total es impar, el bit de paridad se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. Si el conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par.
        Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.
    </p>
    
    <h2>Entrada</h2>
    <p>
        La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.
    </p>
    <h2 class="jijija">Ejemplo</h2>
    
    <form action="Bit.php" method="post">
        <input type="text" name="Pal"> <br>
        <input type="submit" value="Enviar"><br>
    </form>

    <?php
        if ($_POST) 
        {
            $secuenciaBits = $_POST['Pal'];
            $contadorUnos = 0;
            for ($i = 0; $i < strlen($secuenciaBits); $i++) {
                if ($secuenciaBits[$i] === '1') {
                    $contadorUnos++;
                }
            }
            $paridadPar = $contadorUnos % 2 === 1 ? '1' : '0';
            echo $secuenciaBits ,$paridadPar;
        }
    ?>
    <u>
        <li><a href="Tarea.1.8.php">Inicio</a></li>
        <li><a href="Adquisición.php">Adquisición de Letras</a></li>
        <li><a href="Autores.php">Autores</a></li>
    </u>

    </div>
</body>
</html>