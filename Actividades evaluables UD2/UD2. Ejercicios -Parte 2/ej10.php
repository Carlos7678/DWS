<?php
$hoteles = [
    ['Nombre'=>"Abashiri (NH)", 'Cat'=>3, 'Hab'=>168,'Población'=>'46013 Valencia','Dirección'=>'Avenida Ausias March, 59'],
    ['Nombre'=>"Abba Acteon (Abba Hoteles)", 'Cat'=>4, 'Hab'=>189,'Población'=>'46023 Valencia','Dirección'=>'Escultor Vicente Bertrán Grimal, 2'],
    ['Nombre'=>"Acta Atarazanas", 'Cat'=>4, 'Hab'=>42,'Población'=>'46011 Valencia','Dirección'=>'Plaza Tribunal de las Aguas, 4'],
    ['Nombre'=>"Acta del Carmen", 'Cat'=>3, 'Hab'=>25,'Población'=>'46003 Valencia','Dirección'=>'Blanquerías, 11'],
    ['Nombre'=>"AC Valencia (AC Hotels)", 'Cat'=>4, 'Hab'=>183,'Población'=>'46023 Valencia','Dirección'=>'Avenida de Francia, 67'],
    ['Nombre'=>"Ad Hoc Monumental Valencia", 'Cat'=>3, 'Hab'=>28,'Población'=>'46003 Valencia','Dirección'=>'Boix, 4'],
    ['Nombre'=>"Alkazar", 'Cat'=>1, 'Hab'=>18,'Población'=>'46002 Valencia','Dirección'=>'Mosén Femades, 11'],

];
echo "<h1>Listado Hoteles</h1>*****************";
foreach($hoteles as $hotel){
    echo "<p> Nombre = ".$hotel['Nombre']."/Cat = ".$hotel['Cat']."/Hab = ".$hotel['Hab']."/Población = ".$hotel['Población']."/Dirección = ".$hotel['Dirección']."</p>";
}

echo "<br><h1>Listado Hoteles con mas de 100 habitaciones</h1>*****************";
foreach($hoteles as $hotel){
    if($hotel['Hab']>100)
    echo "<p> Nombre = ".$hotel['Nombre']."/Cat = ".$hotel['Cat']."/Hab = ".$hotel['Hab']."/Población = ".$hotel['Población']."/Dirección = ".$hotel['Dirección']."</p>";
}

echo "<br><h1>Listado Hoteles con menos de 100 habitaciones y 3 estrellas</h1>*****************";
foreach($hoteles as $hotel){
    if($hotel['Hab']<100&&$hotel['Cat']==3)
    echo "<p> Nombre = ".$hotel['Nombre']."/Cat = ".$hotel['Cat']."/Hab = ".$hotel['Hab']."/Población = ".$hotel['Población']."/Dirección = ".$hotel['Dirección']."</p>";
}

echo "<h1>Listado Hoteles sin Acta del Carmen</h1>*****************";
foreach($hoteles as $key => $hotel){
    if ($hotel['Nombre'] == "Acta del Carmen") {
        unset($hoteles[$key]);   
    } else {
        echo "<p> Nombre = ".$hotel['Nombre']."/Cat = ".$hotel['Cat']."/Hab = ".$hotel['Hab']."/Población = ".$hotel['Población']."/Dirección = ".$hotel['Dirección']."</p>";
    }
}


foreach($hoteles as $key => $hotel){
        unset($hoteles[$key]);   
}
echo "<h1>No hay hoteles en la base de datos</h1>";

$nuevosHoteles = [
    ['Nombre' => 'Astoria Palace (Ayre Fiesta)', 'Cat' => 4, 'Hab' => 204, 'Población' => '46002 Valencia', 'Dirección' => 'Plaza Rodrigo Botet, 5'],
    ['Nombre' => 'Balneario Las Arenas', 'Cat' => "Lujo", 'Hab' => 253, 'Población' => '46011 Valencia', 'Dirección' => 'Eugenia Viñes,22-24'],
];

$hoteles = array_merge($hoteles, $nuevosHoteles);

echo "<h1>Nuevo listado Hoteles</h1>*****************";
foreach ($hoteles as $hotel) {
    echo "<p> Nombre = " . $hotel['Nombre'] . "/Cat = " . $hotel['Cat'] . "/Hab = " . $hotel['Hab'] . "/Población = " . $hotel['Población'] . "/Dirección = " . $hotel['Dirección'] . "</p>";
}
?>
