<?php 
$mysql=new Mysql('127.0.0.1', 'root', '', 'proyecto');
if (mysql->connect_errno) {
	echo "Lo sentimos, fallo al conectar <br>";
	exit;
}
else 
{
	$codigopr = $_POST["ncodigop"];
	$nombrep = $_POST["tproducto"];
	$cantidad = $_POST["tcantidad"];
	$proveedor =$_POST["ncodigop"];
	$sql ="INSERT INTO productos VALUES ('".$codigopr."','".$nombrep."','".$cantidad."','".$proveedor."')"; 
	$mysql ->query($sql);
	echo "Los datos fueron ingresados correctamente";
}
$mysql->close();
?>