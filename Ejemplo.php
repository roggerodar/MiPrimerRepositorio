<?php
echo "<h1>Operadores aritmeticos en el lenguaje de PHP</h1>";
//Declaracion de variables
$a=3;
$b=4;
$c=12;
$d=15;
//Proceso
$suma=$a+$b;
//Salida de resultado
//echo "<br>La suma de $a y $b es: ".$suma;
echo "<br>La suma de $a y $b es: ".($a+$b);
echo "<br>La resta de $a y $b es: ".($a-$b);
echo "<br>La multiplicacion de $a y $b es: ".($a*$b);
echo "<br>La division de $c y $d es: ".($c/$d);
echo "<br>El modulo de $c y $d es: ".($c%$d);
?>