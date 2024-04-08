<?php

class Vendedor {
    private $codigo;
    private $nombre;
    private $barrios;

    public function __construct($codigo, $nombre, $barrios) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->barrios = $barrios;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getBarrios() {
        return $this->barrios;
    }
}

class VendedorBuscador {
    public static function getByCodigo($vendedores, $identificacion) {
        foreach ($vendedores as $vendedor) {
            if ($vendedor->getCodigo() === $identificacion) {
                return $vendedor;
            }
        }
        return null;
    }

    public static function countByBarrio($vendedores, $barrio) {
        $count = 0;
        foreach ($vendedores as $vendedor) {
            if (in_array($barrio, $vendedor->getBarrios())) {
                $count++;
            }
        }
        return $count;
    }
}

$vendedores = array(
    new Vendedor(1, 'Gonzalo', array('Villa Crespo', 'Caballito', 'Almagro')),
    new Vendedor(2, 'Ezequiel', array('Villa Crespo', 'Almagro', 'Palermo')),
    new Vendedor(3, 'Valeria', array('San Telmo', 'Boca', 'San Telmo')),
    new Vendedor(4, 'Gastón', array('Liniers', 'Flores', 'Villa Lugano')),
    new Vendedor(5, 'Ornella', array('Colegiales', 'Chacarita', 'Paternal'))
);

var_dump(VendedorBuscador::countByBarrio($vendedores, 'Villa Crespo')); 
var_dump(VendedorBuscador::countByBarrio($vendedores, 'Liniers')); 
var_dump(VendedorBuscador::countByBarrio($vendedores, 'Belgrano')); 

?>
