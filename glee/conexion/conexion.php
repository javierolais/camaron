<?php
// datos para la coneccion a mysql 
$hostdb= "localhost";
$db= "practica";

//Realizamos la conexion
$conexion = mysql_connect($hostdb,"root");

//Estructura de control por si falla
if(!$conexion)
{
die("No he podido conectar porque: ".mysql_error());
}
//Seleccion la base de datos
mysql_select_db("practica", $conexion);
?>