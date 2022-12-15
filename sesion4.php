    <?php
    /* Uso de Sesiones en PHP */
    session_start(); // Iniciar la sesión
   $nom = $_SESSION["nombre"];
   $bol = $_SESSION["boleta"];
   $escuela = $_SESSION["escuela"];

   echo "<h1>Hola $nom tu boleta es: $bol y estas en la escuela $escuela.</h1>";
   echo "<a href='sesion5.php'>Sesion5</a>";
    echo "<a href='sesion1.php'>Iniciar</a>";
   ?>