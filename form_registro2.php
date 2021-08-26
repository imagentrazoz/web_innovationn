<!DOCTYPE html>
<html lang="es-ES">
	<head>
		<meta charset="UTF-8">
		<title>Formulario proyecto</title>
		<link rel="stylesheet" type="text/css" href="estilos_for_ingreso.css">
		<script src="https://kit.fontawesome.com/ccc37eaf3c.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<form class="formulario">
			<h1>Registrate</h2>
			<h5>Diligencie el formulario</h5>
				<div class="contenido">
					<div class="input-contenido">
					<i class="fas fa-user-alt icon"></i>
					<input type="text" name="realname" class="form-control" maxlength="35" placeholder="Ingresa su Nombre Completo" required="">
					</div>
					<div class="input-contenido">
					<i class="fas fa-envelope icon"></i>
					<input type="text" name="nick" class="form-control" maxlength="25" required placeholder="Ingresa su correo electronico">
					</div>
					<div class="input-contenido">
					<i class="fas fa-key icon"></i>
					<input type="password" name="pass" class="form-control" placeholder="Ingrese su contraseña" maxlength="20">
					</div>
					<div class="input-contenido">
					<i class="fas fa-key icon"></i>
					<input type="password" name="rpass" class="form-control" required placeholder="Confirme su Contaseña" maxlength="20">
					</div>
				</div>
				<input type="submit" name="submit" value="Registrarme" class="boton-registro">  
				<p>Al registrarse, aceptas los terminos y condiciones de uso y politicas de privicidad.</p>
				<p>¿Ya tienen una cuenta? <a class="link" href="pas.php"> inicio sesion</a></p>
		</form>
	</body>
</html>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>