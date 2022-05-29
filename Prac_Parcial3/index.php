<?php
    echo "Hola mundo";

    //Variables declaradas con $
    
    //Las variables son interpretadas dependiendo de su contenido

    //Ciclos
    //while
    echo "<hr>";
    echo "<h4> Tabla del 2</h4>";
    $numero=1;
    do
    {
        $mul=$numero*2;
        echo "2 x $mul=".$mul."<br>";
        $numero++;
    }while($numero<=10);

    echo "<hr>";
    echo "<h4> Tabla del 3</hr4><br>";
    $y=1;
    do
    {
        $mul=$y*3;
        echo "3 x $y=".$mul."<br>";
        $y++;
    }while($y<=10);
?>