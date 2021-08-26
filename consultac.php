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
	echo "<th>","Cod_compra","</th>";
	echo "<th>","Cod_producto","</th>";
	echo "<th>","Cantidad","</th>";
	while ($rows=$resultado->fetch_assoc())
	{
		echo ("<tr>");
		echo ("<td>".$rows["Cod_compra"]."</td>");
		echo ("<td>".$rows["Cod_producto"]."</td>");
		echo ("<td>".$rows["Cantidad"]."</td>");
		echo ("</tr>");
	}
	echo("</table>");
	$resultado->free();
	?>
</body>
</html>
