<?php
session_start();
$a = $_SESSION["login"];
if(isset($a)){
    echo "Vista en modo desarrollador";
}
else{
    echo "<a href= 'sesion5.php'>Regresar a la sesion5</a>";
}
?>