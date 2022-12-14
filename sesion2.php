<?php
    /* Uso de Sesiones en PHP */
    session_start(); // Iniciar la sesión
   $nom = $_SESSION["nombre"];
    $_SESSION["escuela"] = "ESCOM";

    echo "<h1>Hola <span style='color:blue'> $nom </span></h1>";
    echo "<a href='sesion3.php'>Ir a sesión 3</a>";
   ?>