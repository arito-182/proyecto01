<?php
    $id = $_POST['id'];
    $nombre_del_cliente= $_POST['nombre_del_cliente'];
    $telefono	= $_POST['telefono'];
    $marca_de_moto	= $_POST['marca_de_moto'];
    $cilindraje	= $_POST['cilindraje'];
    $placa	= $_POST['placa'];
    $whatsapp	= $_POST['whatsapp'];
    $servicio_de_diagnostico	= $_POST['servicio_de_diagnostico'];
    $valor_del_servicio	= $_POST['valor_del_servicio'];
    $total= $_POST['total'];
    
    $cnx = mysqli_connect("localhost", "root","","login_register_db");
     $sql = "UPDATE  usuarios02 set nombre_del_cliente='$nombre_del_cliente', telefono='$telefono', marca_de_moto='$marca_de_moto', cilindraje='$cilindraje', placa='$placa', whatsapp='$whatsapp', servicio_de_diagnostico='$servicio_de_diagnostico', valor_del_servicio='$valor_del_servicio', total='$total' WHERE id = '$id'"; /*quite like */
    $rta = mysqli_query($cnx, $sql);

    if (mysqli_query($cnx, $sql)) {
        header("location: Bienvenido.php");
    } 
    
    else {
        echo "No se actualizo: " . mysqli_error($cnx);
    }

?>

