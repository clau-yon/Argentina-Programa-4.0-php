<?php
/*crear una funcion que reciba dos argumentos de tipo numero y diga
cual de ellos es mayor*/

function mayorQUe($numero1, $numero2){
    if($numero1>$numero2){
        echo "El " . $numero1 ." es mayor que " . $numero2."<br>";
    }
    elseif ($numero1<$numero2){
        echo "El " . $numero2 ." es mayor que " . $numero1 ."<br>";
    }
    else{
        echo "Son iguales <br>";
    }
}
mayorQUe(6,7);
mayorQUe(10,1);
mayorQUe(20,20);
?>