<?php

/*Estructuras de Control 2
WHILE
1. Crea un script en donde tengas que imprimir en pantalla la suma de 100 números
aleatorios. (Consejo: usa la función RAND)
*/
echo "<h2>Ejercicios while</h2>";
$sumar=0;
$contador1=1;

while ($contador1<=100) {
    $numeros= rand(1,100);
    echo "numero ->".$contador1 . " - " . $numeros ."<br>";
    $sumar=$sumar+$numeros;
    $contador1++;
}
echo "La suma de los 100 números aleatorios es: " . $sumar ."<br>";

/*
2. Crea un script en donde se imprima 5 veces un código HTML.
1. Ejemplo: Echo “<h1> hola </h1>”;
*/
while ($a < 5) {
    echo "<h1> Hola </h1>";
    $a++;
}

echo "<br>";
/*
DO-WHILE
1. Con ayuda del profesor crear entre todos la sucesión de Fibonacci.
*/
echo "<h2>Ejercicios do while</h2>";
$x=0;
$y=1;
$z=0;

$fibo=1;
do{
    echo $z ." - ";
    $x=$y;
    $y=$z;
    $z=$x+$y;
    $fibo++;

}while($fibo<=15);

echo "<br>";
/*
2. Imprime en pantalla los números del 0 a tu edad.*/
$edad=0;
do{
 echo "-> ". $edad ."<br>";
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
echo "<h2>Ejercicios for</h2>";
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
echo "<h2>Ejercicios for each</h2>";
$ejercicio1 = array(
    "nombre" => "Carlos",
    "apellido" => "Dominguez",
    "edad" => 28,
    "pais" => "Argentina"
);
//Array vacio para almacenar las keys
$newKeys=array();
foreach($ejercicio1 as $keys => $valores){
    $newKeys[]=$keys;
    
}
print_r($newKeys);
echo "<br>";

/*
2. Crear un array que contenga 5 nombres y mediante un foreach imprimirlos en
pantalla.
*/
$nombres=array("Andrea", "Juan", "Carlos", "Diana" , "Maria");
foreach($nombres as $nombre){
    echo $nombre . "</br>";
}

//Ejercicios Extra
echo "<h2>Ejercicios Extras</h2>";
$nuevoArreglo=array(5,30,11,9,200,7,20,6,54,50,1,66,206,77,15,9,101,10,154,2);

for($i=0; $i<count($nuevoArreglo); $i++){
    if($nuevoArreglo[$i] %2==0){
        echo "El ".$nuevoArreglo[$i]. " es par<br>";
    }
    else{
        echo "El ".$nuevoArreglo[$i]. " es impar<br>";
    }
}

//calcular sumatoria,promedio, mayor y menor
$nuevoArreglo2=array(5,30,11,9,200,7,20,6,54,50,100,66,206,77,15,3,101,10,154,2);
$sumatoria=0;
$promedio=0;
$menor=$nuevoArreglo2[$i];
$mayor=$nuevoArreglo2[$i];

for($i=0; $i<count($nuevoArreglo2); $i++){
   $sumatoria = $sumatoria+$nuevoArreglo2[$i];
   $promedio=$sumatoria/count($nuevoArreglo2);
    if($nuevoArreglo2[$i]>$mayor){
        $mayor=$nuevoArreglo2[$i]; 
    }
    if($nuevoArreglo2[$i]<$menor){
        $menor=$nuevoArreglo2[$i]; 
    }
}

echo "La suma total es " . $sumatoria ."<br>";
echo "El promedio total es " . $promedio."<br>";
echo "El mayor valor es " . $mayor ."<br>";
echo "El menor valor es " . $menor ."<br>";
?>


