<?php

$num1=2;
$num2= 2;
// primera: 
if($num1<$num2) {
    echo "numero1 es menor";
} else {
    if($num1===$num2) {
        echo "son iguales";
    } else {
        echo "numero2 es menor";
    }
}
// segunda version
if($num1<$num2) {
    echo "numero1 es menor";
}
if($num1>$num2) {
    echo "numero2 es menor";
}
if($num1===$num2) {
    echo "son iguales";
}
// tercera forma
if($num1<$num2) {
    echo "numero1 es menor";
} else if($num1===$num2) {
    echo "son iguales";
} else {
    echo "numero2 es menor";
}
