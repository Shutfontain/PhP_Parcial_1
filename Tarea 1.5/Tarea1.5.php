<?php
    $hhm=array();
    $tam=rand(1,1000);//generar el arreglo de 1 a 1000 elementos
    echo "<h1>Calificaciones de los alumnos del CBTis</h1>";
    for($i=0; $i<$tam; $i++)
    {
        $hhm[$i]= rand(0,10);//dar datos random entre 1 y 10
    }
    $suma=0;
    for($i=0; $i<$tam; $i++)
    {
        $suma=$suma+$hhm[$i];
    }
    $promedio=$suma/$tam;
    echo "<br>";
    echo "El promedio es: ",round($promedio,2);echo "<br><br>";
    $MQEP=0;
    $aprovados=0;
    $reprovados=0;
    for($i=0; $i<$tam; $i++)
    {
        if($hhm[$i]>=$promedio)
        {
            $MQEP++;
        }
        if($hhm[$i]>6)
        {
            $aprovados++;
        }
        else
        {
            $reprovados++;
        }
    }
    echo "Los alumnos aprovados son $aprovados";echo "<br>";
    $PA=($aprovados/$tam)*100;
    echo "El porcentaje es:  $PA";echo "%<br><br>";

    echo "Los alumnos reprovados son $reprovados";echo "<br>";
    $PR=($reprovados/$tam)*100;
    echo "El porcentaje es:  $PR";echo "%<br><br>";

    echo "<table border='1'>";
    echo "<tr>";
    for($i=0; $i<$tam; $i++)
    {
            echo "<td>";
                echo $hhm[$i];
            echo "<td>";
        if($i%29==0)
        {
            echo "</tr>";
            echo "<tr>";
        }
    }
    echo "</table>";
    echo "El total de datos es: $tam";
?>
