<?php

class Mamifero {
    protected $especie;
    protected $sonido;
    protected $familia;

    public function __construct($especie, $sonido) {
        $this->especie = $especie;
        $this->sonido = $sonido;
    }

    public function sonido() {
        echo "Sonido de {$this->especie}, de la familia {$this->familia}: {$this->sonido}\n";
    }
}

class Perro extends Mamifero {
    public function __construct() {
        parent::__construct("perro", "ladrido");
        $this->familia = "cánidos";
    }
}

class Gato extends Mamifero {
    public function __construct() {
        parent::__construct("gato", "maullido");
        $this->familia = "felinos";
    }
}

$perro = new Perro();
$gato = new Gato();

$perro->sonido();
echo "<br>";
$gato->sonido();

?>
