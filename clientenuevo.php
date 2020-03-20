<?php
include ("funciones.php");
function val_nombre($valor){
    if(trim($valor) == ''){
        return false;
    }else{
        return true;
    }
}
function val_dni($valor){
    if(preg_match("/^[0-9]{8}[A-Za-z]$/",$valor)){
        return true;
    }else{
        return false;
    }
}
function val_email($valor){
    if(preg_match("/^\w+\@\w+\.\w+$/",$valor)){
        return true;
    }else{
        return false;
    }
}

$dni = isset($_POST['dni']) ? $_POST['dni'] : null;
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : null;
$provincia = isset($_POST['provincia']) ? $_POST['provincia'] : null;
$localidad = isset($_POST['localidad']) ? $_POST['localidad'] : null;
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$err_dni = null;
$err_nombre = null;
$err_email = null;




if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!val_dni($dni)){
        $err_dni = "Introducir dni correcto";
    }
    
    if(!val_nombre($nombre)){
        $err_nombre = "El campo nombre es obligatorio" ;
    }
    if(!val_email($email)){
        $err_email = "Introduzca un email valido" ; 
    }
    if(val_dni($dni) && val_nombre($nombre) && val_email($email)){
        $codigo = "INSERT INTO clientes (dni, Nombre, Direccion, Localidad, Provincia, Telefono, email)
                    VALUES ('$dni','$nombre','$direccion','$provincia','$localidad','$telefono','$email')";
        $con = conectar();
        $consulta = mysqli_query($con,$codigo);
        desconectar($con);
        
    }
        
}


?>
<!DOCTYPE html>
<html>
<head>


</head>
<body>

	<h1>ALTA CLIENTES</h1>
	<br>
	<br>
	<form action="clientenuevo.php" method="post">
		DNI: <input type="text" name="dni" value="<?php echo $dni ; ?>"><?php echo $err_dni ; ?><br>
		Cliente: <input type="text" name="nombre" value="<?php echo $nombre ; ?>"><?php echo $err_nombre ; ?><br>
		Direccion: <input type="text" name="direccion" value="<?php echo $direccion ; ?>"><br>
		Provincia: <input type="text" name="provincia" value="<?php echo $provincia ; ?>"><br>
		Localidad: <input type="text" name="localidad" value="<?php echo $localidad ;?>"><br>
		Telefono: <input type="text" name="telefono" value="<?php echo $telefono ; ?>"><br>
		E-mail: <input type="text" name="email"  value="<?php echo $email ; ?>"><?php echo $err_email ; ?>
		<br> <br><br>
		<input type="submit" value="Grabar nuevo cliente">
	</form>







</body>
</html>