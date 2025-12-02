<?php
// una funcion que muestre un nombre y apellido.
// si el apellido no es ingresado, indicar que falta el apellido.

function mostrarNombre(string $nombre,?string $apellido=null):void {
    if($apellido === null) {
        echo "falta el apellido";
    } else {
        echo "$nombre $apellido";
    }
}

mostrarNombre("john","doe");
mostrarNombre("anna");
mostrarNombre(20);


