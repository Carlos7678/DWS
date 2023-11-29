<?php
class Empleado
{
    private $nombre;
    private $sueldo;

    public function __construct($nombre,$sueldo)
    {
        $this->nombre=$nombre;
        $this->sueldo=$sueldo;
    }



    public function get_nombre(){
        return $this->nombre;
     }

     public function set_nombre($nombre){
        $this->nombre = $nombre;
     }

     public function get_sueldo(){
        return $this->sueldo;
     }

     public function set_sueldo($sueldo){
        $this->sueldo = $sueldo;
     }
}
$empleado1=new Empleado("Carlos",50000);
$empleado2=new Empleado("Paco",2000);

echo "<h1> Lista de empleados de Carlos SL</h1>";
echo $empleado1->get_nombre()." tiene un sueldo de ".$empleado1->get_sueldo()."<br>";
echo $empleado2->get_nombre()." tiene un sueldo de ".$empleado2->get_sueldo()."<br>";
?>