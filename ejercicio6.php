<?php

// clase de modelo.
class ClaseProducto {
    public string $nombre;
    public int $cantidad;
    public int $precio;
}

class ClaseProductoServicio {
    function comision(ClaseProducto $prod):float {
        $comision=$prod->precio*5/100;
        if($comision<50) {
            $comision= 50;
        }
        return $comision;
    }
    function conversion(ClaseProducto $prod,string $tipoDivisa):float{
        switch($tipoDivisa) {
            case "dolar":
                return $prod->precio/925;
            case "euro":
                return $prod->precio/1077;
            case "yuan":
                return $prod->precio/131;
            default:
                return $prod->precio;
        }
    }
}

$producto=new ClaseProducto();
$producto->nombre = "cocacola";
$producto->cantidad = 10;
$producto->precio = 25000;
$productoServicio=new ClaseProductoServicio();
echo $productoServicio->comision($producto);
echo "<br>";
echo "dolar:".$productoServicio->conversion($producto,"dolar")."<br>";
echo "euro:".$productoServicio->conversion($producto,"euro")."<br>";
echo "yuan:".$productoServicio->conversion($producto,"yuan")."<br>";


