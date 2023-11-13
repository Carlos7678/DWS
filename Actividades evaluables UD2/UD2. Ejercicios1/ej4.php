<?php
$nombre="Paco";
$edad="15";
if ($nombre!=null &&  $edad!=null) {
    echo "Hola ".$nombre.", Tiene $edad años" ;
  } elseif ($nombre=null) {
    echo "Hola desconocido ";
  } elseif ($edad=null) {
    echo "Hola ".$nombre.", No se tu edad";
  }
?> 

