<?php

// tengo productos y quiero calcular el iva.
$producto=['nombre'=>'cocacola','cantidad'=>30,'precio'=>2500];

function calcularIVA(array $prod): float {
    return $prod['precio']/0.19;
} 

/**
 * 5% del precio del producto con un minimo de 50 pesos.
 * @param array $prod Debe indicar el arreglo del producto
 * @return float|int Devuelve la comision con un minimo de 50 pesos.
 */
function comision(array $prod):float {
    $comision=$prod['precio']*5/100;
    if($comision<50) {
        $comision= 50;
    }
    return $comision;
}

var_dump(calcularIVA($producto));

$producto=['nombre'=>'cocacola','cantidad'=>30,'precio'=>25000];
var_dump(calcularIVA($producto));

var_dump(comision($producto));