<?php
if (isset($_COOKIE["usuario_validado"])) {
    echo "<h1>Bienvenido al Menú</h1>";
    echo "<nav>
            <ul>
                <li><a href=''>Empresa</a></li>
                <li><a href=''>Servicios</a></li>
                <li><a href=''>Contacto</a></li>
            </ul>
          </nav>";
} else {
    header("Location: ej6 index.html");
    exit();
}
?>
