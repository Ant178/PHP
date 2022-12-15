<?php
    /*Utilizamos el arreglo asociatibo global de PHP
    $_REQUEST el cual contiene toda la informacion relacionada a los arreglos $_POST[],
    $_GET[] y $_SESSION[] */
    session_start();
    $temp = $_REQUEST["nombreSesion"];
    unset($_SESSION[$temp]); //Destruimos la sesion
    header("location:sesion5.php");
?>