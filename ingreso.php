<?php
$mysqli=new Mysqli('127.0.0.1','root','','proyecto');
if ($mysqli->connect_errno) 
{
	echo "Lo sentimos, fallo al conectarse<br>";
	exit;
}
else 
{
	$codfactura=$_POST['nfactura'];
	$codcompra=$_POST['ncompra'];
	$apellido1=$_POST['tape1'];
	$apellido2=$_POST['tape2'];
	$nombre=$_POST['tnom'];
	$cargo=$_POST['tcarg'];
	$salario=$_POST['tsal'];
	$edad=$_POST['nedad'];
	$sexo=$_POST['tsex'];
	$estadocivil=$_POST['test'];
	$hijos=$_POST['nhijos'];
	$cuidad=$_POST['tcuidad'];
	$direccion=$_POST['tdire'];
	$sql="INSERT INTO empleados VALUES('".$codemple."','".$cedula."','".$apellido1."','".$apellido2."','".$nombre."','".$cargo."','".$salario."','".$edad."','".$sexo."','".$estadocivil."','".$hijos."','".$cuidad."','".$direccion."')";
	$mysqli->query($sql);
	echo "los datos fueron ingresados correctamente";
}
$mysqli->close();
?>