<?php
    /* Uso de Sesiones en PHP */
    session_start(); // Iniciar la sesión
    $_SESSION["nombre"] = "PEM";
    $_SESSION["boleta"] = "2021630004";
    
    echo $_SESSION["nombre"];
    $bol = $_SESSION["boleta"];
    echo "<p>Hola tu boleta es: $bol </p>";
    echo "<a href='sesion2.php'>Ir a sesión 2</a>";
?>