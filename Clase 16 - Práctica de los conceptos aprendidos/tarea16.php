<?php
/*
a) Un bucle while que cuente desde 50 hasta 40 (fíjate que en este caso es
decreciente)
*/
$a=50;
while($a>=40){
    echo "$a<br>";
    $a--;
}

/*
b) Un bucle while que a partir de una variable $contador que toma valores
de 1 a 5, muestre por pantalla el doble del valor de $contador, es decir, que
muestre 2, 4, 6, 8, 10.
*/
echo "<h2>Ejercicio b</h2>";
$contador = 1;

	while($contador <= 5){
		echo $contador + $contador;
		echo " , ";
		$contador++;
	}
echo "<br>";   
/*
c)Un bucle while que a partir de una variable $contador que toma valores
de 1 a149, muestre por pantalla 4 veces del valor de $contador, es decir,
que muestre 15 9 13…..imprimir de forma vertical sin comas.
*/
echo "<h2>Ejercicio c</h2>";
$contadorc=1;
while($contadorc<=149){
   echo $contadorc * 4 . "<br>";
   $contadorc++;
}

/*d)Un bucle for que cuente desde 50 hasta 500 de 25 en 25.*/
echo "<h2>Ejercicio d</h2>";
for($d = 50; $d <= 500; $d += 25){
		echo "$d - ";
}
echo "<br>"; 
/*e)Escribir un programa que pida al usuario un número entero y muestre por
pantalla un triángulo rectángulo como el de más abajo.
1
3 1
5 3 1
7 5 3 1
9 7 5 3 1
*/
echo "<h2>Ejercicio e</h2>";
if (isset($_POST["numero"])) {
	$numero = $_POST["numero"];
	for ($i = 1; $i <= $numero; $i += 2) {
		for ($j = $i; $j >= 1; $j -= 2) {
			echo $j . " ";
		}
		echo "<br>";
	}
}
/*

if (isset($_POST["mes"])) {
	$mes = $_POST["mes"];
	$dias = diasMes($mes);
	$nombreMes = $meses[$mes - 1];
	echo "$nombreMes tiene $dias días";
  } */
/*
f) Muestra los números de piso y de puerta de un bloque. Por ejemplo:
Piso 1 –puerta 1
Piso 1 –puerta 2
Así hasta llegar al
Piso 5 –puerta 4
*/
echo "<h2>Ejercicio f</h2>";
for($piso=1; $piso<=5; $piso++){
	for($puerta=1; $puerta<5; $puerta++){
	echo "Piso".$piso ." - puerta" .$puerta."<br>";
	}
}
/*
g) Realizar un script que convierta dólares a pesos desde 50 hasta 1000
ambos incluidos, saltando de 50 en 50. Usar un bucle FOR para realizar el
ejercicio, el tipo de cambio será 377,00
*/
echo "<h2>Ejercicio g</h2>";
$valorCambio=377.0;
for($dolar=50;$dolar<=1000;$dolar+=50){
	$peso = $dolar * $valorCambio;
	echo "$dolar dolares son $peso pesos<br>";
}
?>