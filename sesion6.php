<?php
/*De los datos que se introdujeron en el formulario se
verifica contra la BD y el resultado que obtenemos solo es
correcto o incorrecto
En funcion a este resultado, daremos acceso al sistema o lo
redirigiremos al formulario para que inicie sesión */

//Utilizaremos para ella la funcion de header() con PHP
    session_start();
    $resBD = 1;
    if($resBD==1){
    $_SESSION["login"]=13245;
    header("location:sesion7.php");
    } else{
    header("location:sesion5.php");
    }

?>