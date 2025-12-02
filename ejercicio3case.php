<?php

$num1=3;

if($num1===0) {
    echo "cero";
}
if($num1===1) {
    echo "uno";
}
if($num1===2) {
    echo "dos";
}
if($num1===3) {
    echo "tres";
}

switch($num1) {
    case 0:
        echo "cero";
        break; // salir del bloque de codigo (salir del switch)
    case 1:
        echo "uno";
        break; // salir del bloque de codigo (salir del switch)
    case 2:
        echo "dos";
        break; // salir del bloque de codigo (salir del switch)
    case 3:
        echo "dos";
        break; // salir del bloque de codigo (salir del switch)
}

$letra="a";
switch($letra) {
    case 'a':
        echo "alfa";
        break;
    case "b":
        echo "beta";
        break;
    case "c":
        echo "gamma";
        break;
}
// version match PHP >=8.0
$resultado= match($letra) {
    "a"=>"alfa",
    "b"=>"beta",
    "c"=>"gamma"
};
echo $resultado;


