<?php
    $a=array();
    $b=array();
    $n= rand(1,100);
    //Notas
    echo "<h1>El numero de datos es: $n </h2>";
    for($i=0; $i<$n; $i++)
    {
        $a[$i]=rand(1,1000);
        $b[$i]=rand(1,1000);
    }
    echo "<br>";
    echo "Los datos de la tabla uno son: ";
    echo "<table border=1 cellspacing='0'>";
    echo "<tr>";
    for( $i=0; $i<$n; $i++)
    {
        echo "<td>",$a[$i],"</td>";
        if($i%10==0)
        {
            echo"</tr><tr>";
        }
    }
    echo "</tr>";
    echo "</table><br>";
    echo "Los datos de la tabla dos son: ";

    echo "<table border=1 cellspacing='0'>";
    echo "<tr>";
    for( $i=0; $i<$n; $i++)
    {
        echo "<td>",$b[$i],"</td>";
        if($i%10==0)
        {
            echo"</tr><tr>";
        }
    }
    echo "</table>";
    echo "La suma de los dos datos es: ";
    echo "<table border=1 cellspacing='0'>";
    echo "<tr>";
    for( $i=0; $i<$n; $i++)
    {
        echo "<td>",$b[$i]+$a[$i],"</td>";
        if($i%10==0)
        {
            echo"</tr><tr>";
        }
    }
    echo "</table>";

?>
