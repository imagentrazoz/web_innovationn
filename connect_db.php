<?php


		$mysqli = new MySQLi("localhost", "root","", "proyecto");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			echo "Conexión exitosa!";

$link =mysqli_connect("localhost","root","", "proyecto");
if($link){
mysqli_select_db($link,"proyecto");
	}
?>