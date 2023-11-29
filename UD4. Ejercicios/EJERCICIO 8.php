<?php

class Trabajador {
    protected $nombre;
    protected $sueldo;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->sueldo = 0; 
    }

    public function calcularSueldo() {
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getSueldo() {
        return $this->sueldo;
    }
}

class Empleado extends Trabajador {
    const PAGO_POR_HORA = 9.50;
    protected $horasTrabajadas;

    public function calcularSueldo() {
        $this->sueldo = $this->horasTrabajadas * static::PAGO_POR_HORA;
    }

    public function setHorasTrabajadas($horasTrabajadas) {
        $this->horasTrabajadas = $horasTrabajadas;
    }
}

class Gerente extends Trabajador {
    private $sueldoBase = 2500;
    private $porcentajeBeneficio;

    public function __construct($nombre, $porcentajeBeneficio) {
        parent::__construct($nombre);
        $this->porcentajeBeneficio = $porcentajeBeneficio;
    }

    public function calcularSueldo() {
        $this->sueldo = $this->sueldoBase + ($this->sueldo * $this->porcentajeBeneficio / 100);
    }
}

echo "<h1>Lista de sueldos de CARLOS SA</h1>";
$empleado = new Empleado("Cecilia",0);
$empleado->setHorasTrabajadas(40); 
$empleado->calcularSueldo();
echo "<h3>Sueldo de la empleada {$empleado->getNombre()} es: {$empleado->getSueldo()} €</h3>\n";
$gerente = new Gerente("Carlos", 15); 
$gerente->calcularSueldo();
echo "<h3>Sueldo del gerente {$gerente->getNombre()} es: {$gerente->getSueldo()} €</h3>\n";

?>
