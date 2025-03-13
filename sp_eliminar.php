<?php
    $id = $_GET['id'];
      
    $cnx = mysqli_connect("localhost", "root","","login_register_db");
    $sql = "DELETE FROM usuarios02  WHERE id = '$id'";
    $rta = mysqli_query($cnx, $sql);

    if (mysqli_query($cnx, $sql)) {
        header("location: Bienvenido.php");
    } 
    
    else {
        echo "No se Eliminó: " . mysqli_error($cnx);
    }

?>