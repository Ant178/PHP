<?php
    /* Uso de Sesiones en PHP */
    session_start(); // Iniciar la sesión
   $nom = $_SESSION["nombre"];
   $bol = $_SESSION["boleta"];
   $escuela = $_SESSION["escuela"];

   //session_destroy(); //Destruimos todas las sesiones
   //unset($_SESSION["nombre"]);
   echo "<h1>Hola $nom tu boleta es: $bol y estas en la escuela $escuela.</h1>";
   echo "<a href='sesion4.php'>Ir a sesión 4</a>";
   ?>