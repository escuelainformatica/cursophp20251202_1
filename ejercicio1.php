<?php

// operaciones.

// operaciones binarias: valor (operador) valor
$suma= 10 + 20 ; // -, *, /
$op1 = (10*30)/$suma;
$suma = 1 + 2 +3 +4 +5;
// operador unitario.
$unit= !true; // ! = indica una negación.

// que es verdadero o falso en PHP:
// "",0,false,null = usualmente se consideran falso.

// operador logico (binario)
$resultado = 10 == 10; // true == estoy comparando 10 es igual a 20.
$resultado = 10 == "10"; // true (type juggling)
$resultado = 10 === "10"; // falso (=== comparo el valor y el tipo de dato)
$resultado = 10 != 10 ;  // false != no es igual.
$resultado = 10 !== "10" ;  // false != no es igual (o el tipo de datos no tiene que ser igual)
$resultado = 10<20; // menor
$resultado = 10>20; // mayor
$resultado = 10<=20; // menor o igual
$resultado = 10>=20; // mayor o igual.








