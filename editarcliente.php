
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>MODIFICACION CLIENTES</h1>
<br>
<br>
<form action="editarcliente.php" method="post">
DNI: <input type="text" name="dni" value=<?php (isset($_POST['dni']))?$_POST['dni']:8?>><br>
		Cliente: <input type="text" name="nombre" value="<?php (isset($nombre))?$nombre:''?>"><br>
		Direccion: <input type="text" name="direccion" value="<?php (isset($direccion))?$direccion:''?>"><br>
		Provincia: <input type="text" name="provincia" value="<?php (isset($provincia))?$provincia:''?>"><br>
		Localidad: <input type="text" name="localidad" value="<?php (isset($localidad))?$localidad:''?>"><br>
		Telefono: <input type="text name="telefono" value="<?php (isset($telefono))?$telefono:''?>"><br>
		E-mail: <input type="text" name="email"  value="<?php (isset($email))?$email:''?>">
		<br> <br><br>
		<input type="submit" value="Grabar nuevo cliente">
	</form>
</body>
</html>