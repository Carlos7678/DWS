<?php
class Empleado
{
    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function get_nombre()
    {
        return $this->nombre;
    }

    public function get_sueldo()
    {
        return $this->sueldo;
    }

    public function pagarImpuestos()
    {
        return $this->sueldo > 1200;
    }

    public function mostrarImpuestos()
    {
        if ($this->pagarImpuestos()) {
            echo "<b>".strtoupper($this->get_nombre())." TIENE QUE PAGAR IMPUESTOS</b>";
        } else {
            echo "<b>".strtoupper($this->get_nombre())." NO TIENE QUE PAGAR IMPUESTOS</b>";
        }
    }
}

$empleado1 = new Empleado("Carlos", 50000);
$empleado2 = new Empleado("Cecilia", 1000);

echo "<h1> Lista de empleados de Carlos SL</h1><br>";
echo "<h2>".$empleado1->get_nombre() . " tiene un sueldo de " . $empleado1->get_sueldo() . "€</h2>";
$empleado1->mostrarImpuestos();
echo "<br> <br>";
echo "<h2>".$empleado2->get_nombre() . " tiene un sueldo de " . $empleado2->get_sueldo() . "€</h2>";
$empleado2->mostrarImpuestos();
?>
