<?php
session_start();
$a = $_SESSION["login"];
if(isset($a)){
    echo "Vista en modo desarrollador para: $a<br>";
    /*Con el metodo GET, pasamos los datos a una página colocando al final del nombre del archivo
    un signo '?' y los pares de datos variable=valor, en este caso
    'nombreSesion' con el valor del 'usuario' al archivo de cerrar sesion*/
    echo "<a href= 'Cerrarsesion.php?nombreSesion=usuario'>Cerrar sesion</a>";
}
else{
    header("locatio:sesion5.php");
}
?>