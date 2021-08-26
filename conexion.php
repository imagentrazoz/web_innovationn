<?php
error_reporting(0);
$usuario="root";
$password="";
$servidor="localhost";
$basededatos="proyecto";
$mysqli=new mysqli($servidor, $usuario, $password, $basededatos);
if ($mysqli->connect_errno) 
{
	echo "Lo sentimos, el sitio web esta experimentando un problema <br>"; 
	echo "Errno: ".$mysqli->connect_errno. "<br>";
	exit;
}
else 
{
	echo "la conexion es exitosa <br>";
	echo "Dtos de la conexion actual <br>";
	echo "servidor:" .$servidor. "<br>";
	echo "Base de datos:" .$basedados."<br>";
}
$mysqli->close();
?>