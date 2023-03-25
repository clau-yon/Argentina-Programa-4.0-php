<?php
//Extra
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

$resultado=$numero1+$numero2;

if($resultado>100){
    echo "<p style='color:green'>La suma es: " .$resultado ."</p>";
}
else{
    echo "<p  style='color:red'>La suma es: " .$resultado."</p>";
}

?>