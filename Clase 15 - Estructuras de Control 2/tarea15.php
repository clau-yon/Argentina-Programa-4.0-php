<?php

/*Estructuras de Control 2
WHILE
1. Crea un script en donde tengas que imprimir en pantalla la suma de 100 números
aleatorios. (Consejo: usa la función RAND)
*/
$sumar=0;
$contador1=0;

while ($contador1<100) {

    $numeros= rand(1,100);
    $sumar=$sumar+$numeros;
    $contador1++;
}
echo "La suma de los 100 números aleatorios es: " . $sumar ."<br>";

/*
2. Crea un script en donde se imprima 5 veces un código HTML.
1. Ejemplo
1. Echo “<h1> hola </h1>”;
*/
while ($a < 5) {
    echo "<h1> Hola </h1>";
    $a++;
}


/*
DO-WHILE
1. Con ayuda del profesor crear entre todos la sucesión de Fibonacci.
*/



/*
2. Imprime en pantalla los números del 0 a tu edad.*/

do{
 echo $edad ."<br>";
 $edad++;
}while($edad<=30);

/*
FOR
1. Crear un script en donde tengas que pasar un numero en un ciclo for e imprimir ese
número, pero en cada interacción repetir los números anteriores más el número
que contenga la variable de la primera expresión del for ($i = x)
Ejemplo de salida:
● 1
● 12
● 123
● 1234
● 12345
● 123456
● 1234567
● 12345678
● 123456789
● 12345678910
*/

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}


/*FOREACH
1. Recorre un array asociativo y guarda las claves/keys de los elementos en un nuevo
array e imprime ese array en pantalla.
*/



/*
2. Crear un array que contenga 5 nombres y mediante un foreach imprimirlos en
pantalla.
*/
$nombres=array("Andrea", "Juan", "Carlos", "Diana" , "Maria");
foreach($nombres as $nombre){
    echo $nombre . "</br>";
}
?>