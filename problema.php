<?php
function listar_clientes(){
    $con = conectar();
    $cod = "SELECT * FROM clientes";
    $consulta = mysqli_query($con, $cod);
    while($fila=mysqli_fetch_array($consulta)){
        echo "<tr><td>{$fila['dni']}</td><td>{$fila['Nombre']}</td><td>{$fila['Direccion']}</td>
            <td>{$fila['Localidad']}</td><td>{$fila['Provincia']}</td><td>{$fila['Telefono']}</td>
            <td>{$fila['email']}</td><td><a href='editarcliente.php?dni={$fila['dni']}'>
            <img src='iconos/editar.png' width=25px height=25px></a></td><td><a href='borrarcliente.php?dni={$fila['dni']}'>
            <img src='iconos/eliminar.jpg' width=25px height=25px></a></tr>";
    }
    desconectar($con);
}
?>