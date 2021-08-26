<?php 
$mysql=new Mysql('127.0.0.1', 'root', '', 'proyecto');
if (mysql->connect_errno) {
	echo "Lo sentimos, fallo al conectar <br>";
	exit;
}
else 
{
	$cod_producto = $_POST["ncodigop"];
	$empresa = $_POST["tnombrep"];
	$telefono = $_POST["ttele1"];
	$sql ="INSERT INTO proveedor VALUES ('".$cod_producto."','".$empresa."'.'".$telefono."')"; 
	$mysql ->query($sql);
	echo "Los datos fueron ingresados correctamente";
}
$mysql->close();
?>