<?php

class Vendedor {
    private $identificacion;
    private $nombre;
    private $barrios;

    public function __construct($identificacion, $nombre, $barrios) {
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->barrios = $barrios;
    }

    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function isTieneBarrio($barrio) {
        return in_array($barrio, $this->barrios);
    }
}

// Ejemplo de uso:
$vendedor = new Vendedor(
    2,
    'Ezequiel',
    array(
        'Villa Crespo',
        'Almagro',
        'Palermo'
    )
);

var_dump($vendedor->isTieneBarrio('Villa Crespo')); // Devuelve true
var_dump($vendedor->isTieneBarrio('Colegiales')); // Devuelve false

?>
