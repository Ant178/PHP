<?php
$conexion = mysqli_connect("localhost","root","","sem20231"); //Nombre del servidor, nombre del ususario, contraseño, la BD
$consulta = "SELECT * FROM alumno";
$resultado = mysqli_query($conexion,$consulta); //Primer parametro es la conexion y el segundo es la consulta
$numResultado = mysqli_num_rows($resultado);//Numero de filas

echo "Hola tienes $numResultado registros en tu tabla alumno";
?>