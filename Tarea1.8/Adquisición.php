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
    <h1 class=" centrado">3991. Adquisición de Letras</h1>
    <table border="1" cellspacing="0" 
    cellpadding = "8" class="jj">
        <tr>
            <td><h5>Puntos</h5></td>
            <td>11.58</td>
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
        En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.
        El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.
    </p>
    
    <h2>Entrada</h2>
    <p>
        Un solo string de letras minúsculas.
    </p>
    <h2 class="jijija">Ejemplo</h2>
    <form action="Adquisición.php" method="post">
        <input type="text" name="Pal"> <br>
        <input type="submit" value="Enviar"><br>
    </form>

        <?php
            if($_POST)
            {   
                $palabra=$_POST['Pal'];
                $N=strlen($palabra);
                $suma=0;
                for($i=0; $i<$N; $i++)
                {
                    if($palabra[$i]=='d')
                    {
                        $suma++;
                    }
                }
                echo $suma;
            }
        ?>

    <u>
        <li><a href="Tarea.1.8.php">Inicio</a></li>
        <li><a href="Autores.php">Autores</a></li>
        <li><a href="Bit.php">Bit de paridad</a></li>
    </u>

    </div>
</body>
</html>