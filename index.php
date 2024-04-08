<?php

class Persona {
    private $p_nombre;
    private $p_apellido;
    private $p_edad;

    public function __construct($p_nombre, $p_apellido, $p_edad) {
        $this->p_nombre = $p_nombre;
        $this->p_apellido = $p_apellido;
        $this->p_edad = $p_edad;
    }

    public function getMayorDeEdad() {
        // if ($this->edad >= 18){
        //     return $this->nombre . ' Es mayor de edad';
        // }else{
        //    return $this->nombre . ' Es menor de edad';
        // }
        return $this->p_edad >= 18;
    }
}

// $persona1 = new Persona (' Leandro','Marconi', 28);
// $persona2 = new Persona (' Gaston','asdasd', 17);
// $persona3 = new Persona (' Tomas','sdfgsdfg', 18);

/*echo $persona1->__getMayorDeEdad().'<br>';
echo $persona2->__getMayorDeEdad().'<br>';
echo $persona3->__getMayorDeEdad().'<br>';*/

class Evento {
    private $nombre;
    private $is_mayor_edad = false;
    private $invitados = [];

    public function __construct ($p_nombre, $p_is_mayor_edad) {
        $this->nombre = $p_nombre;
        $this->is_mayor_edad = $p_is_mayor_edad;
    }

    public function addInvitado(Persona $persona) {
        if (!$this->is_mayor_edad || $persona->getMayorDeEdad()) {
            $this->invitados[] = $persona;
            return true;
        } else {
            return false;
        }
    }
}

$evento1 = new Evento('Joda +18', true);
$persona1 = new Persona('Juan', 'Perez', 16);
$persona2 = new Persona('Leandro', 'Marconi', 28);

echo ($evento1->addInvitado($persona1) ? " Si " : " No ") . "<br>";
echo ($evento1->addInvitado($persona2) ? " Si " : " No ") . "<br>";

?>




