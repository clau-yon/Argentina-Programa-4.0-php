<?php
/*Crear una función que imprima en pantalla un mensaje secreto y llamar a dicha función para
que se ejecute.*/
echo "<h3>Ejecicio 1</h3>";
function mensaje(){
  echo "<p>Hola</p>";
}
mensaje();

//2Crear una función que imprima una cuenta de números, del 1 al 100.
echo "<h3>Ejecicio 2</h3>";
function imprimirNumeros() {
    for ($i = 1; $i <= 100; $i++) {
      echo $i . "<br>";
    }
}
  
imprimirNumeros();
echo"<br>";

/*Buscando mejorar la función anterior, crear una función que reciba como parámetro una
variable que contenga un número y en base a ese número que la función imprima en pantalla
los 100 números por delante de él.
Por ejemplo:
myFuncion → Recibe 23 → devuelve del 23 al 123*/
echo "<h3>Ejecicio 3</h3>";
function ejercicio3($num){
  for ($i = $num; $i <= 100+$num; $i++) {
    echo $i . "<br>";
  
  }
}
ejercicio3(23);
echo"<br>";
/*Crear una función que reciba 2 parámetros y valide si éstos son iguales . La función debe
retornar un valor booleano (true o false).
*/
echo "<h3>Ejecicio 4</h3>";
function sonIguales($x,$y){
  if($x==$y){
    echo "True";
  }
  else{
    echo "False";
  }
}
sonIguales(5,5);
echo "<br>";
sonIguales(2,10);
/*Crear una función que llamada “potencia“ que reciba 2 parámetros (número, potencia) y que
multiplique la variable número por sí misma, según la cantidad de veces indicada en la variable
potencia. Debe retornar el valor.
potencia(3,3);*/
echo "<h3>Ejecicio 5</h3>";
function potencia($numero , $potencia){
  $resultado = 1;
  for ($i = 1; $i <= $potencia; $i++) {
    $resultado *= $numero;
  }
  echo "La potencia de " .$numero." es " .$resultado ."<br>";
}
potencia(3,3);
potencia(2,3);
//6Crear una función que imprima una pirámide de asteriscos.*/
echo "<h3>Ejecicio 6</h3>";
function imprimirPiramide($numFilas) {
  for ($i = 1; $i <= $numFilas; $i++) {
    // Imprimir espacios
    for ($j = 1; $j <= ($numFilas - $i); $j++) {
      echo " ";
    }
    // Imprimir asteriscos
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
      echo "*";
    }
    echo "<br>";
  }
}

imprimirPiramide(10);

?>