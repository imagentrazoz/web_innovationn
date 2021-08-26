<html>
<head>
	<title> Conexion a una BD </title>
</head>
<body>
	<?php
	$mysqli= new Mysqli("localhost","root","","proyecto");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (".$mysqli->connect_errno .")".$mysqli->connect_errno;
	}
	else 
	{
		echo "Conexion Exitosa";
	}
	echo "<br>";
	echo $mysqli->host_info . "\n";
	echo "br";
	$query="select *from datos";
	$resultado=$mysqli->query($query);
	echo ("<table border=1>");
	echo "<th>","Cod_proveedor","</th>";
	echo "<th>","Nombre_empresa","</th>";
	echo "<th>","Teléfono","</th>";
	while ($rows=$resultado->fetch_assoc())
	{
		echo ("<tr>");
		echo ("<td>".$rows["Cod:proveedor"]."</td>");
		echo ("<td>".$rows["Nombre_empresa"]."</td>");
		echo ("<td>".$rows["Teléfono"]."</td>");
		echo ("</tr>");
	}
	echo("</table>");
	$resultado->free();
	?>
</body>
</html>
