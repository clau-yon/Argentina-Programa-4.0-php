<?php
/*
IF
1. Crea una condicional en donde se indique que si la edad de la persona es menor a
18 imprime en pantalla el siguiente mensaje: “Lo sentimos para mantener esta
billetera virtual abierta necesitas ser mayor de edad“
*/

//$edad = (int)readline('Enter a string: ');

if($edad<18){
    echo "Lo sentimos para mantener esta
    billetera virtual abierta necesitas ser mayor de edad";
}

/*
ELSE
1. Crea un script (sección de código) en donde si la persona es mayor de edad
imprima “Genial sos mayor de edad“, y si no es mayor de edad calcula cuantos
años le faltan para que sea mayor de edad e imprimas el siguiente mensaje “Te
faltan X años para que seas mayor de edad“.*/

$edad3 = 10;
if($edad3>18){
    echo "Genial sos mayor de edad";
}
else{
    $faltaAños = 18 - $edad3;
    echo "Te faltan ".$faltaAños ." años para que seas mayor de edad";
}
/*2. Crea un script en donde compares si las variables $nombre y $edad no estén
vacías, si se llegan a encontrar llenas debes imprimir “Tu nombre es X y tienes X
años de edad “.*/
$nombre = "Manuel";
$edad1 = 20;

if($edad1 == "" && $nombre == ""){

}
else{
    echo "Tu nombre es " .$nombre ." y tienes " .$edad1 ." años de edad";
}


/*
ELSE IF
1. Crear un script en donde imprima en pantalla la estación del año, dependiendo del
mes introducido. (primavera, verano, otoño e invierno)
*/
$mes ="marzo";
if($mes == "diciembre" || $mes == "enero" || $mes == "febrero" || $mes == "marzo"){
    echo "Verano";
}
elseif($mes == "abril" || $mes == "mayo" || $mes == "junio"){
    echo "Otoño";
}
elseif($mes == "junio" || $mes == "agosto"){
    echo "Invierno";
}
elseif($mes == "septiembre" || $mes == "octubre" || $mes == "novimebre"){
    echo "Primavera";
}


/*SWITCH
1. Guarda un número random del 1 al 12 el cual representa los meses del año ( podes
ayudarte con la función de PHP rand() de ser necesario), y dependiendo del
número que se genere imprime el mes del año en pantalla.
*/
$mesAño=rand(1,12);
switch ($mesAño) {
    case '1':
        echo "Enero";
        break;
    
    case '2':
        echo "Febrero";
        break;

    case '3':
        echo "Marzo";
        break;

    case '4':
        echo "Abril";
        break;
    
    case '5':
        echo "Mayo";
        break;
                
    case '6':
        echo "Junio";
        break;
    
    case '7':
        echo "Julio";
        break;
                        
    case '8':
        echo "Agosto";
        break;
                            
    case '9':
        echo "Setiembre";
         break;
            
    case '10':
        echo "Octubre";
        break;        
                                    
    case '11':
        echo "Noviembre";
        break;
    
    case '12':
        echo "Diciembre";
        break;
}
/*
2. Usando la función rand() de PHP genera un valor aleatorio del 0 al 50, si el numero
generado es de:
o 0 a 10 imprime “La infancia es increíble“
o 11 a 20 imprime “Muchos cambios y mucho estudio “
o 21 a 30 imprime “Amor y comienza el trabajo"
o Si no es ninguno de esos valores imprime “Etapa de la vida no reconocida"
*/

$numeroAleatorio=rand(0,50);
switch ($numeroAleatorio) {
    case ($numeroAleatorio>=0 && $numeroAleatorio<=10):
        echo "La infancia es increíble";
        break;
    
    case ($numeroAleatorio>=11 && $numeroAleatorio<=20):
        echo "Muchos cambios y mucho estudio";
        break;

    case ($numeroAleatorio>=21 && $numeroAleatorio<=30):
        echo "Amor y comienza el trabajo";
        break;
    
    case '12':
        echo "Diciembre";
        break;
    default:
        echo "Etapa de la vida no reconocida";
        break;    
}

?>