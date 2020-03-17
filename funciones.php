<?php
function conectar(){
    $con = mysqli_connect("localhost", "jefe", "jefe","clientes_DB");
    if(mysqli_connect_errno()){
        echo "Error en la conexion";
    }else{
    return $con;
    }
}
function desconectar($con){
    mysqli_close($con);
}

function listar_clientes(){
    $con = conectar();
    $cod = "SELECT * FROM clientes";
    $consulta = mysqli_query($con, $cod);
    while($fila=mysqli_fetch_array($consulta)){
        echo "<tr><td>{$fila['dni']}</td><td>{$fila['Nombre']}</td><td>{$fila['Direccion']}</td>
            <td>{$fila['Localidad']}</td><td>{$fila['Provincia']}</td><td>{$fila['Telefono']}</td>
            <td>{$fila['email']}</td></tr>";
    }
    desconectar($con);
    
}

function pintar_tabla(){
   echo "<table><thead><tr><th>DNI</th><th>Nombre</th><th>Direccion</th>
        <th>Localidad</th><th>Provincia</th><th>Telefono</th><th>email</th><th>Editar</th><th>Borrar</th></tr></thead>";
    listar_clientes();
        echo "</table>";
    
}


//$con = conectar();
//desconectar($con);

?>