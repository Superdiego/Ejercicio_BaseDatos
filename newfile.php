<?php

function validaRequerido ($valor){
    if(trim($valor)==''){
        return false;
    }else{
        return true;
    }
}
function validaDni($valor){
    if(preg_match("/^[0-9]{8}[A-Za-z]$/",$valor)){
        return true;
    }else{
        return false;
    }
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$dni = isset($_POST['dni']) ? $_POST['dni'] : null;
$errores = array();
$vacio = null;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(trim($_POST['nombre']) == ''){
        $vacio = "El campo está vacio";
    }
    if(!validaRequerido($nombre)){
        $errores[] = 'El campo es incorrecto';
    }
    if(!validaDni($dni)){
        $errores[] = 'El dni es incorrecto';
    }
}


?>
<!DOCTYPE html>
<html><head></head><body>
<?php 
foreach($errores as $error){
    echo $error . "<br>";
}
?>

<form method="post" action="newfile.php">
Nombre: <input type="text" name="nombre" value="<?php echo $nombre ?>"><br>
DNI: <input type="text" name="dni" value= "<?php echo $dni ?>"><br><br>
<input type="submit"><br>
</form>

</body></html>
