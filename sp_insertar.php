<?php
    $nombre_del_cliente= $_POST['nombre_del_cliente'];
    $telefono	= $_POST['telefono'];
    $marca_de_moto	= $_POST['marca_de_moto'];
    $cilindraje	= $_POST['cilindraje'];
    $placa	= $_POST['placa'];
    $whatsapp	= $_POST['whatsapp'];
    $servicio_de_diagnostico = $_POST['servicio_de_diagnostico'];
    $valor_del_servicio	= $_POST['valor_del_servicio'];
    $total= $_POST['total'];
    
    $cnx = mysqli_connect("localhost", "root","","login_register_db");
    $sql = "INSERT INTO usuarios02(nombre_del_cliente, telefono, marca_de_moto, cilindraje, placa, whatsapp, servicio_de_diagnostico, valor_del_servicio, total) 
    VALUES('$nombre_del_cliente', '$telefono', '$marca_de_moto', '$cilindraje', '$placa', '$whatsapp', '$servicio_de_diagnostico', '$valor_del_servicio', '$total')";
    $rta = mysqli_query($cnx, $sql);
 
    if (!$rta) {
        echo "No se inserto!";
    }
    else {
        header("location:Bienvenido.php");
    }
/*
    if (mysqli_query($cnx, $sql)) {
        header("location: Bienvenido.php");
    } 
    else {
        echo "Error al insertar datos: " . mysqli_error($cnx);
    }*/

?>